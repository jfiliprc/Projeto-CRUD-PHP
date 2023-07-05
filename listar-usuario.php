<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Projeto CRUD</title>

    <style>
        .crud-table {
            border-collapse: collapse;
            width: 100%;
        }

        .crud-table th,
        .crud-table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        .crud-table th {
            background-color: #f2f2f2;
        }

        .crud-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <a href="home.php" class="btn btn-primary">Home</a>
    <a href="cadastro.php" class="btn btn-success">Registrar outro usuário</a>
</div>

    <div class="container">
        <table class="crud-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                define('HOST', 'localhost');
                define('USER', 'root');
                define('PASS', '');
                define('BASE', 'cadastro');

                try {
                    $conn = new PDO('mysql:host='. HOST. ';dbname=' . BASE, USER, PASS);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT * FROM usuarios";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['senha'] . "</td>";
                        echo "<td>";
                        echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i> Delete</a> ";
                        echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='fas fa-edit'></i> Update</a>";
                        echo "</td>";
                        echo "</tr>";
                    }

                    $conn = null;
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
