<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="position-relative ">
        <img style="filter: brightness(0.5);" height="600" src="images/sunset.webp" alt="sunset" class="w-100">
        <div class="text-white w-100 about text-center">
            <span style="font-size: 70px;">About Us</span>
        </div>
    </div>
    <div class="row p-1 border mt-5 mx-5">
        <div class="col-12 col-md-6 p-5 position-relative">
            <img width="600" height="400" src="images/image2.jpg" alt="room pic" class="myImg">
            <p class="blueText">Happiness consists of living each day as if it were the first day of you Honeymoon and the last day of your Vacation.
                Quotes</p>
        </div>
        <div class="col-12 col-md-6 p-5 d-flex flex-column">
            <span style="color: #003B4A;" class="fw-bold">RELAXED & FRIENDLY</span>

            <span class="myText fw-bold">Our Story</span>
            <div class="line w-25"></div>
            <p class="font-bold mt-3 ">
                Hotel Iliria Has Been Welcoming Guests Since 7 Feb 2004.</p>
            <p class="mt-3">The Best Place To Start Is Always From Iliria Hotel. We Aim At Making Your Holiday An Unforgettable One With Comfort And Relaxation With Our Fantastic Rooms. We Promise You A Vacation Experience That You Will Saturate With Food, Holiday, Entertainment And Peace With Our Delicious Menus, Cheerful Staff, And Beach Dining Facility.</p>
            <a href="/about.php" class="bttn mt-2 w-50 text-center ">Learn more</a>
        </div>
    </div>
    <div class="row mt-md-3 p-5 grid1">
        <div class="col-12 col-md-6 p-5">
            <span class=" fs-2 fw-bold">About Hotel Iliria</span>
            <p class="my-3">Located on the beachfront, Hotel Iliria offers an on-site restaurant serving traditional Albanian dishes, as well as a garden and a bar. Free Wi-Fi access is available. The centre of Sarandë is 500 m away.</p>
            <p>All rooms are air-conditioned and come with a balcony with either a partial or a full sea view. Each unit type comes with cable TV and a fridge, as well as a bathroom fitted with a shower. Some units include a basic kitchenette.</p>
        </div>
        <img class="col-12 col-md-6 p-5" src="images/hoteIliria.jpg" alt="room pic" class="mt-5">
        <img class="col-12 col-md-6 p-5" src="images/room1.jpg" alt="room pic" class="mt-5">
        <div class="col-12 col-md-6 p-5">
            <span class=" fs-2 fw-bold">Location</span>
            <p class="my-3">The 16th century Lëkurësi Castle is just 1 km away and the ruins of the ancient Greek town of Phoenice can be found at a distance of 4 km. UNESCO-protected Butrint National Park is 15 km from the property.</p>
            <p>The local bus station is 500 m away, while the Ferry Port is 700 m from the Iliria. Corfu Airport can be reached by ferry and is approximately 20 km away. The property offers free parking.</p>
        </div>


        <div class="col-12 col-md-6 p-5">
            <span class="fs-2 fw-bold">Testimonials</span>
            <p class="my-3">This is our guests’ favourite part of Sarandë, according to independent reviews.</p>
            <p>Couples particularly like the location — they rated it <span class="fw-bold">9.5</span> for a two-person trip.</p>
            <a href="/reservation.php" class="bttn">Book Now</a>
        </div>
        <img class="col-12 col-md-6 p-5" src="images/image.jpg" alt="room pic" class="mt-5">
    </div>


    <div class="mt-5 w-100 mx-auto text-center">
        <span class="myText mx-auto">Facilities Of Hotel Iliria</span>
        <div class="px-5 ">
            <div class="d-flex justify-content-center gap-5 mt-5">
                <div class="d-flex flex-column borderFacilities w-50">
                    <img src="images/freeparking.png" alt="parking" class="mx-auto mt-2 ">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Free Parking</span>
                </div>
                <div class=" d-flex flex-column borderFacilities w-50">
                    <img src="images/restaurant.png" alt="parking" class="mx-auto  mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Restaurant</span>
                </div>
                <div class=" d-flex flex-column borderFacilities w-50 ">
                    <img src="images/rooms.png" alt="parking" class=" mx-auto mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Family Rooms</span>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-5 mt-2">
                <div class=" d-flex flex-column  borderFacilities w-50">
                    <img src="images/wifi.png" alt="parking" class=" mx-auto mt-2 mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Free Wi-Fi</span>
                </div>
                <div class="d-flex flex-column borderFacilities w-50">
                    <img src="images/nonSmoking.png" alt="parking" class="mx-auto  mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Non-Smoking Rooms</span>
                </div>
                <div class="d-flex flex-column borderFacilities w-50 ">
                    <img src="images/bar.png" alt="parking" class=" mx-auto mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Bar</span>
                </div>
            </div>
        </div>

    </div>
    <div class="text-center my-3">
        <a href="/reservation.php"><button class="flex mx-auto my-10 bttn">Book now</button></a>
    </div>

    <?php include "components/footer.php"; ?>

</body>

</html>