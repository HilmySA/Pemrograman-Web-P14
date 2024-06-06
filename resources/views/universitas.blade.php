<!DOCTYPE html>
<html>
<head>
    <title>Learning University</title>
    <style>
        body {
            background-color: #09090b;
            color: #fff;
            font-family: sans-serif;
            position: relative; /* Menetapkan posisi relatif pada body */
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('https://i.pinimg.com/736x/1c/cb/1a/1ccb1a930f37cce5efbd62691a195d31.jpg');
            background-size: cover;
            background-position: center;
        }

        .header-container {
            text-align: center;
        }

        .container {
            text-align: center;
        }

        .box-container {
            position: absolute; /* Menetapkan posisi absolut pada box-container */
            top: 50%; /* Menempatkan container di tengah vertikal halaman */
            left: 50%; /* Menempatkan container di tengah horizontal halaman */
            transform: translate(-50%, -50%); /* Menggeser container ke tengah berdasarkan setengah dari lebar dan tinggi container itu sendiri */
            text-align: center;
        }

        .box {
            padding-top: 10px;
            padding-bottom: 30px;
            padding-left: 30px;
            padding-right: 30px;
            background-color: rgba(78, 78, 78, 0.589);
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            margin: 50px auto 0; /* Atur margin atas menjadi 100px dan tengah secara horizontal */
            position: absolute; /* Tetapkan posisi absolut */
            top: 0; /* Letakkan di bagian atas */
            left: 50%; /* Pusat horizontal */
            transform: translateX(-50%); /* Pusat horizontal */
            text-align: center;
            color: #ffffff; /* Warna baru untuk h1 */
        }

        h2 {
            margin-bottom: 20px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #f59e0b;
            border: none;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <div class="container">
            <h1>LEARNING UNIVERSITY</h1>
        </div>
    </div>

    <div class="box-container">
        <div class="box">
            <h2>KELOLA DATA MAHASISWA</h2>
            <p>email: user@gmail.com <br> pass: 12345678</p>
            <form>
                <button type="button" id="getStartedButton">Get Started</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('getStartedButton').addEventListener('click', function() {
            window.location.href = 'http://127.0.0.1:8000/admin';
        });
    </script>
</body>
</html>
