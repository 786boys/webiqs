<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPortfolio extends Model
{
    use HasFactory;
    protected $table = "portfolios";
    protected $primaryKey = "id";
    protected $image = "image";
}
