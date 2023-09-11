<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
        <header class="left">
            <h1 class="left__title">O'Clock Students News</h1>
            <div class="left__paragraph">
              <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
              </p>
            </div>
            <nav>
              <ul class="left__nav">
                <?php foreach ($linkNav as $linkNavName => $linkNavValue): ?>
                  <li class="left__nav-item"><a href="<?= $linkNavValue ?>" class="left__nav-link"><?= $linkNavName ?></a></li>
                <?php endforeach; ?>
              </ul>
            </nav>
        </header>
        <main class="right">