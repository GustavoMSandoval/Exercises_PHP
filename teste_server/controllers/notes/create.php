<?php

require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

 
    if(!Validator::string($_POST['title'], 10, 100)) {
        $errors['title'] = ' Title is required ';
    }

    if(!Validator::string($_POST['body'], 10, 1_000)) {
        $errors['body'] = ' A body is required ';
    }

    if(empty($errors)) {
        
        $db->query('INSERT INTO posts (id,title, text, user_id) VALUES(:id, :title, :text, :user_id)', [
            'id' => null,
            'title' => $_POST['title'],
            'text' => $_POST['body'],
            'user_id' => '1'
        ]);

    }

}

require view('notes/create.view.php', [
    'heading' => 'Create note',
    'errors' => $errors
]);