<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        
        return view('layout.bayar', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.addBayar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nim' => $request->nim,
            'status_bayar' => $request->status_bayar,
            'total_bayar' => $request->total_bayar,
        ];
        
        Student::create($data);
        
        return redirect('/bayar');
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
        // $student = Student::find($id);
        $student = Student::findOrFail($id);
        return view('layout.editBayar', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nim' => $request->nim,
            'status_bayar' => $request->status_bayar,
            'total_bayar' => $request->total_bayar,
        ];
        
        $student->update($data);
        
        return redirect('/bayar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        
        return redirect('/bayar');
    }
}
