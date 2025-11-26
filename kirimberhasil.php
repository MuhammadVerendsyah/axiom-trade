<?php
if(isset($_POST['kirim'])){
    $pesan = $_POST['pesan'];
    file_put_contents("data.txt", $pesan . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gagal Mengirim</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        body{
            background: #0d0d0d;
            color: #e1e1e1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
        }

        .box{
            animation: fadeIn 1s ease-in-out;
        }

        h1{
            font-size: 85px;
            color: #ff4f4f;
            text-shadow: 0px 0px 10px #ff4f4f;
            animation: glow 1.4s infinite alternate;
        }

        h3{
            font-size: 24px;
            margin-top: -10px;
            color: #ff6b6b;
        }

        button{
            margin-top: 25px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            color: #fff;
            background: #ff2e2e;
            transition: 0.3s;
        }

        button:hover{
            background: #b80000;
            color: #fff;
            box-shadow: 0px 0px 10px #b80000;
        }

        @keyframes glow{
            from { text-shadow: 0px 0px 5px #ff4f4f; }
            to { text-shadow: 0px 0px 20px #ff4f4f; }
        }

        @keyframes fadeIn{
            from {opacity: 0; transform: scale(0.7);}
            to {opacity: 1; transform: scale(1);}
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>✘</h1>
        <h3>Login Gagal</h3>

        <form action="index.html">
            <button type="submit">Retry</button>
        </form>
    </div>
</body>
</html>
