<?php
    include 'conn.php';

    if(isset($_POST['email']) && isset($_POST['login']) && isset($_POST['haslo']))
    {
        $query = "SELECT email, nick FROM data;";
        $result = mysqli_query($db, $query);
        $bool = false;
        $bool1 = false;

        while($row = mysqli_fetch_assoc($result))
        {
            if($row['email'] == $_POST['email'] || $row['nick'] == $_POST['login'])
            {
                print("<p>Podany login lub e-mail już istnieje.");
                $bool = true;
            }
        }

        if($bool === false)
        {
            print("<p>Rejestracja udana.</p>");
            $query = "INSERT INTO data(userid, nick, email, password) VALUES(NULL, '".$_POST['login']."', '".$_POST['email']."', '".$_POST['haslo']."');";
            mysqli_query($db, $query);
            $bool1 = true;
            if($bool1 === true)
            {
                header("refresh: 3; URL=login.php");
            }
        }
    }
    include 'register.php';
?>