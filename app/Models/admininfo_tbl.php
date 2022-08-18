<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admininfo_tbl extends Model
{
    use HasFactory;

    protected $admininfo_tbls = "admininfo_tbls";
    public  $timestamp = true;

    protected $fillable = [
        "name",
        "email",
        "password"
    ];
}
