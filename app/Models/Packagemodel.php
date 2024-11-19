<?php

namespace App\Models;
// use App\Models\Packagemodel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packagemodel extends Model
{
    use HasFactory;
    protected $table ='packages';
    protected $fillable =[ 'name', 'photo' ,'price', 'desc' ];
}
