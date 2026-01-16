<?php
class UserControler extends Controler
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new Users();
    }

    public function index()
    {
        $users = $this->userModel->GetAll();
        $this->view('index', ['users' => $users]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'roll'   => $_POST['roll'],
                'ci'     => $_POST['ci']
            ];
            $this->userModel->Create($data);
            header('Location: index.php?controller=user&action=index');
        } else {
            $user = ['nombre' => '', 'rol' => '', 'ci' => ''];
            $this->view('create', ['user' => $user]);
        }
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'roll'   => $_POST['roll'],
                'ci'     => $_POST['ci']
            ];
            $this->userModel->Update($id, $data);
            header('Location: index.php?controller=user&action=index');
        } else {
            $user = $this->userModel->GetByID($id);
            $this->view('create', ['user' => $user]); // create.php se usa para ambos en tu código
        }
    }
}
