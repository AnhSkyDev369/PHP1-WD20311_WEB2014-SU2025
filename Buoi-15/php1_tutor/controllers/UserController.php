<?php
class UserController
{
    public $modelUser, $modelRole;

    public function __construct()
    {
        $this->modelUser = new User();
        $this->modelRole = new Role();
    }

    public function index()
    {
        $title = "Danh sách người dùng";
        $view  = "users/index";
        $users = $this->modelUser->getAll();
        require_once PATH_VIEW_MAIN;
    }
    public function show()
    {
        $title = "Chi tiết Danh sách người dùng";
        $view  = "users/show";
        $id    = $_GET['id'];
        $user  = $this->modelUser->find($id);
        require_once PATH_VIEW_MAIN;
    }

    public function create()
    {
        $title = "Thêm  người dùng";
        $view  = "users/create";
        $roles = $this->modelRole->getAll();
        require_once PATH_VIEW_MAIN;
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "role_id"    => $_POST['role_id'],
                "full_name"  => $_POST['full_name'],
                "email"      => $_POST['email'],
                "phone"      => $_POST['phone'],
                "address"    => $_POST['address'],
                "created_at" => $_POST['created_at'],
                "updated_at" => $_POST['updated_at'],
            ];
        }

        if (isset($_FILES['img_avatar'])) {
            $data['img_avatar'] = upload_file('users', $_FILES['img_avatar']);
        }

        $result = $this->modelUser->insert($data);

        if ($result) {
            header("Location: " . BASE_URL . "?action=users");
            exit;
        }
    }
    public function edit()
    {
        $title = "Sửa  người dùng";
        $view  = "users/edit";
        $roles = $this->modelRole->getAll();
        $id    = $_GET['id'];
        $user  = $this->modelUser->find($id);

        require_once PATH_VIEW_MAIN;
    }
    public function update()
    {
        $id   = $_GET['id'];
        $user = $this->modelUser->find($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "role_id"    => $_POST['role_id'],
                "full_name"  => $_POST['full_name'],
                "email"      => $_POST['email'],
                "phone"      => $_POST['phone'],
                "address"    => $_POST['address'],
                "created_at" => $_POST['created_at'],
                "updated_at" => $_POST['updated_at'],
            ];
        }

        if (isset($_FILES['img_avatar']) && $_FILES['img_avatar']['error'] == 0) {
            //  Xoá ảnh cũ nếu nó tồn tại
            if (! empty($user['img_avatar'])) {
                $oldImage = PATH_ASSETS_UPLOADS . $user['img_avatar'];
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
        $data['img_avatar'] = upload_file('users', $_FILES['img_avatar']);
        
        } else {
            $data['img_avatar'] = $user['img_avatar'];
        }

        $result = $this->modelUser->update($id, $data);

        if ($result) {
            header("Location: " . BASE_URL . "?action=users");
            exit;
        }
    }
    public function destroy()
    {
        $id      = $_GET['id'];
        $deleted = $this->modelUser->delete($id);

        if ($deleted) {
            header("Location: " . BASE_URL . "?action=users");
            exit;
        }
    }

}
