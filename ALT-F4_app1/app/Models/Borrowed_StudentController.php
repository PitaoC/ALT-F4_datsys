<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowed_StudentController extends Model
{
    use HasFactory;
    protected $table = 'borrowed__student_controllers';
    public $timestamps = false;


        public function student()
{
    return $this->belongsTo(Student_StudentController::class);
}

public function book()
{
    return $this->belongsTo(Book_StudentController::class);
}
}
