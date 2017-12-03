<?php include ROOT . 'app/views/layouts/header.php'; ?>
<main>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?php echo "{$user['name']} {$user['last_name']} - {$user['role']}"; ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include ROOT . 'app/views/layouts/footer.php'; ?>
