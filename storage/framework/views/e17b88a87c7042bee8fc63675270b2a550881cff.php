<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title><?php echo $__env->yieldContent('page'); ?></title>

    <style>

        body{
            font-family: 'Montserrat', sans-serif;


        }
        .container{
            width: 90%;
            margin: auto;
            padding-top: 100px;
            display: flex;
        }


        table, th, td {
            border: 1px solid black;
        }

        th, td {
            height: 50px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            position: relative;
        }

        .button, button {
            position: relative;
            margin: auto;
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            display: block;
            text-decoration: none;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            width: 280px;
            height: 90px;
            border-radius: 5px;
            line-height: 90px;
        }

        input {
            font-family: 'Montserrat', sans-serif;
            line-height: 50px;
            width: 280px;
            font-size: 24px;
        }

    </style>

</head>
<body>

<div class="container">
    <?php echo $__env->yieldContent('add'); ?>
    <?php echo $__env->yieldContent('table'); ?>
</div>

</body>
</html>
<?php /**PATH C:\Users\illya\lab5\resources\views/layout.blade.php ENDPATH**/ ?>