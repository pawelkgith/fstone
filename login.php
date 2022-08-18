<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="styleregister.css">
</head>
<body>
    <section id="sekcja">
        <form method="POST" action="loginscript.php">
            <br><br><br>
            <label>Login: </label>
            <br>
            <input type="text" name="login">
            <br>
            <label>Hasło: </label>
            <br>
            <input type="password" name="haslo" id="showw">
            <br><br><br>
            <input type="submit" name="sub" class ="in" value="Zaloguj">
            <input type="button" name="show" id="show" class="in" value="Pokaż hasło" onclick="pokaz()">
        </form>
    </section>
    <script>
        function pokaz()
        {
            var sh = document.getElementById("showw");
            if(sh.type === "password")
                sh.type = "text";
            else
                sh.type="password";
        }
    </script>
</body>
</html>