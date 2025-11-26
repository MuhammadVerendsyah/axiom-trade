<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login UI</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Inter", Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url('images/gambar login.png') no-repeat center center fixed;
        background-size: cover;
        position: relative;
    }

    .bg-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.25);
        z-index: 1;
    }

    .login-box {
        position: relative;
        z-index: 2;
        width: 320px;
        height: 420px;
        padding: 38px 32px;
        background: rgba(28, 28, 34, 1);
        border-radius: 12px;
        color: #fff;
        box-shadow: 0 6px 20px rgba(0,0,0,0.8);
        text-align: center;
        animation: fadeUp 0.4s ease-out;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .close-btn {
        position: absolute;
        right: 12px;
        top: 10px;
        cursor: pointer;
        font-weight: bold;
        color: #ffffff;
        font-size: 18px;
        text-decoration: none;
    }

    .login-title {
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 18px;
    }

    /* ==================== INPUT LOGIN STYLING ==================== */
    .input-label {
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 4px;
        display: block;
        color: #dcdcdc;
        text-align: left;
    }

    .input-login {
        width: 100%;
        padding: 9px 12px;
        border-radius: 14px;
        border: 1px solid #404040;
        background: rgba(0,0,0,0.22);
        color: #e5e5e5;
        font-size: 13px;
        outline: none;
        margin-bottom: 12px;
        transition: 0.3s;
    }

    .input-login::placeholder {
        color: #888;
    }

    .input-login:focus {
        border-color: #4c64ff;
        box-shadow: 0 0 0 2px rgba(76,100,255,0.22);
    }

    .btn-login {
        width: 100%;
        padding: 10px;
        border-radius: 16px;
        border: none;
        background: #3b57ff;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 2px;
    }

    .btn-login:hover {
        background: #3248d5;
    }

    .social-btn {
        width: 100%;
        padding: 9px;
        border-radius: 16px;
        border: none;
        background: #2a2d33;
        color: #ccc;
        font-size: 13px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-bottom: 6px;
        transition: 0.3s;
    }

    .social-btn:hover { background: #23262b; }

    .small-text {
        font-size: 11px;
        margin-top: 12px;
    }

    .small-text a {
        color: #4c71ff;
        text-decoration: none;
    }
</style>
</head>

<body>

<div class="bg-overlay"></div>

<div class="login-box">
    <a href="index.html" class="close-btn">×</a>
    <div class="login-title">Login</div>

    <!-- Form Login -->
    <form action="admin.php" method="POST">

        <label for="username" class="input-label">Email</label>
        <input type="text" id="username" name="username" class="input-login" placeholder="Enter Email" required>

        <label for="password" class="input-label">Password</label>
        <input type="password" id="password" name="password" class="input-login" placeholder="Enter password" required>

        <button type="submit" name="login" class="btn-login">Sign Up</button>
    </form>

    

    <div class="small-text">Already have an account?<a href="tes.php">Login</a></div>
</div>

</body>
</html>
