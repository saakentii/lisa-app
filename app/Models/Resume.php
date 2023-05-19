<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable=['name','surname','fname','email','phone','job','salary','keste','birthdate','gender','edu','know','prof','year','know1','prof1','year1','org','p','yearj','aboutj','org1','p1','yearj1','aboutj1','lang','skill','aboutm','image','cuisine_id','category_id','status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function cuisine(){
        return $this->belongsTo(Cuisine::class);
    }
}
