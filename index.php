<?php

require 'functions.php';
require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database'], 'root', 'diallo@gn94');

$posts = $db->query("Select * from posts")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>" .$post['title']. "</li>";
}

