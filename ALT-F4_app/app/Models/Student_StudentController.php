<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_StudentController extends Model
{
    use HasFactory;  
    public function Borrowed_StudentControllers(){
        return $this->belongsTo(Borrowed_StudentController::class);
    } 
}
