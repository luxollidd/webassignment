<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    public function applications(){
        return $this->hasMany(Application::class);
    }
}
