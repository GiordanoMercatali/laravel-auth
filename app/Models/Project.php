<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'languages', 'n_stakeholders', 'year', 'git_link', 'slug'];

    /*
    public function setTitleAttributes($_title){
        $this->attrinutes
    }
    */
}
