<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login_register_body">
<div class="login_register_container">
        <div class="lr-step-row">
            <div id="progress"></div>
            <div class="step-col-lr"><small style="color: white;">HMS</small></div>

        </div>
        <form action="/post-login" method="post">
            @csrf
            <div class="step-lr" id="step1">
                <h3>Sign In</h3>

                <input type="text" name="email" placeholder="Email" required>

                <input type="password" name="password" placeholder="Password" required>
                <div class="btn-box">
                    <button type="submit" id="">Sign In</button>
                </div>

                <p>Don't have any account? Please <a href="/register">Register</a></p>
            </div>
        </form>

    </div>
    <script src="./scripts.js"></script>
</body>

</html>