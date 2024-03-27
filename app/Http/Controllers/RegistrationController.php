<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\MaCoBan;
use App\Models\MaNangCao;


class RegistrationController extends Controller
{
    // Method to display the registration form
    public function showForm()
    {
        return view('registration');
    }

    // Method to handle registration submission
    public function store(Request $request)
    {
        // Validate input data from the form
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Check for image
            'full_name' => 'required|string|max:255', // Full name
            'dob' => 'required|date', // Date of birth
            'place_of_birth' => 'required|string|max:255', // Place of birth
            'gender' => 'required|in:Nam,Nữ', // Gender
            'ethnicity' => 'required|string|max:255', // Ethnicity
            'phone_number' => 'required|string|max:20', // Phone number
            'student_batch' => 'required|string', // Student batch
            'major' => 'required|string|max:255', // Major
            'registration_date' => 'required|string', // Registration date
            'note' => 'nullable|string|max:500', // Note
            'level' => 'required|string|max:255',
        ]);

        // Store the avatar image in the 'public/avatars' directory (if provided)
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }

        // Save registration information to the database
        $registration = Registration::create([
            'avatar' => $avatarPath,
            'full_name' => $request->full_name,
            'dob' => $request->dob,
            'place_of_birth' => $request->place_of_birth,
            'gender' => $request->gender,
            'ethnicity' => $request->ethnicity,
            'phone_number' => $request->phone_number,
            'student_batch' => $request->student_batch,
            'major' => $request->major,
            'registration_date' => $request->registration_date,
            'note' => $request->note,
            'level' => $request->level, // Include the level in the registration data
        ]);

        // Generate the code based on the level
    $code = $this->generateCode($request->level, $registration->id);

    // Save the code into the corresponding table
    if ($request->level === 'Cơ Bản') {
        MaCoBan::create(['maso' => $code]);
    } elseif ($request->level === 'Nâng Cao') {
        MaNangCao::create(['maso' => $code]);
    }

    // Redirect back to the registration form with success message
    return redirect()->back()->with('success', 'Registration successful.');
}

// Function to generate code
private function generateCode($level, $id)
{
    // Define the prefix based on the level
    $prefix = ($level === 'Cơ Bản') ? 'CB' : 'NC';

    // Generate the code by concatenating the prefix and the year followed by the padded ID
    $code = $prefix . date('Y') . sprintf('%02d', $id);

    return $code;
}
 // Method to show existing registrations
 public function showRegistrations()
 {
     $registrations = Registration::all(); // Fetch all registrations from the database

     return view('existing_registrations', ['registrations' => $registrations]);
 }

}