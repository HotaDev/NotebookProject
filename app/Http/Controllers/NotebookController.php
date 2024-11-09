<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class NotebookController extends Controller
{
    public function notebook()
    {
        $nbook = DB::table('notebooks')->simplePaginate(3);

        foreach ($nbook->toArray()['data'] as $nb) {
            echo json_encode($nb, JSON_UNESCAPED_UNICODE);
        }
        
        echo $nbook->links();
    }

    public function notebookAdd(Request $req)
    {
        $rule = [ // Правила для ввода данных
            'ФИО' => 'required|min:5',
            'Телефон' => 'required|numeric',
            'Email' => 'required|email',
            'Дата_рождения' => 'date',
        ];
        $validator = Validator::make($req->all(), $rule);
        if ($validator->fails()) {
            return  response()->json($validator->errors(), 404);
        }

        $nb = Notebook::create($req->all());

        return response()->json($nb, 201);
    }

    public function notebookSearch($id)
    {
        $nb = Notebook::find($id);

        if(is_null($nb)) // Проверка на наличие записи
        {
            return  response()->json('Ошибка: Обьект не найден', 404);
        }
        return response()->json($nb, 200);
    }

    public function notebookEdit(Request $req, $id)
    {
        $nb = Notebook::find($id);

        if (is_null($nb)) {
            return  response()->json('Ошибка: Обьект не найден', 404);
        }
        $nb->update($req->all());

        return response()->json($nb, 200);
    }

    public function notebookDelete(Request $req, $id)
    {
        $nb = Notebook::find($id);

        if (is_null($nb)) {
            return  response()->json('Ошибка: Обьект не найден', 404);
        }
        $nb->delete();

        return response()->json('', 206);
    }
}
