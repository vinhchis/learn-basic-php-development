<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $_SESSION['username'] = 'aptech';
    $_SESSION['password'] = '123';

    if (isset($_POST['btnLogin'])):
        $username = sanitize_data($_POST['username']);
        $password = sanitize_data($_POST['password']);

        if (($username == $_SESSION['username']) and ($password == $_SESSION['password'])):
            $_SESSION['isLogin'] = true;
            header('location: Index.php?msgOK=Login successfull!');
        else:
            header("location: Index.php?msgErr=Username or Password is not correct!. Plsease Enter again.");
        endif;
    endif;

    function sanitize_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Login Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .login-container {
                max-width: 400px;
                margin: auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-top: 50px;
            }

            .login-container label {
                display: block;
                margin-bottom: 8px;
            }

            .login-container input {
                width: 100%;
                padding: 8px;
                margin-bottom: 15px;
                box-sizing: border-box;
            }

            .login-container button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <?php
            if (isset($_GET['msgErr'])):
                echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
            elseif (isset($_GET['msgOK'])):
                echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
            endif;
            ?>
            <h2>Login</h2>
            <a href="Logout.php">Logout</a>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="btnLogin">Login</button>
            </form>
        </div>

    </body>
</html>

