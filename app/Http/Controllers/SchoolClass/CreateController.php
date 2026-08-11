<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $title = "Sistem Sekolah - Tambah Kelas";

        $majors = [
            ['id' => 1, 'name' => 'AKL'],
            ['id' => 2, 'name' => 'TKJ'],
            ['id' => 3, 'name' => 'BD']
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah']
        ];

        return view('classes.create', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }
}