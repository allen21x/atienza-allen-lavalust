<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>

    <form action="/login/authenticate" method="POST">

        <label>Username:</label><br>
        <input type="text" name="username" required>

        <br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Login</button>

    </form>

    <br><br>

    <a href="/register">Create an account</a>

</body>
</html>