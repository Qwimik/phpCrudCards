<?php 
include 'func.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>examphp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    html,
    body {
        height: 100%;
    }

    .wrapper {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1 1 auto;
    }

    h5::first-letter {
        text-transform: uppercase;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <header class="header d-flex justify-content-between p-3 bg-dark text-light sticky-top">
            <h1 class="ms-5 fw-semibold">PHP is very interesting!!!</h1>
            <form action="" method="post">
                <div class="input-group mt-2">
                    <input type="search" name="filter" class="form-control" placeholder="Filter by name"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" name="btn_filter" type="submit"
                        id="button-addon2">Search</button>
                </div>
            </form>
            <button class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#Modal">Add card</button>
        </header>
        <main class="main py-4">
            <div class="container">
                <div class="row gap-3 justify-content-center">
                    <?php foreach ($result as $value) { ?>
                    <div class="col-10 col-sm-8 col-md-4 col-lg-3 justify-content-center">
                        <div class="card" style="min-width: 14rem;">
                            <img style="width: 300px; height: 200px;" src="<?= $value['image'] ?>"
                                class="card-img-top w-100" alt="<?= $value['name'] ?>">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $value['id'] ?>. <?= $value['name'] ?></h5>
                                <p class="card-text text-center"><?= $value['description'] ?></p>
                                <div class="text-center">
                                    <a href="?edit=<?=$value['id'] ?>" class="btn btn-warning btn-sm"
                                        data-bs-target="#exampleModalToggle<?=$value['id']?>"
                                        data-bs-toggle="modal">Edit</a>
                                    <a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal<?=$value['id'] ?>">Delete</i></a>
                                    <a href="?info=<?=$value['id'] ?>" class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#infoModal<?=$value['id'] ?>">Info</i></a>
                                </div>
                                <?php require 'modal.php'; ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="Modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Додати картку</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Ім'я">
                                    </div>
                                    <div class="form-group my-3">
                                        <input type="text" class="form-control" name="description" value=""
                                            placeholder="Опис картки">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="image" value=""
                                            placeholder="Посилання на картинку">
                                    </div>
                                    <p class="text-center fs-6 my-3">Або завантажте картинку...</p>
                                    <div class="form-group">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                        <input type="file" class="form-control" name="myfile" accept="image/*">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-success">Додати</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="p-2 bg-dark text-light">
            <p class="text-center fs-4 fst-italic mb-0">Thank you for attention! :)</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>