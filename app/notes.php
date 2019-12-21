<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    protected $table = 'notes';
    public $primarykey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
}
