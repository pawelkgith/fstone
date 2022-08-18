<?php
    include 'conn.php';


    if(isset($_POST['rate']))
    {
        $query = 'INSERT INTO rate(rate_id, rate) VALUES(NULL, "'.$_POST['rate'].'")';
        mysqli_query($db, $query);
        header('Location: index.php');
    }
?>