<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    public function addResult($testGrade){
        if($testGrade >= $this->lowest_passing_grade){
            $this->best_grade = $testGrade;
            $this->passed_at = now();
        } else{
            $this->best_grade = $testGrade;
        }



        $this->save();
    }
}
