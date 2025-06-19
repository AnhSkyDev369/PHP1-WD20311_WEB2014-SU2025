<?php
class Course
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT c.*, i.name AS instructor_name
                FROM courses c INNER JOIN instructor i
                ON i.id = c.instructor_id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT c.*, i.name AS instructor_name
                FROM courses c INNER JOIN instructor i
                ON i.id = c.instructor_id
                WHERE c.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO courses (name, thumbnail, instructor_id, duration, price)
                VALUES              (:name, :thumbnail, :instructor_id, :duration,:price)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name',            $data['name']);
        $stmt->bindParam('thumbnail',       $data['thumbnail']);
        $stmt->bindParam('instructor_id',   $data['instructor_id']);
        $stmt->bindParam('duration',        $data['duration']);
        $stmt->bindParam('price',           $data['price']);
        return $stmt->execute();
    }

    public function update($id, $data) 
    {
        $sql = "UPDATE courses 
        SET
        name = :name,
        thumbnail = :thumbnail,
        instructor_id = :instructor_id,
        duration = :duration,
        price =:price
        WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name',            $data['name']);
        $stmt->bindParam('thumbnail',       $data['thumbnail']);
        $stmt->bindParam('instructor_id',   $data['instructor_id']);
        $stmt->bindParam('duration',        $data['duration']);
        $stmt->bindParam('price',           $data['price']);
        $stmt->bindParam('id', $id);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM courses WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }
}