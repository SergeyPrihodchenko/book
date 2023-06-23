<?php

namespace App\Models;

use App\Http\Requests\NoteRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'surname',
        'phone',
        'email',
        'date_of_birth',
        'photo'
    ];
}
