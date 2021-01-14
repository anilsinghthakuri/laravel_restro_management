<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add user</title>
</head>
<body>
    <div>
        <form method="POST" action="/adduser" enctype="multipart/form-data" >
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="">
            <label for="email">email</label>
            <input type="email" name="email" id="">
            <label for="name">password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Add">
        </form>
    </div>
</body>
</html>
