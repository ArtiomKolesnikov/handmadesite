<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
</head>
<body>
<h1>All users</h1>
<ul>
    <?php foreach($users as $user): ?>
        <li><?php echo "{$user['name']} {$user['last_name']} - {$user['role']}"; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>