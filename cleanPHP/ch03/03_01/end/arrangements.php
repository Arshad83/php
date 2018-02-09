<?php
require './includes/db_connect.php';
$sql = 'SELECT * FROM arrangements';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mixed Arrangements - Hansel and Petal</title>
<link rel="shortcut icon" href="/rewrite/handp/images/favicon.ico" type="image/x-icon">
<link href="/rewrite/handp/styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
    <?php require './includes/header.php'; ?>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Arrangements</a></li>
                <li>Mixed Arrangements</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Mixed Arrangements</h1>
            <h2 class="h3 inline_block">Mixed bouquets with the bright colors of Spring</h2>
            <div class="cols lg_margin">
                <div class="col sub">
                    <p class="w210">Hansel &amp; Petal combines the highest quality 
                        flowers in unique, colorful arrangements and bouquets that are sure to 
                        make everyone happy.</p>
                </div>
                <div class="col main">
                    <div id="feature">
                        <div class="inner">
                            <p class="overlay large">Arrangements for Every Occasion</p>
                            <p class="overlay price">Starting at $39.95</p>
                            <img src="/rewrite/handp/images/710_arrangement_97881968.jpg" alt="Mixed Arrangement" height="300" width="710">
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($message) : ?>
            <h2 class="inline_block">Sorry, there seems to be a problem.</h2>
            <?php  else : ?>
            <section class="results">
                <?php foreach ($db->query($sql) as $row) : ?>
                <figure> <a href="/rewrite/handp/details/<?= $row['arrangement_id']; ?>">
                    <img src="/rewrite/handp/images/<?= $row['image']; ?>" alt="<?= $row['alt']; ?>" height="200" width="200">
                    <figcaption>
                        <h3>
                            <?= $row['title']; ?>
                        </h3>
                        <p class="reset">From $
                            <?= $row['price']; ?>
                        </p>
                    </figcaption>
                    </a> </figure>
                <?php endforeach; // end of loop ?>
            </section>
            <?php endif; // end of page ?>
        </div>
    </div>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>