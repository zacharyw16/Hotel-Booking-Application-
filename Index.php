<?php
            session_start();

            ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--My Css-->
    <link rel="stylesheet" type="text/css" href="Css/styles.css">
    <title>Comparison.php</title>
  </head>
    <body>
    
    <?php
            //load Composer Autoloader///
            require_once "incl/Hotel.php";
            require_once "incl/Compare.php";
            require_once "incl/Booking.php";

            //hotel Properties///Name,Daily,Wifi,pool,bar,spa,buffet
            $Yotel = new Hotel (“Yotel”, 500, true, false, true, false, true);;
            $Ibis = new Hotel (“Ibis_Styles”, 750, true, true, true, false, true);;
            $Indigo = new Hotel (“Hotel_Indigo”, 1000, true, true, true, true, true);
            $Sandman = new Hotel (“Sandman_Signature”, 800, true, false, true, false, false);
            $Sleeperz = new Hotel (“Sleeperz_Hotel”, 600, false, false, true, false, false);
            $Motel = new Hotel (“Motel_One”, 550, false, false, true, false, true);
            $Raddisons = new Hotel (“Radisson_Red”, 1000, true, true, true, true, true);
            $Residence = new Hotel (“Residence_Inn”, 1000, true, false, true, true, true);
            $Hampton = new Hotel (“Hampton”, 1000, true, false, true, true, true);
            $Alexandra = new Hotel (“Alexandra_Hotel”, 1200, true, false, true, true, true);

            $allHotels=array($Yotel, $Ibis_Styles,$Hotel_Indigo,$Sandman_Signature,$Sleeperz_Hotel,$Motel_One,$Radissons_Red,$Residence_Inn,$Hampton,$Alexandra_Hotel);
    ?>

    
    <!--capture all user Details-->
        <h1><u>Booking Application!</u></h1>
            <div class="input-text">
                <form for="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
                    <label>Name:</label><input type="text" name="name" id=""><br>
                    <label>Surname:</label><input type="text" name="surname" id=""><br>
                    <label>Email:</label><input type="email" name="email" id=""><br>
                        <h4>Select you hotel by clicking the checkboxes below:</h4>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img1.jpg" alt="image-1" width="100px">
                            <p id="discrip">Located in Edinburgh and with EICC reachable within 1 km, YOTEL Edinburgh provides express check-in and check-out, rooms, a fitness centre, free WiFi throughout the property and a bar. The property is set 1.9 km from Edinburgh Playhouse, 2 km from Edinburgh Castle and 2 km from National Museum of Scotland. The hotel features family rooms.
                            </p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img2.jpg" alt="image-1" width="100px">
                            <p id="discrip">Set in Glasgow, 1.1 km from Buchanan Galleries, ibis Styles Glasgow Centre West offers air-conditioned rooms and a bar. Among the facilities of this property are a restaurant, a 24-hour front desk and a shared lounge, along with free WiFi. The hotel features family rooms.
                            </p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img3.jpg" alt="image-1" width="100px">
                            <p id="discrip">Boasting a bar and free WiFi, Hotel Indigo - Dundee is situated in Dundee, 1 km from Discovery Point. Around 1.4 km from University of Dundee and 2 km from Abertay University, the property is also close to Dundee Central Library. The property is located 400 m from Wellgate Shopping Centre.
                            </p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img4.jpg" alt="image-1" width="100px">
                            <p id="discrip">Sandman Signature Aberdeen Hotel can conveniently provide information at the reception to help guests to get around the area.
                                Popular points of interest near the accommodation include Beach Ballroom, Aberdeen Art Gallery and Bon Accord & St Nicholas. The nearest airport is Aberdeen Airport, 8 km from Sandman Signature Aberdeen Hotel.
                            </p>
                            <br><hr>                                    
                            <input type="checkbox" name="hotels"><img id="images" src="images/img5.jpg" alt="image-1" width="100px">
                            <p id="discrip">Sleeperz Hotel Dundee is a 120-bedroom hotel located directly above Dundee Railway Station in the city centre, and directly opposite the V&A Dundee. Guests can enjoy views over the nearby V&A Museum Dundee, the River Tay and onto the Waterfront Plaza.
                            </p>
                            <br><br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img6.jpg" alt="image-1" width="100px">
                            <p id="discrip">Boasting an excellent location in Glasgow city centre, Motel One Glasgow is next to Central Train Station and is only a 9-minute walk from George Square and Queen Street Train Station.
                                The Hotel is 200 m from the famous Buchanan Street Style Mile, while the Hydro is 1.6 km away. The Royal Concert Hall is 900 m from the property. 
                                Glasgow City Centre is a great choice for travellers interested in shopping for clothes, shopping and nightlife.
                            </p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img7.jpg" alt="image-1" width="100px">
                            <p id="discrip">Radisson RED hotel in Glagsow features 174 rooms, 3 event and games studios, Glasgow’s first official rooftop bar, a fitness room and 76 car parking spaces. The property is located 183 m from The Hydro, and is a 4-minute walk from the SECC.</p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img8.jpg" alt="image-1" width="100px">
                            <p id="discrip">
                                Residence Inn by Marriott Aberdeen is set within a 20-minute walk from the beach in Aberdeen. Free WiFi is available. Bon Accord & St Nicholas shopping centre is less than 100 m from the hotel and Union Square shopping centre, Union Street and the Aberdeen Maritime Museum are only a few minutes’ walk away.
                            </p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img9.jpg" alt="image-1" width="100px">
                            <p id="discrip">Set in Westhill, 12.9 km from Aberdeen, Hampton By Hilton Aberdeen Westhill features a 24-hour fitness centre and business facilities.Union Square Shopping Centre is 12.9 km from Hampton By Hilton Aberdeen Westhill, while the beach is 9.7 km away. The nearest airport is Aberdeen Airport, 11.3 km from the property. Aberdeen rail station is 12.9 km from Hampton By Hilton Aberdeen Westhill.

                            </p>
                            <br><hr>
                            <input type="checkbox" name="hotels"><img id="images" src="images/img10.jpg" alt="image-1" width="100px">
                            <p id="discrip">Set in Ballater, 14 km from Balmoral Castle, Alexandra Hotel offers accommodation with a restaurant, free private parking and a bar. Around 14 km from Royal Lochnagar Distillery, the property is also 25 km away from Lecht 2090 ski & Multi activity centre and offers free WiFi.
                            </p>
                            <br><hr>
                            <!--Check In and Out Slection-->
                        <h4>CheckIn and CheckOut</h4>
                        <label for="start">Check In:</label>
                        <input type="date" name="indate" id="Check_In" min="2020-01-01" max="2023-12-31" required>
                        <label for="end">Check Out:</label>
                        <input type="date" name="Outdate" id="ChecK_Out" min="2020-01-01" max="2023-12-31" required>
                        <br><br>

                        <button type="submit" name="submit">Compare</button>

                </form>
            </div>

            <?php 
            if(isset($_POST['submit'])){
                $comparison = new Compare ($_POST['name'],
                                            $_POST['surname'],
                                            $_POST['email'],
                                            $_POST['checkin'],
                                            $_POST['checkout'],
                                            $_POST['hotela'],
                                            $_POST['hotelb']);

            $comparison>daysbooked($_POST['indate'],$_POST['outdate']);

            $comparison->displayInfo();

            echo "The cost of the stay at Hotel 1 is" cost($allHotels,"name", $_POST['hotela'], $comparison->daysBooked,"daily");
            echo "<br> The cost of stay at Hotel 2 is" cost($allHotels, "name", $_POST['hotelb'], $comparison->daysBooked, "daily");

            $comparison->compareHotels(compareHotelsMain($allHotels, $_POST['hotela,'],$_POST['hotelb'], "name"));

            $email = new Booking;
            $email ->bookButton();
            //end if user has entered comparison data//
            }
            ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>