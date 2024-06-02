<?php require 'layout/header.php'; ?>

<div class="container">
    <h2 class="page-title text-uppercase"><?= $page_title; ?></h2>
    <hr class="mb-4">
    <p class="lead">Are you sure that you wanna delete this car?</p>
    <table class="table table-striped text-center">
        <thead>
            <tr class="table-dark">
                <th>ID</th>
                <th>Car</th>
                <th>Price</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $car->get_id(); ?></th>
                <th><?= $car->get_car(); ?></th>
                <th><?= $car->get_price(); ?> USD</th>
                <th><?= $car->get_model(); ?></th>
            </tr>                
        </tbody>
    </table>
    <a href="index.php?action=destroy&id=<?= $car->get_id(); ?>" class="btn btn-danger rounded-pill ps-3 pe-3">Yes, Delete</a>
    <a href="index.php?action=show" class="btn btn-warning rounded-pill ps-3 pe-3">No, Cancel</a>
</div>

<?php require 'layout/footer.php'; ?>