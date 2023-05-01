<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent_table extends Model
{
    public $table='fpagent';
    public $primaryKey='matricule';
    public $incrementing=true;
    public $timestamps=false;

}
