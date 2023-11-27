<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','credits','knowledgeArea','isMandatory'];

    public function Teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher__subjects', 'subject_id','teacher_id' )->withPivot('id');
    }


}
