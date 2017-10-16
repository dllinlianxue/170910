<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<form>
    <label for="username">username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">password:</label>
    <input type="password" id="password" name="password">
    <br>
    <button type="submit" onclick="login()">登陆</button>
</form>


</body>
</html>