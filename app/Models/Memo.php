<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getData()
    {
        return $this->id . ' : ' . $this->name . ' (' . $this->age . ') '. $this->mail . ' : '. $this->title . ' : ' . $this->contents;
    }
}
