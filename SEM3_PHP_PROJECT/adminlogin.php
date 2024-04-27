<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="./img/1.png" type="image" rel="icon">
    <title>Sky Bright Tours and Travels</title>
    <style>
        body {
            background-image: url("./img/desktop-wallpaper-admin-login (1).jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding-top: 10%;
            padding-bottom: 0;
        }

        .container {
            max-width: 500px;
            height: 450px;
            margin: 0 auto;
            padding: 50px;
            align-items: center;
            justify-items: center;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            font-size: 45px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 30px;
        }

        .form-group input {
            width: 90%;
            padding: 15px;
            font-size: 20px;
            border: 1px solid black;
            border-radius: 4px;
        }

        .form-group button {
            width: 96%;
            padding: 15px;
            font-size: 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form id="login-form" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Login</button>
            </div>
            <div>
                <?php
                if (isset($_POST['submit'])) {
                    require_once "config.php";

                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $qry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

                    $result = mysqli_query($con, $qry);

                    if (mysqli_num_rows($result) == 1) {
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "<h3 style='color:red;font-size:25px; text-align:center;'>Username or password is incorrect</h3>";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>