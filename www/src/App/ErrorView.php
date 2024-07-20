<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($error_code) ?> <?= htmlspecialchars($error_message) ?></title>
    <?php require 'StylePartial.php' ?>
</head>
<body>
    <div class="container">
        <h1><?= htmlspecialchars($error_code) ?></h1>
        <h2><?= htmlspecialchars($error_message) ?></h2>
        <p><?= htmlspecialchars($error_sub_message) ?></p>
        <p><a href="/">Go to Homepage</a></p>
    </div>
</body>
</html>
