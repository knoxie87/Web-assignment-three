<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User register</h1>
    <form action="user" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="password" placeholder="enter user password"><br><br>
    <button type="submit">login</button>
    </form>
</body>
</html>