<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 
        'gender', 
        'email', 
        'postcode', 
        'address', 
        'building_name', 
        'opinion'
    ];

    public function scopeFullnameSearch($query, $fullname)
    {
        if(!empty($fullname)) {
            $query->where('fullname', 'LIKE', '%' . $fullname . '%');
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', 'like', '%' . $gender . '%');
        }
    }

    public function scopeEmailSearch($query, $email)
    {
        if (!empty($email)) {
            $query->where('email', 'like', '%' . $email . '%');
        }
    }
}
