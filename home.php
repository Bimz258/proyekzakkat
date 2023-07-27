<html>
    <head>
        <title>Home</title>
        <style>
            body {
                margin: 0;
            }

            .container {
                width: 900px;
                height: 600px;
                background-color: greenyellow;
                margin: auto;
            }

            .header {
                width: 100%;
                height: 80px;
                border-bottom: 1px solid black;
                position: relative;
            }

            .header .title {
                width: 200px;
                height: 80px;
                margin: 20px;
                padding-top: 5px;
                box-sizing: border-box;
            }

            .navbar {
                width: 300px;
                height: 80px;
                position: absolute;
                right: 0;
                top: 0;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
            }

            .navbar a {
                text-decoration: none;
                color: black;
                background-color: green;
                padding: 10px;
                border-radius: 10px;
            }





            .hero {
                height: 500px;
                padding: 20px;
                text-indent: 20px;
            }

            .hero .img {
                width: 600px;
                height: 300px;
                background-image: url(https://waifu2x.booru.pics/outfiles/1e4773099820bc9e2ed6c7c71c1bb5b85da81c87_s2_n1.jpg);
                background-size: contain;
                background-repeat: no-repeat;
                margin: auto;
            }
                        
        </style>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <div class="title">
                    <h1>Zakat</h1>
                </div>

                <div class="navbar">
                    <a href="http://localhost/project/home.php">Home</a>
                    <a href="http://localhost/project/Zasil.php">Zakat Pendapatan</a>
                    <a href="http://localhost/project/Zamal.php">Zakat Maal</a>
                </div>
            </div>

            <div class="hero">
                <p>
                    Pengertian zakat menurut bahasa adalah membersihkan diri atau mensucikan diri.
                    Sedangkan pengertian zakat menurut istilah adalah ukuran harta tertentu yang wajib dikeluarkan kepada orang yang membutuhkan 
                    atau yang berhak menerima dengan beberapa syarat sesuai dengan syariat islam.
                </p>

                <div class="img"></div>
                <p>
                    ada macam-macam zakat lainnya yakni zakat maal (harta). Zakat maal adalah zakat penghasilan, selanjutnya, 
                    ada beberapa jenis zakat penghasilan yaitu zakat hasil pertambangan, hasil pertanian, hasil laut, hasil ternak, perak, dan ternak.
                </p>
            </div>
        </div>
    </body>
</html>