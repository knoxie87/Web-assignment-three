<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User login</h1>
    <form action="register" method="POST">
    @csrf
    <input type="text" name="email" placeholder="enter email"><br><br>
    <input type="password" name="password" placeholder="enter user password"><br><br>
    <input type="text" name="name" placeholder="enter user name"><br><br>
    <button type="submit">register</button>
    </form>
</body>
</html>