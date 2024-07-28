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

    public function getComplaints()
    {
        $complaints = Complaint::all();

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
