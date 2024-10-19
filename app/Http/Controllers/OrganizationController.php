<?php

namespace App\Http\Controllers;

use App\Models\Organization; 
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::paginate(10); 
        return view('organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('organizations.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255', 
            'units' => 'required|string', 
        ]);

        Organization::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'), 
            'units' => $request->input('units'), 
        ]);

        return redirect()->route('organizations.index')->with('success', 'Your organization has been submitted successfully.');
    }

    public function edit($id)
    {
        $organization = Organization::findOrFail($id); 
        return view('organizations.edit', compact('organization')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255', 
            'units' => 'required|string',
        ]);
    
        $organization = Organization::findOrFail($id);
        $organization->update($request->all());
    
        return redirect()->route('organizations.index')->with('success', 'Organization updated successfully');
    }
    public function destroy($id)
    {
        $organization = Organization::findOrFail($id);
        $organization->delete();
    
        return redirect()->route('organizations.index')->with('success', 'Organization deleted successfully');
    }
    
    public function show($id)
    {
        $organization = Organization::find($id);

        if (!$organization) {
            return redirect()->route('organizations.index')->with('error', 'Organization not found');
        }

        return view('organizations.show', compact('organization'));
    }
}

