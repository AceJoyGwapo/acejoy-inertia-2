<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['office_id', 'name', 'description', 'value', 'status', 'date_acquired'];

    public function employees(){
        return $this->belongsTo('App\Models\Employee');
    }

    public function offices(){
        return $this->belongsTo('App\Models\Office','office_id', 'id');
    }
}
