<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Young Works</title>
    <link rel="stylesheet" href="./styles/reset.css"/>
    <link rel="stylesheet" href="./styles/var.css"/>
    <link rel="icon" href="./img/logo.png" type="icon">
    <link rel="stylesheet" href="./styles/style.css"/>
    <link rel="stylesheet" href="./styles/media_pc.css">
    <link rel="stylesheet" href="./styles/media_mobile.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <!--LOGO-->
       <div class="logo">
            <a href="">
                <img src="./img/logo.png" alt="logo">
            </a>
       </div>
       <!--Titulo-->
       <div class="titulo">
        <a href="">
            <h1>Young Works</h1>
        </a>
       </div>
    </div>
    <!--Barra de navegação-->
    <div class="container_navegador">
       <nav class="navegador">
            <ul>
                <li><a href="">Início</a></li>
                <li><a href="">Guia</a></li>
                <li><a href="">Quiz</a></li>
                <li><a href="">Onde estudar?</a></li>
                <li><a href="">Cadastro/Login</a></li>
            </ul>
       </nav>
    </div>

    <!-- tela de login -->
     <div class="main">
        <form method="post">
            <label for="email">
                email:
                <input type="text" id="email" name="email">
            </label>
            <br>
            <label for="password">
                senha:
                <input type="password" id="password" name="password">
            </label>
            <button id="btn" class="btn btn-warning">Entrar</button>
        </form>
     </div>
     
     <!-- area login php -->
      <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $emain = htmlspecialchars($_POST["email"]);
            $senha = htmlspecialchars($_POST["password"]);

            echo "email $email e senha $senha";
        }
      ?>

     <!-- area de cadastro ainda trabalhando -->
     <div class="main dess">
        <form action="">
            <label for="nome">
                nome:
                <input type="text" name="nome" id="nome">
            </label>
            <label for="email">
                email:
                <input type="text" id="email" name="email">
            </label>
            <br>
            <label for="password">
                senha:
                <input type="password" id="password" name="password">
            </label>
            <button id="btn" class="btn btn-warning">Cadastrar</button>
        </form>
     </div>
</body>
</html>