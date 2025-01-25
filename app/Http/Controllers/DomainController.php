<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;


class DomainController extends Controller
{
    // Show all domains
    public function index()
    {
        $domains = Domain::all();
        return response()->json($domains);
    }

    // Show a specific domain
    public function show($id)
    {
        $domain = Domain::find($id);
        
        if (!$domain) {
            return response()->json(['message' => 'Domain not found'], 404);
        }
        
        return response()->json($domain);
    }

    // Store a new domain
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:domains|string|max:255',
            'user_id' => 'required|exists:users,id',
            'registration_date' => 'required|date',
            'expiration_date' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        $domain = Domain::create($validated);
        
        return response()->json($domain, 201);
    }

    // Update an existing domain
    public function update(Request $request, $id)
    {
        $domain = Domain::find($id);
        
        if (!$domain) {
            return response()->json(['message' => 'Domain not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:domains,name,' . $id,
            'user_id' => 'required|exists:users,id',
            'registration_date' => 'required|date',
            'expiration_date' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        $domain->update($validated);
        
        return response()->json($domain);
    }

    // Delete a domain
    public function destroy($id)
    {
        $domain = Domain::find($id);
        
        if (!$domain) {
            return response()->json(['message' => 'Domain not found'], 404);
        }

        $domain->delete();
        
        return response()->json(['message' => 'Domain deleted successfully']);
    }
}

