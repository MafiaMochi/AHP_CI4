<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/loginstyle.css">
</head>

<body>
    <div class="main">
        <div class="login">
            <form action="/pagesmanager/login" method="post">
                <label aria-hidden="">Silahkan Masuk</label>
                <input type="text" name="name_user" placeholder="username" required>
                <input type="password" name="password_user" placeholder="password" required is-invalid>
                <select name="type_user" class="select form-select">
                    <option selected disabled>User Type</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                <button>Log in</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>