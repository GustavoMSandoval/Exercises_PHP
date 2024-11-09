<?php 


$config = require base_path('config.php');

$db  = new Database($config['database']);

$currentUser = 2;

$note = $db->query('select * from posts where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] == $currentUser);


require view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);