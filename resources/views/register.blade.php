<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="css/login/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-registration">
        <form action="/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register form</h1>

            <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name')
                     is-invalid @enderror" id="name" placeholder="name@example.com" required value="{{ old('nama') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text" name="username" class="form-control rounded-top @error('username')
                     is-invalid @enderror" id="username"
                    placeholder="username@example.com" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control rounded-top @error('email')
                     is-invalid @enderror" id="email" placeholder="email@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-top @error('password')
                     is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            <small class="d-block text-center mt-3">have Account?<a href="/login"> Login</a></small>
        </form>
    </main>



</body>

</html>
