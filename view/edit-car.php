<?php require 'layout/header.php'; ?>

<div class="container">
    <h2 class="page-title text-uppercase"><?= $page_title; ?></h2>
    <hr class="mb-4">
    <form action="index.php?action=update" method="post">
        <input value="<?= $car->get_id(); ?>" required type="hidden" name="id">
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input value="<?= $car->get_car(); ?>" required id="name" type="text" class="form-control rounded-pill" placeholder="Name" name="car">
        </div>
        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input value="<?= $car->get_price(); ?>" required id="price" type="number" class="form-control rounded-pill" placeholder="Price" name="price">
        </div>
        <div class="form-group mb-3">
            <label for="model">Model</label>
            <input value="<?= $car->get_model(); ?>" required id="model" type="number" class="form-control rounded-pill" placeholder="Date" name="model">
        </div>
        <div class="form-group mb-3">
            <input type="submit" value="Edit car" class="btn btn-primary rounded-pill ps-3 pe-3" name="add">
        </div>
    </form>
</div>

<?php require 'layout/footer.php'; ?>