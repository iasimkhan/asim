<?php


namespace App\Http\Controllers;
use App\Models\Students;

use Illuminate\Http\Request;

class Studentscontroller extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
       

        // Insert data into the database
        students::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Item added successfully!');
    }
}
