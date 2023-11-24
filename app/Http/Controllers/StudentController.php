<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('pages.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
//        $student = new Student;
//        $student->student_id = $request->input('student-id');
//        $student->name = $request->input('student-name');
//        $student->class = $request->input('student-class');
//        $student->birth_year = $request->input('student-birth-year');
//        $student->gender = $request->input('gender');
//        $student->address = $request->input('student-address');
//        $student->phone_number = $request->input('student-phone-number');
//        $student->timestamps = false;
//        $student->save();

        Student::create($request->all());

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('pages.update',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('home');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json([
            'ok' => true,
            'msg' => 'delete action successful',
        ]);
    }
}
