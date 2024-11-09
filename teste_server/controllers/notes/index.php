<?php 



$config = require base_path('config.php');

$db  = new Database($config['database']);


$notes = $db->query('select * from posts')->fetchAll();



require view('notes/index.view.php', [
    'heading' => 'My notes',
    'notes' => $notes
]);