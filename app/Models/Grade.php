<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function addResult($newGrade)
    {
        if ($newGrade > $this->best_grade) {
            $this->best_grade = $newGrade;

            if ($this->best_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
                $this->course()->assignCredits();
            }
        }
        $this->save();
    }
}
