<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillaable= ['nombre','url','icono'];
    protected $guarded= ['id'];
}
