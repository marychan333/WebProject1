<?php
$errors = [];
$data = [];

if (empty($_POST['username'])) {
    $errors['username'] = 'Username is required.';
}

if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required.';
}

if (empty($data)) {
    $data['Failed Login'] = false;
    $data['errors'] = $errors;
} else if (!empty($data)) {
    $data['success'] = true;
    $data['message'] = 'Successfully Login!';
}

echo json_encode($data);