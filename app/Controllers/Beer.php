<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cerveza;


class Beer extends Controller{
    public function index(){
        //el nuevo objeto corresponde al nombre del modelo
        $beer = new Cerveza();
        $datos = [            
            'beer' => $beer->orderBy('id','ASC')->findAll(),
            'header' => view('template/header'),
            'footer' => view('template/footer')
            ]; 
        return view('cervezas/listar', $datos);
    }

    public function crear(){
        
        $datos = [
            'header' => view('template/header'),
            'footer' => view('template/footer')
            ]; 
        

        return view('cervezas/crear', $datos);
    }

    public function guardar(){
        $beer = new Cerveza();

        //no insertaba en la BDO por que el mapeo estaba erroneo, en el MODELO
        if($nombre = $this->request->getVar('nombre') and $tipo = $this->request->getVar('tipo') and $grado = $this->request->getVar('grado')){
                
                $data = [
                    'namebeer' => $nombre = $this->request->getVar('nombre'),
                    'gradebeer' => $grado = $this->request->getVar('grado'),
                    'typebeer' => $tipo = $this->request->getVar('tipo')
                ];                
                $beer->insert($data);
        }
        $validacion = $this->validate(
            [
                'nombre' => 'required'
            ]);

        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje', 'Datos Erroneos Favor Revisar');

            return redirect()->back()->withInput();
        }
         //var_dump();
        return $this->response->redirect(site_url('/listar'));
        
    }

    public function borrar($id=null){
        $beer = new Cerveza();
        $beer->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/listar'));
        
    }

    public function editar($id){
       
        
        $beer = new Cerveza();
       
        $data['beer'] =  $beer->where('id', $id)->first();
        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        
        return view('cervezas/editar', $data);
    }
    public function actualizar(){
        $beer = new Cerveza();
        
        $data = [
            'namebeer' => $nombre = $this->request->getVar('nombre'),
            'gradebeer' => $grado = $this->request->getVar('grado'),
            'typebeer' => $tipo = $this->request->getVar('tipo'),
            'header' => $header = view('template/header'),
            'footer' => $footer = view('template/footer')
        ];
        //para recepcionar ID oculta
        $id = $this->request->getVar('id');
        $beer->update($id, $data);

        print_r($data);

        return $this->response->redirect(site_url('/listar'));
    }

}