<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'password',
        'edad',
        'peso',
        'altura',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function alimento()
    {
        return $this->belongsToMany(Alimento::class,"usuario_consume","usuario_id","alimento_id");
    }


}
/*
{
    "name":"Fabricio",
    "email":"za@gmail.com",
    "password":"hola",
    "edad":"25",
    "peso":"70",
    "altura":"170"
}

*/
