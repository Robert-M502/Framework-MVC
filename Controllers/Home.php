<?php
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $data['nombre'] = "Roberto Morales";
        $this->views->getView('home', "index", $data);
    }

    /* Ingresar usuario */
    public function insertar()
    {
        $data = $this->model->setUser("Sebastián", 23);
        print_r($data);
    }

    /* Ver usuario */
    public function verusuario($id) /* ...home/verusuario/1 */
    {
        $data = $this->model->getUser($id);
        print_r($data);
    }

    /* Ver usuarios */
    public function verusuarios()
    {
        $data = $this->model->getUsers();
        print_r($data);
    }

    /* Actualizar usuario */
    public function actualizar()
    {
        $data = $this->model->updateUser(1, "Carlos", 28);
        print_r($data);
    }

    /* Elimininar usuario */
    public function eliminarusuario($id)        /* ...home/eliminarusuario/1 */
    {
        $data = $this->model->delUser($id);
        print_r($data);
    }
}
