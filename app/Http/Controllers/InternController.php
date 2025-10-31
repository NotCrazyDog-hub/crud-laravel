<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interns = Intern::all();
        return view('interns.index', compact('interns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $intern = Intern::create($request->all());
        return redirect()->route('interns.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $intern = Intern::findOrFail($id);
        return view('interns.edit', compact('intern'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $intern = Intern::findOrFail($id);
        $intern->update($request->except(['_token', '_method']));
        return redirect()->route('interns.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
