<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous' />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Axios -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js' integrity='sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==' crossorigin='anonymous'></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <title>Dischi PHP</title>
</head>

<body>
    <div class="wrapper">
        <div id="app">
            <header class="d-flex align-items-center">
                <h1>
                    Dischi PHP
                </h1>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <div v-for="(record, index) in records" :key="index" class="col card">card</div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>



<script src="js/main.js"></script>

</html>