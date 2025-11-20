<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }

    public function create()
    {
        return view('admin.student.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Student $student)
    {
        return view('admin.student.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('admin.student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
        ]);

        $student->update($validated);

        return redirect()
            ->route('admin.students.index')
            ->with('success', 'Data siswa berhasil diperbaharui');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()
            ->route('admin.students.index')
            ->with('success', 'Data siswa berhasil dihapus');
    }
}
