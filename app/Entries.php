<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    //Table name
    protected $table = 'entries';
    // Primary key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;

    public function user() {
        $this->belongsTo('App/User');
    }
}
