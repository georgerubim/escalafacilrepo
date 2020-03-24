<?php
session_start();
switch (@$_SESSION['sessao']){
    case null:

        break;
    case "logado":
    echo "teste";

        break;
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home::Escala Fácil</title>
    <link href="css/style.css?v=15" rel="stylesheet" />
    <link rel="icon" href="assets/icon.png" type="image/x-icon" />
</head>
<body>
        <header>
            <div class="wrapper">
              <img src="assets/logopng.png?v=2" alt="">


            <ul class="menu-right">
                <li class="menu-cta btn-5"><a href="#">Tenho convite</a></li>
            </ul>

            </div>
        </header>
        <div class="intro">
            <img src="assets/nave.png" alt="">
            <p>Estamos em desenvolvimento...</p>
        </div>

    <div class="elements">
        <img src="assets/elements/e1.png" class="e1"/>
        <div class="e2"></div>
        <img src="assets/elements/e3.png" class="e3"/>
    </div>

</body>
</html>