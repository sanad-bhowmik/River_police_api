<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use Illuminate\Http\Request;
use App\Models\User;
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
        $statusCodes = [
            200 => 'OK',
            201 => 'Created',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            500 => 'Internal Server Error',
        ];

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

                return response()->json([
                    'user' => $user,
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

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'password' => 'required|integer',
        ]);

        $user = User::where('name', $validatedData['name'])
            ->where('password', $validatedData['password'])
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'user' => $user
        ], 200);
    }
}
