<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Storage;

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'topic' => 'required|string',
            'address' => 'required|string',
            'details' => 'required|string',
            'file' => 'nullable|mimes:pdf|max:2048', // Validate file type and size
        ]);

        // Handle the file upload
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('complaints', 'public'); // Store file in 'storage/app/public/complaints'
        }

        // Create the complaint
        $complaint = Complaint::create([
            'topic' => $request->input('topic'),
            'address' => $request->input('address'),
            'details' => $request->input('details'),
            'file' => $filePath, // Store the file path in the database
        ]);

        return response()->json([
            'message' => 'Complaint posted successfully.',
            'complaint' => $complaint,
        ], 201);
    }

    public function getComplaints($topic = null)
    {
        if ($topic) {
            // Ensure the topic is one of the allowed values
            $allowedTopics = ['Emergency Help', 'Complaints', 'Info'];
            if (!in_array($topic, $allowedTopics)) {
                return response()->json([
                    'message' => 'Invalid topic provided.',
                ], 400);
            }

            $complaints = Complaint::where('topic', $topic)->get();
        } else {
            $complaints = Complaint::all();
        }

        $complaints->transform(function ($complaint) {
            $complaint->file_url = url(Storage::url($complaint->file));
            return $complaint;
        });

        return response()->json([
            'message' => 'Complaints retrieved successfully.',
            'complaints' => $complaints,
        ], 200);
    }


}
