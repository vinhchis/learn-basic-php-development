<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
        <style>
            .NotiCenter{
                border: thin solid green;
                height:150px;
                padding:15px;
                width:30%;
            }
        </style>
    </head>
    <body>
        <div class="NotiCenter">
            <h1>Your Car</h1>
            <?php
                if(isset($_GET['mesErr'])):
                    echo '<div class="alert alert-danger">Username or Password is Incorrect!</div>';
                endif;
                if(isset($_GET['mesOk'])):
                    echo '<div class="alert alert-success">Username or Password is Correct!</div>';
                endif;
            ?>
            
        </div>
        <h1>Login</h1>
        <form action="Ex02_Login-process.php" method="get">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><Input name="txtName" autofocus ></td>

                </tr>
                <tr>
                    <td>Password:</td>
                    <td><Input name="txtPass" type="password" ></td>

                </tr>
                
                <tr>
                    <td></td>
                    <td><Input type="submit" value="Login" class="btn btn-primary" ></td>

                </tr>
            </table>
        </form>
    </body>
</html>
