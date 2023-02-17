<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class treasuries_delivery extends Model
{
    use HasFactory;
    protected $table="treasuries_delivery";
    protected $fillable=['treasuries_id','treasuries_can_delivery_id','added_py','updated_py','pranch_code','created_at','updated_at'
];


public function treasuries(): BelongsToMany
{
    return $this->belongsToMany(treasuries::class);
}
}
