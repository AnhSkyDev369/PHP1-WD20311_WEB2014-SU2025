<?php

class User
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }
    public function getAll()
    {
        $sql = "SELECT u.*, r.name AS role_name
                FROM users u INNER JOIN roles r
                ON r.id = u.role_id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
    

    public function find($id)
    {
       $sql = "SELECT * FROM users
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO users (role_id, full_name, email, phone, img_avatar, address, created_at, updated_at )
                VALUES (:role_id, :full_name, :email, :phone, :img_avatar, :address, :created_at, :updated_at )
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('role_id', $data['role_id']);
        $stmt->bindParam('full_name', $data['full_name']);
        $stmt->bindParam('email', $data['email']);
        $stmt->bindParam('phone', $data['phone']);
        $stmt->bindParam('img_avatar', $data['img_avatar']);
        $stmt->bindParam('address', $data['address']);
        $stmt->bindParam('created_at', $data['created_at']);
        $stmt->bindParam('updated_at', $data['updated_at']);

        return $stmt->execute();
    }

        public function update($id, $data)
    {
        $sql = "UPDATE users SET
                role_id = :role_id,
                full_name = :full_name,
                email = :email,
                phone = :phone,
                img_avatar = :img_avatar,
                address = :address,
                created_at = :created_at,
                updated_at = :updated_at
                WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);

        // Gán giá trị vào các tham số
        $stmt->bindParam('role_id', $data['role_id']);
        $stmt->bindParam('full_name', $data['full_name']);
        $stmt->bindParam('email', $data['email']);
        $stmt->bindParam('phone', $data['phone']);
        $stmt->bindParam('img_avatar', $data['img_avatar']);
        $stmt->bindParam('address', $data['address']);
        $stmt->bindParam('created_at', $data['created_at']);
        $stmt->bindParam('updated_at', $data['updated_at']);
        $stmt->bindParam('id', $id);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }
}