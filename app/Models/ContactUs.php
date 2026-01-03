<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ContactUs extends Authenticatable
{
    protected $table = 'contact_us';
    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'message'
    ];

    public $timestamps = true;
}
