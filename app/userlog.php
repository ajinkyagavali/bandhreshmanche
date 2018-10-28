<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userlog extends Model
{

    protected $table = 'user_log';

    protected $fillable =['user_log_id','request_id','accepted_id','flag'];
}
