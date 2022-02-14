<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function addResult($newGrade)
    {
        if ($newGrade > $this->best_grade) {
            $this->best_grade = $newGrade;
            // This does not work if you use it while making a new table
            // due to the default being set after this 'if'
            // it does work when you use it on an existing table
            if ($this->best_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
            }
        }

        $this->save();
    }
}
