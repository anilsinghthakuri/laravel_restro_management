<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div>

        <form method="POST" action="/login" enctype="multipart/form-data" >
            @csrf

            <label for="email">email</label>
            <input type="email" name="email" id="">
            <label for="name">password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Login">
        </form>

    </div>
</body>
</html>
