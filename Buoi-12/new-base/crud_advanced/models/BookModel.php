<?php

class BookModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    public function getAllBook()
    {
        $sql = "SELECT b.*, c.name AS category_name   
        FROM books s INNER JOIN categories c
        ON b.category_id = c.id
        ORDER BY c.id, b.id
        ";
        $stmt = $this->conn->query($sql);
        return  $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM books WHERE category_id = :category_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function create($title, $author, $published_year, $category_id)
    {
        $sql = "INSERT INTO books (title, author, published_year, category_id) VALUES (:title, :author, :published_year, :category_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('title', $title);
        $stmt->bindParam('author', $author);
        $stmt->bindParam('published_year', $published_year );
        $stmt->bindParam('category_id', $category_id );
        return $stmt->execute();
    }

      public function update($id, $title, $author, $published_year, $category_id)
    {
        $sql = "UPDATE books SET title = :title, author = :author, published_year = :published_year, category_id = :category_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('title', $title);
        $stmt->bindParam('author', $author);
        $stmt->bindParam('published_year', $published_year );
        $stmt->bindParam('category_id', $category_id );
        $stmt->bindParam('id', $id );
        return $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }
}