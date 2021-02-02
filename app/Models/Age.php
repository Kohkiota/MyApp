<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;
    //これ！Array to string conversion errorがでる。
    protected $table = 'ages';
    protected $guarded = ['id'];
    // protected $casts = [
    //     'options' => 'array',
    // ];

    public function getData()
    {
        return $this->id . ' : ' . $this->ageId . ' (' . $this->ageRange . ') ';
    }

}
