<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * @var mixed
     */


        public function addGrade($grade) {
            if ($grade >= $this->lowest_passing_grade && $grade > $this->best_grade) {
                $this->best_grade = $grade;
                $this->passed_at = now();
            }
            else {
                $this->best_grade = $grade;
            }
        }

}
