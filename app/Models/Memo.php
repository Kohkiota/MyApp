<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    // public $timestamps = false;

    protected $guarded = ['id'];

    // public static $rules = [
    //     'name' => 'required',
    //     'age' => 'integer|min:0|max:9',
    //         // 0=0~10歳, 1=11~20歳, 2=21~30歳, 3=31~40歳, 4=41~50歳, 5=51~60歳, 6=61~70歳, 7=71~80歳, 8=81~90歳, 9=91~100歳,
    //     'mail' => 'email',
    //     'memotype' => 'integer|min:0|max:2',
    //         // 0=Text, 1=ToDo, 2=CheckList
    // ];

    public function getData()
    {
        return $this->id . ' : ' . $this->name . ' (' . $this->age . ') '. $this->mail . ' : '. $this->title . ' : ' . $this->contents;
    }
}
