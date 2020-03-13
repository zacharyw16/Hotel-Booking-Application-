<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    class Hotel {

        public $name, $dailyrate, $wifi, $pool, $bar, $spa, $buffet, $smoking, $parking;

        function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8) {
            $this->name = $n0;
            $this->dailyrate = $n1;
            $this->wifi = $n2;
            $this->pool = $n3;
            $this->bar = $n4;
            $this->spa = $n5;
            $this->buffet = $n6;
            $this->smoking = $n7;
            $this->parking = $n8;

        }
        
            
        }
    ?>
</body>
</html>