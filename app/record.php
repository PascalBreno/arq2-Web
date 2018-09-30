<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    protected $fillable = [
        'JogoA', 'JogoB', 'JogoC','id_user'
    ];

    public function users(){
        return $this->hasOne(User::class);
    }
}
