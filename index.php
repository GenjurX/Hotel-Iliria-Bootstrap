<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Iliria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body>
    <?php include 'components/header.php'; ?>

    <div id="carouselExampleFade" class="position carousel slide carousel-fade -z-10 w-full" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="images/photo1.webp" class="d-block w-full" alt="...">
                <div class="carousel-caption text-white d-flex flex-column">
                    <h1 style="font-size: 70px;">Hotel Iliria</h1>
                    <span style="font-size: 24px; " class="mt-3">Welcomes you</span>
                    <span class="mt-3 -mb-5">If you are looking for a place to enjoy your vacation, then you <br> are in the right place. Book now at Hotel Iliria.</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/photo2.jpg" class="d-block w-full" alt="...">
                <div class="carousel-caption text-white d-flex flex-column">
                    <h1 style="font-size: 60px; ">Hotel Iliria</h1>
                    <span style="font-size: 24px; " class="mt-3">Welcomes you</span>
                    <span class="mt-3 -mb-5">If you are looking for a place to enjoy your vacation, then you <br> are in the right place. Book now at Hotel Iliria.</span>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
            <a href="/about.php" class="bttn">Learn more</a>
        </div>
        <img class="col-12 col-md-6 p-5" src="images/image.jpg" alt="room pic" class="mt-5">
    </div>

    <div class="row p-5 ">
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


    <div class="w-100 justify-content-center px-5">
        <span class="facilities myText">Facilities Of Hotel Iliria</span>
        <div class="row w-100 gap-0">
            <div class="col-12 col-md-3 d-flex flex-column borderFacilities p-3">
                <img src="images/freeparking.png" alt="parking" class="mx-auto mt-2 ">
                <span class=" mx-auto">Free Parking</span>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column borderFacilities p-3">
                <img src="images/wifi.png" alt="parking" class=" mx-auto mt-2 mt-2">
                <span class="mx-auto ">Free Wi-Fi</span>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column borderFacilities p-3 ">
                <img src="images/restaurant.png" alt="parking" class="mx-auto  mt-2">
                <span class="mx-auto ">Restaurant</span>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column borderFacilities p-3">
                <img src="images/rooms.png" alt="parking" class=" mx-auto mt-2">
                <span class=" mx-auto">Family Rooms</span>
            </div>
        </div>
    </div>

    </div>
    <div class="text-center mt-3">
        <a href="/about.php"><button class="flex mx-auto mt-10 bttn">Discover more</button></a>
    </div>
</body>

<div class="text-center mt-5">
    <span class="myText">Rooms</span>
</div>

<div class="d-flex flex-column flex-md-row justify-content-center">
    <div class="d-flex flex-column mx-auto">
        <img width="300" height="300" src="images/room1.jpg" alt="room1">
        <span class="mt-2 fw-bold">Deluxe Double or Twin <br> Room with Sea View</span>
        <div class="yellow"></div>
        <div class="d-flex flex-column ">
            <span>1 single bed and</span>
            <span>1 large double bed</span>
            <div class="text-center">
                <a href="/rooms.php"><button class="mt-2 bttn">See all rooms</button></a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mx-auto ">
        <img width="300" height="300" src="images/room1.jpg" alt="room1">
        <span class="mt-2 fw-bold">Deluxe Double or Twin <br> Room with Sea View</span>
        <div class="yellow"></div>
        <div class="d-flex flex-column ">
            <span>1 single bed and</span>
            <span>1 large double bed</span>
            <div class="text-center">
                <a href="/rooms.php"><button class="mt-2 bttn ">See all rooms</button></a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column mx-auto">
        <img width="300" height="300" src="images/room1.jpg" alt="room1">
        <span class="mt-2 fw-bold">Deluxe Double or Twin <br> Room with Sea View</span>
        <div class="yellow"></div>
        <div class="d-flex flex-column ">
            <span>1 single bed and</span>
            <span>1 large double bed</span>
            <div class="text-center">
                <a href="/rooms.php"><button class="mt-2 bttn">See all rooms</button></a>
            </div>
        </div>
    </div>
</div>
<div class="w-100 position-relative mt-5">
    <img style="width: 100%;  filter: brightness(0.5);" src="images/saranda.jpg" alt="bg picture" class="saranda">
    <div class="test d-flex flex-column">
        <span class=" text-white fw-bold  mx-auto">TESTIMONIAL</span>
        <span style="font-size: 50px; " class="text-white fw-bold  mx-auto ">What They Say</span>
    </div>
    <div class=" testimonials fs-6 d-flex flex-column flex-md-row w-100 gap-5 justify-content-between">
        <div class="mx-auto bg-black text-white p-5 w-75 rounded">
            <img src="images/hungary.jpg" alt="hungarian flag" class="flag">
            <p>
                Superb location, superb owner and staff; they satisfied all of our extra
                requests immediately. Very friendly and helpful people, we could make friends
                with them easily !!!! The Hotel is close to the main beach, shops, bars, etc.
                Great value for money, we can recommend it to everyone without reservation !!!!
                Good luck to them and promise to return the soonest !!
            </p>
            <span class="mt-5">GYÖRGY</span>
        </div>
        <div class="mx-auto text-white bg-black p-5 w-75 rounded">
            <img src="images/brazil.jpg" alt="hungarian flag" class="flag ">

            <p>
                It was a very good experience. The hosts are very nice and helpful, they indicated some nice places to visit. The room was very clean and comfortable. The price is fair for what it offers. The location is good, near t. The host told we were the first brazilians guests 🙂
            </p>
            <span class="mt-5">NELSON</span>
        </div>
        <div class="mx-auto  text-white bg-black p-5 w-75 rounded">
            <img src="images/albania.jpg" alt="hungarian flag" class="flag">
            <p>
                I liked the position of the hotel in relation to t and, above all, the proximity and the quality of the beach in front of the hotel. To be noted, also, the hospitality and the friendship of the whole staff.
            </p>
            <span class="mt-5">ENGJELL</span>
        </div>
    </div>
</div>
<?php include "components/footer.php" ?>

</html>