<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Type;

class Course extends Model
{
    use HasFactory;

    public function grade()
    {
        return $this->hasMany(Grade::class, 'course_id', 'id');
    }

    public function assignCredits()
    {
        $passedGrades = 0;
        $grades = $this->grade()->where('course_id', '=', $this->id);
        $best_grades = $grades->pluck('best_grade');
        $lowest_passing_grades = $grades->pluck('lowest_passing_grade');

        for ($i = 0; $i < count($lowest_passing_grades); $i++) {
            if ($best_grades[$i] >= $lowest_passing_grades[$i]) {
                $passedGrades++;
            }
        }
        if ($passedGrades === $grades->count()) {
            $this->passed_at = now();
            $this->save();
        }
    }
}
