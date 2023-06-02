<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $table = 'logs';
    protected $primaryKey = 'log_id';


}
