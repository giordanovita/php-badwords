<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: darkorange;
            color: white;
            text-align:center;
        }
    </style>
</head>
<body><br>
    <h1> 

        <?php 
          
            $paragraph='Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo minima ab dolorem nobis nihil. Quod, fuga temporibus! Placeat asperiores enim rerum odio pariatur commodi. Rem temporibus maxime eius aspernatur quia!';

            $target=$_GET['badWord'];

            $response='***';

            echo $paragraph;

            echo '<br>';

            echo strlen($paragraph);

            echo '<br>';

            echo str_replace($target,$response,$paragraph);

           
        ?>
    </h1>


</body>
</html>