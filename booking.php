<?php
include "database.php";
session_start();
$quantity = $_SESSION['quantity'];
$room_id = $_SESSION['room_id'];
$checkin = $_SESSION['checkin'];
$checkout = $_SESSION['checkout']; ?>

<?php
if (isset($_POST['submit']) && ($_POST['title']) && isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['card_type'])  && isset($_POST['card_number'])  && isset($_POST['card_holder'])  && isset($_POST['security_code'])  && isset($_POST['expiration'])) {

    $title = $_POST['title'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $country = $_POST['country'];
    $arrival = $_POST['arrival_time'];
    $card_type = $_POST['card_type'];
    $card_number = $_POST['card_number'];
    $card_holder = $_POST['card_holder'];
    $security_code = $_POST['security_code'];
    $expiration = $_POST['expiration'];
    $comments = $_POST['comments'];
    $total = $_SESSION['total'];

    $query1 = "INSERT INTO bookings (title,name,last_name, email,telephone,mobile, address, city, post_code, country, arrival, comments, card_type, card_number, card_holder, security_code, expiration, room_id, checkin, checkout, occupancy, total, quantity)
        VALUES ('$title','$name', '$last_name', '$email','$telephone','$mobile','$address','$city','$postcode','$country', '$arrival', '$comments', '$card_type', '$card_number', '$card_holder', '$security_code', '$expiration', '$room_id', '$checkin', '$checkout', '2','$total', '$quantity')";
    $result = mysqli_query($conn, $query1);
    if ($result) {
        echo "<script> alert( 'Booking added to Database succesfully!') </script>";
    } else {
        die(`Error: " . $sql . ":-" . mysqli_error($conn)`);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div class="d-flex justify-content-between px-5 py-3">
        <span style="font-size: 24px;" class="fw-bold">Book Hotel Iliria</span>
        <a style="margin-right: 2rem;" href="/reservation.php" class="px-5 py-1 btn btn-primary">Back</a>
    </div>
    <div class="row w-100">
        <div class="col-12 col-md-6 d-flex flex-column bg-white border  mx-auto">
            <div class=" px-5 py-2 border-bottom ">
                <span style="font-size: 24px;" class="fw-bold">Guest Details</span>
            </div>
            <form id="form" action="booking.php" method="POST" class="d-flex flex-column px-5 mb-4">
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Title</label>
                    <input name="title" type="text" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* First Name</label>
                    <input name="name" type="text" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Surname</label>
                    <input name="last_name" type="text" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Email</label>
                    <input name="email" type="text" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Telephone</label>
                    <input name="telephone" type="text" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>Mobile</label>
                    <input name="mobile" type="text">
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>Address</label>
                    <textarea name="address" type="text"></textarea>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>City</label>
                    <input name="city" type="text">
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>Postcode</label>
                    <input name="postcode" type="text">
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>Country of Residence</label>
                    <input name="country" type="text">
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>Arrival Time</label>
                    <input name="arrival_time" type="text">
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>Comments</label>
                    <textarea name="comments" type="text"></textarea>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Card Type</label>
                    <select name="card_type" type="text" class="p-1" required>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Card Number</label>
                    <input name="card_number" type="number" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Name of Card Holder</label>
                    <input name="card_holder" type="text" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Card Security Code</label>
                    <input name="security_code" type="number" required>
                </div>
                <div class="d-flex justify-content-between mt-3 ">
                    <label>* Expires</label>
                    <input name="expiration" type="text" required>
                </div>
                <div class="text-end">
                    <input type="submit" class="btn btn-primary px-4 py-2 mt-4" value="Confirm Booking" />
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4 bg-white border mx-auto">
            <div class="border-bottom px-5 py-2 ">
                <span style="font-size: 24px;" class="fw-bold">Your booking details</span>
            </div>
            <?php
            $query = "SELECT * from rooms where id= '$room_id'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="px-5 mt-2">
                        <span style="font-size: 24px;" class="fw-bold"> <?php echo $row['type'] ?></span>
                        <img height="350" src="<?php echo $row['image'] ?>" alt="roompic" class="w-100">
                        <div class="d-flex justify-content-between mt-3 fw-bold">
                            <span>Check In</span>
                            <span><?php echo $checkin ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-3 fw-bold">
                            <span>Check Out</span>
                            <span><?php echo $checkout ?></span>
                        </div>
                        <div class=" d-flex justify-content-between mt-3 fw-bold">
                            <span>Price</span>
                            <span class="w-28 text-right">€<?php echo $row['price'] ?> per room per night</span>
                        </div>
                        <div class="d-flex justify-content-between mt-3 fw-bold">
                            <span>Number of rooms</span>
                            <span><?php echo $quantity; ?></span>
                        </div>
                        <div class=" d-flex justify-content-between mt-3 fw-bold">
                            <span>Total to pay</span>
                            <?php
                            $total = $row['price'] * $quantity;
                            $_SESSION['total'] = $total;
                            ?>
                            <span>€<?php echo $total; ?></span>
                        </div>
                    </div>

            <?php

                }
            }
            ?>

        </div>
    </div>
</body>

</html>