<?php

namespace App\Models;

use Collator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'company_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function colaborator(){
        return $this->hasMany(Collaborator::class);
    }


}
