<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://newcss.net/theme/night.css">
    <link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
</head>
<body>
<h2>Search ZIP Code</h2>

<form method="get" action="/">
    <p>
        <label>City Name</label>
        <br>
        <input type="text" name="city">
    </p>
    <p>
        <input type="submit" value="search">
    </p>
</form>
<ul>
    <?php if (isset($zip) && !is_null($zip)) : ?>
        <li>zipcode: <?= $zip->id ?></li>
        <li>name: <?= $zip->city ?></li>
        <li>population: <?= $zip->pop ?></li>
        <li>location: (<?= $zip->loc[0] ?>, <?= $zip->loc[1] ?>)</li>
    <?php endif; ?>
</ul>
</body>
</html>