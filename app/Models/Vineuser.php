<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vineuser extends Model
{
    use HasFactory;
    protected $table = 'Vine_user';
    protected $primaryKey = 'User_id';
    protected $fillable = ['User_name', 'Vine_id', 'User_mobileno','Registerdate','Useddate','Qrcode'];
}

