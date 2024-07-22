<?php
namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[3]|max_length[10]',
            'confirm-password' => 'matches[password]',
        ]);

        $usuarioModel = new Usuario_model();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $usuarioModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'perfil_id' => 1, // Suponiendo que perfil_id y baja son campos obligatorios, debes ajustarlos según tus necesidades
                'baja' => 0,
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return redirect()->to('/login');
        }
    }
}
