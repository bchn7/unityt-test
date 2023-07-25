<!DOCTYPE html>
<html>
<head>
    <title>Wirtualne ZOO</title>
</head>
<body>
    <h1>Wirtualne ZOO</h1>
    <h2>Lista zwierząt:</h2>
    <ul>
        <?php foreach ($animals as $animal): ?>
            <li><?php echo $animal; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>