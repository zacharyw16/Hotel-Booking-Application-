<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class compare {

    public $name, $surname, $email, $checkin, $checkout, $hotela, $hotelb, $costa, $costb;

    function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6)
    {
        $_SESSION['name']=$this->name=$n0;
        $_SESSION['surname']=$this->surname=$n1;
        $_SESSION['email']=$this->email=$n2;
        $_SESSION['checkin']=$this->checkin=$n3;
        $_SESSION['checkout']=$this->checkout=$n4;
        $_SESSION['hotela']=$this->hotela=$n5;
        $_SESSION['hotelb']=$this->hotelb=$n6;
    }
    function stayBooked($param1, $param2){
        $this->checkin = $param1;
        $this->checkout = $param2;

        $datetimea = new DateTime($this->checkin);
        $datetimeb = new DateTime($this-> checkout);
        $interval = $datetimea->diff($datetimeb);

        $this->staybooked= $interval->format('%R%a');
    }

    function displayInfo(){
        echo "<br>Name:".$this->name."<br>"; 
        "Surname:".$this->surname."<br>";
        "Check In".$this->checkin."<br>";
        "Check Out".$this->checkout."<br>";
        "Hotel A".$this->hotela."<br>";
        "Hotel B".$this->hotelb."<br>";
        "Cost A".$this->costa."<br>";
        "Cost B".$this->costb."<br>";

    }

    }
    
    ?>
</body>
</html>