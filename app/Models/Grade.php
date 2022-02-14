<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * @return void
     */
    public function bestGrade()
    {
        if ($this->best_grade < $this->lowest_passing_grade) {
            $this->best_grade = $this->lowest_passing_grade;
            $this->save();
        }
    }

    /**
     * @return void
     */
    public function currentDate()
    {
        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at->now();
            $this->save();
        }
    }

    use HasFactory;
}
