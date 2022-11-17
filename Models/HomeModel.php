<?php
class HomeModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    /* Ingresar un registro */
    public function setUser(string $nombre, int $edad)
    {
        $query_insert = "INSERT INTO usuarios(nombre, edad) values(?,?)";
        $arrData = array($nombre, $edad);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    /* Obtener un registro */
    public function getUser($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id_user = $id";
        $request = $this->select($sql);
        return $request;
    }

    /* Obtener lista de resgistro */
    public function getUsers()
    {
        $sql = "SELECT * FROM usuarios";
        $request = $this->select_all($sql);
        return $request;
    }

    /* Actualizar registro */
    public function updateUser(int $id, string $nombre, int $edad)
    {
        $sql = "UPDATE usuarios SET nombre = ?, edad = ? WHERE id_user = $id";
        $arrData = array($nombre, $edad);
        $request = $this->update($sql, $arrData);
        return $request;
    }

    /* Eliminar un registro */
    public function delUser($id)
    {
        $sql = "DELETE FROM usuarios WHERE id_user = $id";
        $request = $this->delete($sql);
        return $request;
    }
}
