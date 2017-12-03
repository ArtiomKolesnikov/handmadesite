<?php include ROOT . 'app/views/layouts/header.php'; ?>
<main>
    <ul>
        <?php foreach($cars as $car): ?>
            <li><?php echo "{$car['name']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include ROOT . 'app/views/layouts/footer.php'; ?>
