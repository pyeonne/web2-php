<?php
    unlink('data/'.basename($_POST['id']));
    header('Location: /web2-php/htdoc/index.php');