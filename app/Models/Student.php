<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    // digubnakan untuk mass assignemnt
    protected $fillable= [
        'name',
        'gender',
        'nis',
        'class_id',
    ];

    public function class()
    {
        //karena telah CLASS_ID ID
        return $this->belongsTo(ClassRoom::class); //

        //
        // , 'foreign_key', 'other_key');
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }

    // protected $table = 'students';
    // protected $primaryKey ='id';

    // public $incrementing = false;
    // public $timestamps = false;


    // return $this->belongsTo(Post::class);


}
