<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zarejestruj się</title>
    <link rel="stylesheet" href="styleregister.css">
</head>
<body>
    <section id="sekcja">
        <form method="POST" action="registerscript.php">
            <label>Email: </label>
            <br>
            <input type="text" name="email">
            <br>
            <label>Login: </label>
            <br>
            <input type="text" name="login">
            <br>
            <label>Hasło: </label>
            <br>
            <input type="password" name="haslo" id="showw">
            <br>
            <input type="submit" name="sub" class ="in" value="Zarejestruj">
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