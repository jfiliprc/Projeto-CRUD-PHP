<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('BASE', 'cadastro');

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            try {
                $conn = new PDO('mysql:host='. HOST. ';dbname=' . BASE, USER, PASS);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM usuarios WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                echo "<h1>User Update</h1>";
                echo "<form action='update-process.php' method='POST'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<label for='nome'>Nome:</label>";
                echo "<input type='text' name='nome' value='" . $row['nome'] . "'><br>";
                echo "<label for='email'>Email:</label>";
                echo "<input type='email' name='email' value='" . $row['email'] . "'><br>";
                echo "<label for='senha'>Senha:</label>";
                echo "<input type='password' name='senha' value='" . $row['senha'] . "'><br>";
                echo "<input type='submit' value='Update'>";
                echo "</form>";

                $conn = null;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        ?>
    </div>
</body>
</html>
