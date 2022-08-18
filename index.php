<?php
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Liga legend</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="container">
        <section id="menu">
            <a href="login.php" id="login">Login</a>
            <a href="register.php" id="register">Rejestracja</a>
            <section id="credits">
                <select ONCHANGE="location = this.options[this.selectedIndex].value;" name="credits" id="dropdown">
                    <option value="index.php">Autorzy</option>
                    <option value="html.txt" id="html">HTML</option>
                    <option value="css.txt" id="css">CSS</option>
                    <option value="js.txt" id="js">Java Script</option>
                    <option value="php.txt" id="php">PHP</option>
                    <option value="graphic.txt" id="graphic">Graphic</option>
                </select>
                <a href="hostwb.txt" id="hostwb" target="_blank">Host strony</a>
                <a href="hostdb.txt" id="hostwb" target="_blank">Host MySQL</a>
            </section>
        </section>

        <section id="main">
            <h1>Tier lista</h1>
            <h3>Najbardziej śmieciowych championów w lidze legend</h3>
            <?php
                if(isset($_COOKIE['nazwa']))
                    print("<h3>Witaj ponownie</h3>");

                else
                {
                    print("<h3>Witaj pierwszy raz<h3>");
                    setcookie("nazwa", "wartosc", time() + (84000*30));
                }
            ?>
        </section>

        <section id="tierlist">
            <a href="s.php"><img src="s.png" id="s"></a>
            <a href="a.php"><img src="a.png" id="a"></a>
            <a href="b.php"><img src="b.png" id="b"></a>
            <a href="c.php"><img src="c.png" id="c"></a>
        </section>

        <section id="footer">
            <form method="POST">
                <label>Ocena</label>
                <br>
                <br>
                <input type="text" name="rate">
                <br>
                <br>
                <input type="submit" value="Wyślij">
            </form>
        </section>
    </section>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded',function() {
            document.querySelector('select[data-select-name]').onchange=changeEventHandler();
        },false);

        function changeEventHandler(event) {
            window.location.href = this.options[this.selectedIndex].value;
        }
    </script>

    <?php
        include 'rate.php';
    ?>
</body>
</html>