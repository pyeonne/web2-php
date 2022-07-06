<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /web2-php/htdoc/index.php?id='.$_POST['title']);