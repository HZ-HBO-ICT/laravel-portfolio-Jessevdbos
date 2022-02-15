<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function addResult($number)
    {
        if ($this->best_grade >= $this->lowest_passing_grade && $number > $this->best_grade) {
            $this->passed_at = now();
            $this->save();
        }

        if ($number > $this->best_grade) {
            $this->best_grade = $number;
            $this->save();
        }
    }
}
