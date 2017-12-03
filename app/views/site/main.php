<?php include ROOT . 'app/views/layouts/header.php'; ?>
<main class="main_page">
<ul class="category_list">
    <?php foreach($categories as $category): ?>
        <li><?= $category['name']; ?></li>
    <?php endforeach; ?>
</ul>
</main>
<?php include ROOT . 'app/views/layouts/footer.php'; ?>
