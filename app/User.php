<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reg_id','profileby','name', 'adharcardno', 'email', 'password','mname','lname','mobileno','gender','marital_status','subcaste','mother_tongue','country_living','reg_date','photo','lastcollegename','terms','isactive','isdeleted','ispayment','isAccepted','expectation','description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
{
    return $this->admin; // this looks for an admin column in your users table
}
}
