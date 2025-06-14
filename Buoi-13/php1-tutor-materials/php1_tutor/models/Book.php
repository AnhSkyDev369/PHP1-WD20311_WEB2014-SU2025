<?php
class Book
{
    public $conn;

    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = (new BaseModel())->getConnection();
    }

    // Hiển thị danh sách
    public function getAll()
    {
        $sql = "SELECT b.*, a.name AS author_name
                FROM books b
                INNER JOIN authors a ON a.id = b.author_id";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(); // Hiển thị nhiều bản ghi
    }

    // Lấy sách theo ID
    public function findById($id)
    {
        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch(); // Hiển thị 1 bản ghi
    }

    // Thêm dữ liệu
    public function insert($data)
    {
        $sql = "INSERT INTO books (title, author_id, publisher, publish_date, cover_image)
                VALUES (:title, :author_id, :publisher, :publish_date, :cover_image)";
        
        $stmt = $this->conn->prepare($sql);

        // Gán giá trị vào các tham số
        $stmt->bindParam('title', $data['title']);
        $stmt->bindParam('author_id', $data['author_id']);
        $stmt->bindParam('publisher', $data['publisher']);
        $stmt->bindParam('publish_date', $data['publish_date']);
        $stmt->bindParam('cover_image', $data['cover_image']);

        return $stmt->execute();
    }

    // Cập nhật dữ liệu
    public function update($id, $data)
    {
        $sql = "UPDATE books SET
                title = :title,
                author_id = :author_id,
                publisher = :publisher,
                publish_date = :publish_date,
                cover_image = :cover_image
                WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);

        // Gán giá trị vào các tham số
        $stmt->bindParam('title', $data['title']);
        $stmt->bindParam('author_id', $data['author_id']);
        $stmt->bindParam('publisher', $data['publisher']);
        $stmt->bindParam('publish_date', $data['publish_date']);
        $stmt->bindParam('cover_image', $data['cover_image']);

        $stmt->bindParam('id', $id);

        return $stmt->execute();
    }

    // Xóa dữ liệu
    public function delete($id)
    {
        $sql = "DELETE FROM books WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $id);
        return $stmt->execute();
    }
}