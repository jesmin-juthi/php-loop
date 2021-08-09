<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@500&display=swap" rel="stylesheet">
    <title>Times Table</title>
    <style>
        body{
            font-size: 30px;
            font-family: 'Georama', sans-serif;
        }
        h1{
            text-align: center;
            border: 2px solid #eee;
            padding: 10px;
        }
        section{
            padding: 50px 0;
            width: 400px;
            margin: auto;
        }
        .table{
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <h1>Times Table</h1>
        <div class="table">
            <?php 
                $number = 70;

                for ($i=1; $i <= 10; $i++) { 
                    echo $i . " x ". $number . " = " . $i*$number . "<br>";
                }

            ?>
        </div>
    </section>
</body>
</html>