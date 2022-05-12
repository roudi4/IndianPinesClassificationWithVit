<?php

namespace App\Models\wix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wix_chanels_user extends Model
{
    use HasFactory;
    protected $table=('wix_chanels_users');
   
         protected $fillable=[ 
    'client_id',
    'client_secret',
         ];

}
