<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // ELOQUENT ORM (REKOMENDASI)
        $student = Student::all(); // SELECT * FROM Student

        // QUERY BUILDER
        // ROW QUERY

        return view('student', ['studentList' => $student]);
    }
}
