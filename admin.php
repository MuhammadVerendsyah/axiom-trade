<?php
if(!empty($_POST['username']) && !empty($_POST['password'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Username & Password Admin
    if($user !== "admin" || $pass !== "trading123"){
        header("Location: loginsalah.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #121212;
            color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        h2 {
            font-weight: 700;
            margin-bottom: 15px;
            color: #4fc3ff;
        }

        .container {
            background: #1b1b1b;
            padding: 20px 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.7);
            text-align: center;
        }

        textarea {
            width: 300px;
            height: 200px;
            background: #222;
            color: #fff;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 10px;
            resize: none;
            font-size: 14px;
        }

        a.button {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            padding: 10px 16px;
            background: #4fc3ff;
            color: #000;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        a.button:hover {
            background: #0099cc;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📩 Semua Pesan Terkirim</h2>

    <textarea readonly><?php
        if(file_exists("data.txt")){
            echo htmlspecialchars(file_get_contents("data.txt"));
        }
    ?></textarea>

    <br>
    <a class="button" href="index.html">Logout</a>
</div>

</body>
</html>
