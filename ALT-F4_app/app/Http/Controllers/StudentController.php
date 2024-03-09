<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_StudentController;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Student_StudentControllers = Student_StudentController::all();
        echo $Student_StudentControllers;
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $status = $request->status;



        $Student_StudentControllers = new Student_StudentController;
        $Student_StudentControllers->firstname = $firstname;
        $Student_StudentControllers->lastname = $lastname;
        $Student_StudentControllers->status = $status;


        $Student_StudentControllers->save();

        echo "added";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Student_StudentControllers = Student_StudentController::find($id);
        echo $Student_StudentControllers;
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $status = $request->status;



        $Student_StudentControllers = Student_StudentController::find($id);
        $Student_StudentControllers->firstname = $firstname;
        $Student_StudentControllers->lastname = $lastname;
        $Student_StudentControllers->status = $status;


        $Student_StudentControllers->update();

        echo "updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete ($id)
    {
        $Student_StudentControllers = Student_StudentController::find( $id );

        $Student_StudentControllers->delete();

        echo "deleted";
    }

}
