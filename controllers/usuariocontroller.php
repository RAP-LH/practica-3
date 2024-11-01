<?php

require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController
{
    private $usuarioModel;

    public function __construct($config)
    {
        $this->usuarioModel = new Usuario($config);
    }

    public function handleRequest()
    {
        header('Content-Type: application/json');
        
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id) {
            $usuario = $this->usuarioModel->getById($id);
            echo json_encode($usuario, JSON_PRETTY_PRINT);
        } else {
            $usuarios = $this->usuarioModel->getAll();
            echo json_encode($usuarios, JSON_PRETTY_PRINT);
        }
    }
}
?>