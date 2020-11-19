<?php

namespace App\Models\Setup;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table ="roles";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
