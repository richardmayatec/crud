<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'title', 'content', 'active'
    ]; */

    protected $guarded = [];

    static function todas_las_notas(){
        return Note::where('active', true)->get();
    }
}
