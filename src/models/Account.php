<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
    public function addresses()
    {
        return $this->hasMany(Address::class); 
    }

    public function emails()
    {
        return $this->hasMany(Email::class); 
    }    

    public function websites()
    {
        return $this->hasMany(Website::class); 
    }      

    public function phones()
    {
        return $this->hasMany(Phone::class); 
    }      

    public function notes()
    {
        return $this->hasMany(Note::class); 
    }  

    public function socialmedias()
    {
        return $this->hasMany(Socialmedia::class); 
    }  

    public function calls()
    {
        return $this->hasMany(Call::class); 
    }  

}
