<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function welcome () {
        $student = Student::all();
        $men = Student::where('gender', 'homme')->get();
        $women = Student::where('gender', 'femme')->get();
        return view('welcome', compact('student', 'men', 'women'));
    }

    function index () {
        $student = Student::all();
        return view('pages.student', compact('student'));
    }

    function create () {
        return view('pages.createStudent');
    }

    function store (Request $request) {
        $store = new Student();
        $store->name = $request->name;
        $store->gender = $request->gender;
        $store->email = $request->email;
        $store->age = $request->age;
        $store->save();
        return redirect()->back();
    }
}
