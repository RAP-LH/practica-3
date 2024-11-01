<?php

require_once 'models/Usuario.php';

class UsuarioController
{
    private $usuarioModel;

    public function __construct($config)
    {
        $this->usuarioModel = new Usuario($config);
    }

    public function handleRequest()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id) {
            $usuario = $this->usuarioModel->getById($id);
            echo json_encode($usuario);
        } else {
            $usuarios = $this->usuarioModel->getAll();
            echo json_encode($usuarios);
        }
    }
}
?>