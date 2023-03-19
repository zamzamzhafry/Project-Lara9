<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'teacher_id',
    ];

    protected $table = 'class';

    /**
     * Get all of the comments for the ClassRoom
     *

     */
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id', 'id' );
    }

    public function HomeroomTeacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

}
