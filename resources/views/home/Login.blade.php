
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   @include('home.navbar')

    <div class="page-login">

        <form action="">

            <h1>Login</h1>

            <div class="input-login">
                <input type="text" placeholder="User Name" required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-login">
                <input type="number" placeholder="Phone" required>
                <i class='bx bxs-phone'></i>
            </div>

            <div class="input-login">
                <input type="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>

            <div class="input-login">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="Remember-login">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forget Password</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="Register">
                <p>Don’t have an account? <a href="#">Register</a></p>
            </div>
            <a href="{{ url('auth/google') }}" class="btn btn-light btn-block"
            style="display: flex; align-items: center; justify-content: center; border: 1px solid #ddd; padding: 10px;">
            <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Icon"
                style="width: 20px; margin-right: 10px;">
            <span>Sign in with Google</span>
        </a>
        <br>
        <a href="{{ url('auth/facebook') }}" class="btn btn-light btn-block"
            style="display: flex; align-items: center; justify-content: center; border: 1px solid #ddd; padding: 10px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                alt="Facebook Icon" style="width: 20px; margin-right: 10px;">
            <span>Sign in with Facebook</span>
        </a>

        </form>

    </div>

</body>
</html>