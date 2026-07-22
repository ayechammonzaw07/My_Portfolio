<?php

namespace App\Models;

/*
|--------------------------------------------------------------------------
| ContactMessage Model
|--------------------------------------------------------------------------
| Represents a contact form submission stored in the database.
| Uses mass-assignment for the fillable fields to allow
| creating records via ContactController::store().
*/

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * These fields can be set via create() or fill() methods.
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
