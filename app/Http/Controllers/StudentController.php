<?php

namespace App\Http\Controllers;

use App\Models\Student;
// use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->get();

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title
        ]);
    }
    public function store(StoreRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Tambahkan data ke database
        // // CARA 1: TANPA MASS ASSIGN
        // $student = new Student();
        // $student->nis = $request->nis;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->major = $request->major;
        // $student->class = $request->class;
        // $student->save();
        // // handle if success
        // return redirect()->route('student.index');

        // CARA 2: PAKAI MASS ASSIGN
        Student::create($validatedRequest);
        // handle if success
        return redirect()->route('students.index');
    }
    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }
    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }
    public function update(Student $student, UpdateRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Update Data
        $student->update($validatedRequest);

        // Handle if Success
        return redirect()->route('students.index');
    }
    public function destroy(Student $student)
    {
        $student->delete();

        // Handle if Success
        return redirect()->route('students.index');
    }
}
