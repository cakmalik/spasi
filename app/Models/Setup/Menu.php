<?php

namespace App\Models\Setup;

use App\Models\Menutitle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table ="menus";
    protected $guarded = [];

    public function menutitle()
    {
        return $this->belongsTo(Menutitle::class);
    }
}
