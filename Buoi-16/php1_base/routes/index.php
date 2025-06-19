<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),

    'users'         => (new CourseController)->index(),
    'users-show'         => (new CourseController)->show(),
    'users-create'         => (new CourseController)->create(),
    'users-store'         => (new CourseController)->store(),
    'users-edit'         => (new CourseController)->edit(),
    'users-update'         => (new CourseController)->update(),
    'users-delete'         => (new CourseController)->destroy()

};