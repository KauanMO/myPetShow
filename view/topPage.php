<html lang="pt-br">
    <head>
        <meta charset="utf-8">    
        <title>Pet Show</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php include_once "./modalLoginRegister.php";?>
   
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/pet show.png" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Projeto</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Sobre mim</a>
                </li>
                
            </ul>
            </div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalLogin">
                    Login
            </button>
        </div>
        </nav>

        <div class="container">