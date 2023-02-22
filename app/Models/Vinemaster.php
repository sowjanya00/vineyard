<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinemaster extends Model
{
    use HasFactory;
    protected $table = 'Vine_master';
    protected $primaryKey = 'Vine_id';
    protected $fillable = ['Vine_name', 'Googleparameters', 'Url','Targetedcustomers','Usedcustomers','Contactperson','Mobileno','Emailid','Username','Password'];
}
