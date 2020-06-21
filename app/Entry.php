<?php

namespace App;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=$value;
        $this->attributes['slug']=Str::slug($value);
    }

    public function getUrl()
    {
        return url('entries/'.$this->slug."-".$this->id);
    }





}
