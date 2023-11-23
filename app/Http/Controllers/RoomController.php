<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::paginate(3);
        return view('index', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulaire');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hotel_name' => 'required|string',
            'description' => 'required|string',
            'room_name' => 'required|string',
            'price' => 'required|numeric',
            'beds' => 'required|integer',
            'max_adults' => 'required|integer',
            'max_children' => 'required|integer',
            'attributes' => 'required|string',
            'status' => 'required|boolean',
            // Add more validation rules as needed
        ]);

        Room::create($validatedData);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('show', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('formulaire', ['room' => $room]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'hotel_name' => 'required|string',
            'description' => 'required|string',
            'room_name' => 'required|string',
            'price' => 'required|numeric',
            'beds' => 'required|integer',
            'max_adults' => 'required|integer',
            'max_children' => 'required|integer',
            'attributes' => 'required|string',
            'status' => 'required|boolean',
            // Add more validation rules as needed
        ]);

        $room->update($validatedData);

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully!');
    }
}
 