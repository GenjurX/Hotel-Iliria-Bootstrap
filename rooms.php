<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="position-relative">
        <img style="filter: brightness(0.5);" height="600" src="images/room2.jpg" alt="sunset" class="w-100">
        <div class="text-white about d-flex flex-column w-100 text-center">
            <span style="font-size: 70px;">Our Rooms</span>
            <p class="w-50 mx-auto">
                All rooms are air-conditioned and come with a balcony with either a partial or a full sea view. Each unit type comes with cable TV and a fridge, as well as a bathroom fitted with a shower. Some units include a basic kitchenette.
            </p>
        </div>
    </div>
    <div class="text-center mt-5">
        <span class="mt-5 myText">Rooms</span>
    </div>
    <div class="row px-5 mx-auto">
        <?php
        include "database.php";
        $query = 'SELECT * FROM `rooms`';
        $result = mysqli_query($conn, $query);
        ?>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>

                <div class="col-12 col-md-4 d-flex flex-column mb-3">
                    <img src="<?php echo $data['image']; ?>" alt="room1">
                    <span class="mt-2 fw-bold"><?php echo $data['type']; ?></span>
                    <div class="my-2"></div>
                    <div class="d-flex flex-column">
                        <span class="w-52"><?php echo $data['bedding']; ?></span>
                        <a class="mx-auto" href="/reservation.php"><button class="mt-2 bttn">Book Now</button></a>
                    </div>
                </div>
        <?php endwhile;
        endif;
        mysqli_close($conn);
        ?>
    </div>
    <?php include "components/footer.php" ?>
</body>

</html>