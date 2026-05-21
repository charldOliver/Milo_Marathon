<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Runner extends Model
{
    protected $table = 'registrations';
    protected $fillable = [
        'full_name',
        'age',
        'gender',
        'phone',
        'email',
        'address',
        'marathon_category',
        'registration_date',
        'emergency_contact',
        'shirt_size'
    ];
}