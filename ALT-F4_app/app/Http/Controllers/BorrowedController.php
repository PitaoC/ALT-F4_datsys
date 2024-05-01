<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_StudentController;
use App\Models\Book_StudentController;
use App\Models\Borrowed_StudentController;
use Carbon\Carbon;




class BorrowedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Borrowed_StudentControllers = Borrowed_StudentController::all();
        echo $Borrowed_StudentControllers;

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

        $student_id = $request->input('student_id');
        $book_id = $request->input('book_id');

        // Find the student and book
        $student = Student_StudentController::findOrFail($student_id);
        $book = Book_StudentController::findOrFail($book_id);

        // Create a new borrowed instance
        $Borrowed_StudentControllers = new Borrowed_StudentController;
        $Borrowed_StudentControllers->Student_Name = "{$student->firstname} {$student->lastname}";
        $Borrowed_StudentControllers->Book_Name = $book->book_name;

        // Set the Date_Borrowed field to the current date and time
        $Borrowed_StudentControllers->Date_Borrowed = Carbon::now();

        // Save the borrowed instance
        $Borrowed_StudentControllers->save();

        echo "added";
    }



        // $Book_Name = $request->Book_Name;
        // $Student_Name = $request->Student_Name;
        // $Date_Borrowed = $request->Date_Borrowed;
        // $Status = $request->Status;



        // $Borrowed_StudentControllers = new Borrowed_StudentController;
        // $Borrowed_StudentControllers->Book_Name = $Book_Name;
        // $Borrowed_StudentControllers->Student_Name = $Student_Name;
        // $Borrowed_StudentControllers->Date_Borrowed = $Date_Borrowed;
        // $Borrowed_StudentControllers->Status = $Status;


        // $Borrowed_StudentControllers->save();

        // echo "added";
    //}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $Borrowed_StudentControllers = Borrowed_StudentController::find($id);
        echo $Borrowed_StudentControllers;

        // $borroweds= Borrowed_StudentController::with('student', 'book')->find($id);


        // $combinedData = [

        //     'Id' => $borroweds->id,
        //     'Student_firstname' => $borroweds->student->firstname,
        //     'Student_lastname' => $borroweds->student->lastname,
        //     'Book_Name' => $borroweds->book->book_name,
        //     'Book_Description' => $borroweds->book->description,
        // ];

 
        // return response()->json($combinedData);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Book_Name = $request->Book_Name;
        $Student_Name = $request->Student_Name;
        $Date_Borrowed = $request->Date_Borrowed;
        $Status = $request->Status;



        $Borrowed_StudentControllers = Borrowed_StudentController::find($id);
        $Borrowed_StudentControllers->Book_Name = $Book_Name;
        $Borrowed_StudentControllers->Student_Name = $Student_Name;
        $Borrowed_StudentControllers->Date_Borrowed = $Date_Borrowed;
        $Borrowed_StudentControllers->Status = $Status;


        $Borrowed_StudentControllers->update();

        echo "updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $Borrowed_StudentControllers = Borrowed_StudentController::find( $id );

        $Borrowed_StudentControllers->delete();

        echo "deleted";
    }
}
