<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ages extends Model
{
    use HasFactory;
    protected $table = ['ages'];
    protected $guarded = ['id'];

    public function getData()
    {
        return $this->id . ' : ' . $this->agesId . ' (' . $this->agesRange . ') ';
    }

}
