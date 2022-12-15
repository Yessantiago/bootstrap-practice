<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">

</head>
<body>
    <div class="contenedor">
        <form action="valida.php" method="post">
            <!-- invoca al php -->
            <div id="div_login">
                <h1>Login</h1>
                <div>
                    <input type="text" class="caja" name="user" id="user" placeholder="Usuario">
                </div>
                
                <div>
                    <input type="password" class="caja" name="pass" id="pass" placeholder="Contraseña">
                </div>
                <div>
                    <input type="submit" value="Login" id="btm">
                </div>
            </div>
        </form>
    </div>

</body>
</html>