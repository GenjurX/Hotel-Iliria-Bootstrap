<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div>
        <img style="filter: brightness(0.5);" height="600" src="images/salad.jpg" alt="sunset" class="w-100">
        <div class="text-white about d-flex flex-column w-100 text-center">
            <span style="font-size: 70px;">Restaurant</span>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-center mb-5">
        <p style="font-style: italic; margin-top: 10rem;" class="fw-bold fs-3 w-50 mx-auto">” Iliria Restaurant is the right destination for food lovers. Our chef has masterfully chosen a menu to gratify all the tastes of our clients..”</p>
        <img width="500" height="350" src="images/image.jpg" alt="food" class="mt-5 mx-auto">
    </div>
    <div style="background-color: #003B4A; " class="row">
        <img src="images/italian-cuisine.jpg" alt="italian-cuisine" class="col-12 col-md-6">
        <div style="padding-top: 5rem;" class="col-12 col-md-6 text-white d-flex flex-column text-center">
            <span style="font-size: 30px; font-style: italic;">MEDITERRANEAN</span>
            <span style="font-size: 20px;font-style: italic;">ITALIAN</span>
            <span style="font-style: italic;" class="pb-5">A La Carte</span>
        </div>
    </div>
    <?php include "components/footer.php" ?>
</body>

</html>