<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vineoffer extends Model
{
    use HasFactory;
    protected $table = 'Vine_offer';
    protected $primaryKey = 'Offer_id';
    protected $fillable = ['Vine_name', 'Offer_mobileno', 'Offer_details','Valid_upto','Offerused'];
}
