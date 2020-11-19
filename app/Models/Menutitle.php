<?php

namespace App\Models;

use App\Models\Setup\Menu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menutitle extends Model
{
    use HasFactory;
    protected $table ="menutitles";
    protected $guarded = [];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
