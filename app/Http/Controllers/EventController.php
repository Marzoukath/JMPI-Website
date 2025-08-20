<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('jmpi-website.events', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('jmpi-website.show', compact('event'));
    }

    public function submit (Request $request)
    {
        // Handle the form submission logic here
        // For example, you might want to validate the request and save data to the database

        // Example validation
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|email',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'location' => 'required|string|max:255',
            'participants_count' => 'required|integer|min:1',
            'committee' => 'required|string|max:255',
        ]);

        // Example of how to access the validated data
        $data = $request->only([
            'name',
            'description',
            'start_date',
            'end_date',
            'location',
            'participants_count',
            'committee',
        ]);     
        

        // Logic to handle the submission, e.g., saving to the database or sending an email

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}