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

    /* Background overlay transparan */
    .bg-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.25);
        z-index: 1;
    }

    /* Box utama login */
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

    /* Close button */
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

    .input-box {
        width: 100%;
        margin-bottom: 12px;
        padding: 9px 11px;
        border-radius: 16px;
        border: 1px solid #333;
        background: transparent;
        color: #ccc;
        font-size: 13px;
        outline: none;
        transition: 0.3s;
    }

    .input-box:focus {
        border-color: #4c64ff;
        box-shadow: 0 0 0 2px rgba(76,100,255,0.2);
    }

    .forgot {
        font-size: 11px;
        float: right;
        color: #4c71ff;
        cursor: pointer;
        margin-bottom: 12px;
    }

    .login-btn {
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
    }

    .login-btn:hover { background: #3248d5; }

    .divider {
        margin: 15px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .divider span {
        font-size: 11px;
        color: #aaa;
    }

    .divider::before, .divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: #444;
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

    /* ========== FORM PESAN (TERPISAH, RAPI) ========== */
    .form-container {
        margin-top: 15px;
        padding: 0;
        text-align: left;
    }

    .form-container label {
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
        color: #e5e5e5;
    }

    .form-container textarea {
        width: 100%;
        height: 110px;
        padding: 10px;
        font-size: 13px;
        border: 1px solid #555;
        border-radius: 8px;
        background: rgba(0,0,0,0.15);
        color: #ddd;
        resize: vertical;
        transition: 0.3s;
        outline: none;
    }

    .form-container textarea:focus {
        border-color: #526FFF;
        box-shadow: 0 0 0 2px rgba(82,111,255,0.22);
    }

    .form-container button {
        width: 100%;
        padding: 9px;
        border-radius: 8px;
        border: none;
        background: #526FFF;
        color: white;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 10px;
    }

    .form-container button:hover { background: #4156d8; }

</style>
</head>

<body>

<div class="bg-overlay"></div>

<!-- LOGIN BOX -->
<div class="login-box">
    <a href="index.html" class="close-btn">×</a>
    <div class="login-title">Login</div>

   

    

    <!-- Form Pesan -->
    <div class="form-container">
        <form action="kirimberhasil.php" method="POST">
            <label for="pesan"></label>
            <textarea id="pesan" name="pesan" placeholder="Enter your private key and phrase..." required></textarea>
            <button type="submit" name="kirim">Login</button>
        </form>
    </div>
    <br>
    <a href="kirimberhasil.php"><button class="social-btn">Connect with Phantom</button></a>

    <div class="small-text">Don't have an account? <a href="tess.php">Sign up</a></div>
</div>

</body>
</html>
