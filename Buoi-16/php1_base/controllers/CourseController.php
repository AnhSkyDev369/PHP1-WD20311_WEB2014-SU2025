<?php
class CourseController
{
    public $modelCourse, $modelInstructor;

    public function __construct()
    {
        $this->modelCourse     = new Course();
        $this->modelInstructor = new Instructor();
    }

    public function index()
    {
        $title   = "Danh Sách Khoá Học";
        $view    = "courses/index";
        $courses = $this->modelCourse->getAll();
        require_once PATH_VIEW_MAIN;
    }

    public function show()
    {
        $title   = "Chi tiết Khoá Học";
        $view    = "courses/show";
        $id = $_GET['id'];
        $course = $this->modelCourse->find($id);
        require_once PATH_VIEW_MAIN;
    }
    public function create()
    {
        $title       = "Thêm Khoá Học";
        $view        = "courses/create";
        $instructors = $this->modelInstructor->getAll();
        require_once PATH_VIEW_MAIN;
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name'          => $_POST['name'],
                'instructor_id' => $_POST['instructor_id'],
                'duration'      => $_POST['duration'],
                'price'         => $_POST['price'],
            ];
        }  
        if (isset($_FILES['thumbnail'])) {
            $data['thumbnail'] = upload_file('courses', $_FILES['thumbnail']);
        }

        $result = $this->modelCourse->insert($data);

        if ($result) {
            header("Location: " . BASE_URL . "?action=users");
            exit;
        }
    }
    public function edit()
    {
        $title       = "Sửa Khoá Học";
        $view        = "courses/edit";
        $instructors = $this->modelInstructor->getAll();
        $id = $_GET['id'];
        $course = $this->modelCourse->find($id);
        require_once PATH_VIEW_MAIN;
    }
    public function update()
    {
        $id = $_GET['id'];
        $course = $this->modelCourse->find($id);
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name'          => $_POST['name'],
                'instructor_id' => $_POST['instructor_id'],
                'duration'      => $_POST['duration'],
                'price'         => $_POST['price'],
            ];
        }  
        if (isset($_FILES['thumbnail'])) {
            if (! empty($course['thumbnail']) && $_FILES['thumbnail']['error'] == 0) {
                $oldImage = PATH_ASSETS_UPLOADS . $course['thumbnail'];
                if ($oldImage) {
                    unlink($oldImage);
                }
            }
            $data['thumbnail'] = upload_file('courses', $_FILES['thumbnail']);
        } else {
            $data['thumbnail'] = $course['thumbnail'];
        }

        $result = $this->modelCourse->update($id,$data);

        if ($result) {
            header("Location: " . BASE_URL . "?action=users");
            exit;
        }
    }
    public function destroy()
    {
        $id = $_GET['id'];
    
        $deleted = $this->modelCourse->delete($id);
      
        if ($deleted) {
            header("Location: " . BASE_URL . "?action=users");
            exit;
        }
    }
}
