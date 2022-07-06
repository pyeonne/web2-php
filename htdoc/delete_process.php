<?php
    unlink('data/'.$_POST['id']);
    header('Location: /web2-php/htdoc/index.php');