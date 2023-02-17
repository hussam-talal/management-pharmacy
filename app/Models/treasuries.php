<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\treasuries_delivery;



class treasuries extends Model
{
    use HasFactory;
    protected $table="treasuries";
    protected $fillable=['name','is_master','last_isal_exhcange','last_isal_collect','added_py','updated_py','pranch_code','created_at','updated_at'
];


public function treasuries_delivery(): HasMany
{
    return $this->hasMany(treasuries_delivery::class);
}
}




