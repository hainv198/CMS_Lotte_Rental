<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'location','service','short_time', 'body'
    ];
    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "your_admin_email@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
