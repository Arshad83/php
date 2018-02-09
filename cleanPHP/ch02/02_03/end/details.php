<?php
require './includes/db_connect.php';
$sql = 'SELECT * FROM arrangements WHERE arrangement_id = :id';
$stmt = $db->prepare($sql);
$stmt->execute([':id' => $_GET['arrangement_id']]);
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mixed Arrangements - Hansel and Petal</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="site">
    <?php require './includes/header.php'; ?>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Arrangements</a></li>
                <li><a href="arrangements.php">Mixed Arrangements</a></li>
                <li>
                    <?php if (isset($row['title'])) {
				        echo $row['title']; 
				    } ?>
                </li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <?php if (!$row) { ?>
            <h1 class="inline_block">Oops! There seems to be a problem.</h1>
            <p>That arrangement doesn't seem to exist.</p>
        </div>    
            <?php } else { ?>
            <h1 class="inline_block"><?php echo $row['title']; ?></h1>
            <figure class="arrangement"><img src="images/<?= $row['image']; ?>" alt="<?= $row['alt']; ?>" width="200" height="200">
                <figcaption>Price from $<?= $row['price']; ?></figcaption>
            </figure>
            <?= $row['description']; ?>
        </div>
        <div id="col_2">
            <h3>How to Order</h3>
            <p>All the flowers for our mixed arrangements are carefully selected by <a href="#">our talented designers</a> using the freshest flowers in season. To discuss your individual requirements, please call Hansel and Petal toll-free on <b>800-555-0199</b>.</p>
        </div>
        <?php } ?>
    </div>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
