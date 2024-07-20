<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require 'StylePartial.php' ?>
</head>
<body>
    <div class="container">
        <h1><?= htmlspecialchars($message) ?></h1>

        <p><a href="/movies">Go to Movies</a></p>
    </div>
</body>
</html>
