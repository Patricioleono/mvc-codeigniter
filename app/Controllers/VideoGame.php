<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Games;

class VideoGame extends Controller{

    public function listarGames(){
        $games = new Games();
        
        //datos como array
        $data = [
            'games' => $games->orderBy('id', 'ASC')->findAll(),
            'header' => view('template/header'),
            'footer' => view('template/footer')
        ];
        

        return view('games/listarGame', $data);
    }

    public function editarGame($id){

        $games = new Games();

        $data = [
            'games' => $games->where('id', $id)->first(),
            'header' => view('template/header'),
            'footer' => view('template/footer')
        ];
        var_dump($data);

        return view('games/editarGame', $data);
    }

}