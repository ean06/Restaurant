

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

    <div class="container">
        <h1>LOGIN</h1>

    <form action="run.php" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" placeholder="Masukkan username" name="username">
                <hr>
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" placeholder="Masukkan password" name="password">
                <hr>
            </li>
            <li>
                <button type="submit">SIGN IN</button>
            </li>
        </ul>
    </form>
    </div>

</body>
</html>