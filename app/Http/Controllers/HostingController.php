<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use Illuminate\Http\Request;

class HostingController extends Controller
{
    // Show all hostings
    public function index()
    {
        $hostings = Hosting::all();
        return response()->json($hostings);
    }

    // Show a specific hosting
    public function show($id)
    {
        $hosting = Hosting::find($id);
        
        if (!$hosting) {
            return response()->json(['message' => 'Hosting not found'], 404);
        }
        
        return response()->json($hosting);
    }

    // Store a new hosting
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
            'user_id' => 'required|exists:users,id',
        ]);

        $hosting = Hosting::create($validated);
        
        return response()->json($hosting, 201);
    }

    // Update an existing hosting
    public function update(Request $request, $id)
    {
        $hosting = Hosting::find($id);
        
        if (!$hosting) {
            return response()->json(['message' => 'Hosting not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive',
            'user_id' => 'required|exists:users,id',
        ]);

        $hosting->update($validated);
        
        return response()->json($hosting);
    }

    // Delete a hosting
    public function destroy($id)
    {
        $hosting = Hosting::find($id);
        
        if (!$hosting) {
            return response()->json(['message' => 'Hosting not found'], 404);
        }

        $hosting->delete();
        
        return response()->json(['message' => 'Hosting deleted successfully']);
    }
}
