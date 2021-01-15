<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMemoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // DBではid, name, age, mail, memotype, title, contentsに全てNOT NULLを設定しているので、対応するものには'required'を追加した。
        // memotypeのデフォルト値が設定されておらず、選択せずaddしようとすると、「SQLSTATE[23000]: Integrity constraint violation: 19 NOT NULL constraint failed: memos.memotype (SQL: insert into "memos" ("name", "age", "mail", "title", "contents", "updated_at", "created_at") values (afds@sdfa, 6, fads@dsaf, ?, ?, 2021-01-15 01:45:08, 2021-01-15 01:45:08))」のエラーをはいた。
        // おそらく！DB上ではNOT NULLとなっていたのにデフォルト値が設定されておらず、nullのまま送信したため上記エラーが発生したと思われる。'title'に'required'を設定せず、空のまま送信して同じエラーが得られたため確実かと思われる。以下のように修正した。
        // memotypeのラジオボタンはデフォルトを設定する！
        return [
            'name' => 'required',
            'age' => 'required|integer|min:0|max:9',
                // 0=0~10歳, 1=11~20歳, 2=21~30歳, 3=31~40歳, 4=41~50歳, 5=51~60歳, 6=61~70歳, 7=71~80歳, 8=81~90歳, 9=91~100歳,
            'mail' => 'required|email',
            'memotype' => 'required|integer|min:0|max:2',
                // 0=Text, 1=ToDo, 2=CheckList
            'title' => 'required',
            'contents' => 'required',
        ];
    }
}
