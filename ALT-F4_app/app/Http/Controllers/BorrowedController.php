<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_StudentController;
use App\Models\Book_StudentController;
use App\Models\Borrowed_StudentController;



class BorrowedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $Borrowed = Borrowed_StudentController::join('borrowed__student_controllers','student__student_controllers.id','=','borrowed__student_controllers.student_id')
        //  ->select('student__student_controllers.*','borrowed__student_controllers.*')
        //  ->where('student__student_controllers.id','=',1)->get();
        //  echo $Borrowed;
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $borroweds= Borrowed_StudentController::with('student', 'book')->find($id);


        $combinedData = [

            'Id' => $borroweds->id,
            'Student_firstname' => $borroweds->student->firstname,
            'Student_lastname' => $borroweds->student->lastname,
            'Book_Name' => $borroweds->book->book_name,
            'Book_Description' => $borroweds->book->description,
        ];

 
        return response()->json($combinedData);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
