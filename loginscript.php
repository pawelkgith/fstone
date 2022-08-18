<?php
    include 'conn.php';

    if(isset($_POST['login']) && isset($_POST['haslo']))
    {
        $query = "SELECT nick, password FROM data WHERE nick = '".$_POST['login']."';";
        $result = mysqli_query($db, $query);
        $bool = false;
        $bool1 = false;

        if(mysqli_num_rows($result) == 0)
        {
            print("<p>Podany login nie istnieje.");
            $bool = true;
        }

        while($row = mysqli_fetch_assoc($result))
        {
            if($row['nick'] != $_POST['login'] || $row['password'] != $_POST['haslo'])
            {
                print("<p>Nieprawidłowy login lub hasło.</p>");
                $bool = true;
            }
        }

        if($bool === false)
        {
            print("<p>Logowanie udane.</p>");
            $bool1 = true;
            if($bool1 === true)
            {
                header("refresh: 3; URL=index.php");
            }
        }
    }

    include 'login.php';
?>