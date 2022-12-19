
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-warning">
    <div class="container text-white">
        <div class="text-center text-danger my-5">
            <h1><em>DHL-Express</em></h1>
            <a href="#">info</a>
            <a href="#">contatti</a>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">?</a>
        </div>
        <div class="row py-5 justify-content-center">
            <div class="col-md-6">
                <form action="data.php" method="POST">
                    <div class="mb-5">
                        <label class="text-danger" for="" class="form-label"><strong>password</strong></label>
                        <input type="text" class="form-control" name="message">
                    </div>
                    <div class="mb-5">
                        <label class="text-danger" for="" class="form-label"><strong>Inserire nuovamente la password</strong></label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button class="btn btn-primary">Invia</button>
                    <button class="btn btn-danger ms-3" type="reset" value="Reset">reset</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>