<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ], 200);
    }

    public function createUser(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'password' => 'required|string',
                'phone' => 'required|string|unique:user,phone',
            ]);

            $otp = rand(1000, 9999);

            $userData = [
                'name' => $request->input('name'),
                'password' => Hash::make($request->input('password')),
                'phone' => $request->input('phone'),
                'otp' => $otp,
            ];

            $user = User::create($userData);

            Otp::create([
                'phone' => $request->input('phone'),
                'otp_code' => $otp,
            ]);

            $url = "http://103.53.84.15:8746/sendtext";
            $response = Http::get($url, [
                'apikey' => 'dfbd6568d15577db',
                'secretkey' => '61784eda',
                'callerID' => '8809612444767',
                'toUser' => $request->input('phone'),
                'messageContent' => 'Your OTP: ' . $otp,
            ]);

            if ($response->successful()) {
                $token = JWTAuth::fromUser($user);

                $user->token = $token;
                $user->save();

                return response()->json([
                    'name' => $user->name,
                    'phone' => $user->phone,
                    'token' => $token,
                    'message' => 'User created and OTP sent successfully.',
                    'status_code' => 200,
                ], 200);
            } else {
                $user->delete();
                return response()->json([
                    'error' => 'Failed to send OTP. Please try again.',
                    'status_code' => 500,
                ], 500);
            }

        } catch (ValidationException $e) {
            $errors = $e->errors();
            return response()->json([
                'error' => 'Validation Error',
                'details' => $errors,
                'status_code' => 400,
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Internal Server Error',
                'message' => $e->getMessage(),
                'status_code' => 500,
            ], 500);
        }
    }

    public function otpVerification(Request $request)
    {
        try {
            $request->validate([
                'otp' => 'required|integer',
            ]);

            $user = JWTAuth::parseToken()->authenticate();
            if ($user->otp == $request->input('otp')) {
                $user->verified = 1;
                $user->otp = null;
                $user->save();

                return response()->json([
                    'message' => 'OTP verified successfully and user is now verified.',
                    'status_code' => 200,
                ], 200);
            } else {
                return response()->json([
                    'error' => 'Invalid OTP.',
                    'status_code' => 400,
                ], 400);
            }

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Unauthorized',
                'message' => $e->getMessage(),
                'status_code' => 401,
            ], 401);
        }
    }


    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find the user by phone number
        $user = User::where('phone', $validatedData['phone'])->first();

        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        // Generate JWT token
        $token = JWTAuth::fromUser($user);

        return response()->json([
            'message' => 'Login successful',
            'user' => [
                'name' => $user->name,
                'phone' => $user->phone,
                'verified' => $user->verified,
            ],
            'token' => $token,
            'status_code' => 200,
        ], 200);
    }


    public function changePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Check if the provided current password matches the stored password
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return response()->json([
                'message' => 'Current password is incorrect.',
                'status_code' => 401,
            ], 401);
        }

        // Update the password
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return response()->json([
            'message' => 'Password changed successfully.',
            'status_code' => 200,
        ], 200);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->save();

        return response()->json([
            'message' => 'Profile updated successfully.',
            'user' => [
                'name' => $user->name,
                'phone' => $user->phone,
                'email' => $user->email,
                'address' => $user->address,
            ],
            'status_code' => 200,
        ], 200);
    }

    public function getProfile(Request $request)
    {
        $user = Auth::user();

        return response()->json([
            'status' => 'success',
            'data' => [
                'name' => $user->name,
                'phone' => $user->phone,
                'email' => $user->email,
                'address' => $user->address,
            ],
            'message' => 'Profile retrieved successfully.',
            'status_code' => 200,
        ], 200);
    }
}
