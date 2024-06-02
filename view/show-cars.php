<?php require 'layout/header.php'; ?>

<div class="container">
    <h2 class="page-title text-uppercase"><?= $page_title; ?></h2>
    <hr class="mb-4">
    <table class="table table-striped text-center">
        <thead>
            <tr class="table-dark">
                <th>ID</th>
                <th>Car</th>
                <th>Price</th>
                <th>Model</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car): ?>
                <tr>
                    <th><?= $car->get_id(); ?></th>
                    <th><?= $car->get_car(); ?></th>
                    <th><?= $car->get_price(); ?> USD</th>
                    <th><?= $car->get_model(); ?></th>
                    <th>
                        <a href="index.php?action=edit&id=<?= $car->get_id(); ?>" class="btn btn-success btn-sm rounded-pill ps-3 pe-3">Edit</a>
                        <a href="index.php?action=delete&id=<?= $car->get_id(); ?>" class="btn btn-danger btn-sm rounded-pill ps-3 pe-3">Delete</a>
                    </th>
                </tr>                
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require 'layout/footer.php'; ?>