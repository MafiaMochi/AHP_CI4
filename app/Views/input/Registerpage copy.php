<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/slidestyle.css">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="nama_user" placeholder="username">
                <input type="text" name="sekolah_user" placeholder="sekolah">
                <input type="text" name="type_user" placeholder="type user">
                <input type="Password" name="password_user" placeholder="password">
                <button>Sign in</button>
            </form>
        </div>

        <div class="login">
            <form action="">
                <label for="chk" aria-hidden="">Login</label>
                <input type="text" name="nama_user" placeholder="username">
                <input type="password" name="password_user" placeholder="password">
                <select name="type_user" class="form-select mb-3">
                    <option value="1">admin</option>
                    <option value="2">user</option>
                </select>
                <button>Log in</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>