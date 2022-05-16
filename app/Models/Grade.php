<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'test_name', 'lowest_passing_grade', 'best_grade'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

//    /**
//     * @param $number number of the result that needs to be added
//     * @return void
//     */
//    public function addResult($number)
//    {
//        if ($number > $this->best_grade) {
//            if ($number >= $this->lowest_passing_grade && $this->passed_at == null) {
//                $this->passed_at = now();
//            }
//            $this->best_grade = $number;
//            $this->save();
//        }
//    }
}
