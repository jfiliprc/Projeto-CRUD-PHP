<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            font-weight: bold;
            border-bottom: none;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }

        .btn-cadastrar,
        .btn-listar {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-cadastrar:hover,
        .btn-listar:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-listar {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-listar:hover {
            background-color: #026ad9;
            border-color: #003f5c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Projeto CRUD</h2>
                    </div>
                    <div class="card-body text-center">
                        <a href="cadastro.php" class="btn btn-cadastrar btn-lg btn-block mb-3">Cadastrar</a>
                        <a href="listar-usuario.php" class="btn btn-listar btn-lg btn-block">Listar Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include('config.php');
                switch(@$_REQUEST['page']){
                    case "novo":
                        include('cadastro.php');
                        break;
                    case "listar":
                        include('listar-usuario.php');
                        break;
                    case "salvar":
                        include('salvar-usuario.php');
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
