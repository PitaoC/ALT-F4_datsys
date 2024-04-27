<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book_StudentController;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Book_StudentControllers = Book_StudentController::all();
        echo $Book_StudentControllers;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book_name = $request->book_name;
        $description = $request->description;
        $status = $request->status;



        $Book_StudentControllers = new Book_StudentController;
        $Book_StudentControllers->book_name = $book_name;
        $Book_StudentControllers->description = $description;
        $Book_StudentControllers->status = $status;


        $Book_StudentControllers->save();

        echo "added";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Book_StudentControllers = Book_StudentController::find($id);
        echo $Book_StudentControllers;
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book_name = $request->book_name;
        $description = $request->description;
        $status = $request->status;



        $Book_StudentControllers = Book_StudentController::find($id);
        $Book_StudentControllers->book_name = $book_name;
        $Book_StudentControllers->description = $description;
        $Book_StudentControllers->status = $status;


        $Book_StudentControllers->update();

        echo "updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete ($id)
    {
        $Book_StudentControllers = Book_StudentController::find( $id );

        $Book_StudentControllers->delete();

        echo "deleted";
    }
}
