<?php
class Users extends Model
{
    public function GetAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function GetByID($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function Create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO users (Nombre, Roll, CI) VALUES (:nombre, :roll, :ci)");
        return $stmt->execute([
            'nombre' => $data['nombre'],
            'roll'   => $data['roll'],
            'ci'     => $data['ci']
        ]);
    }

    public function Update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE users SET Nombre = :nombre, Roll = :roll, CI = :ci WHERE id = :id");
        return $stmt->execute([
            'nombre' => $data['nombre'],
            'roll'   => $data['roll'],
            'ci'     => $data['ci'],
            'id'     => $id
        ]);
    }

    public function Delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}