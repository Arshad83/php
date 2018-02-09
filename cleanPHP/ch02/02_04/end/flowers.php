<?php
require './includes/db_connect.php';
if (isset($_GET['flower'])) {
	$sql = 'SELECT image, description FROM flowers WHERE image LIKE :flower';
	$stmt = $db->prepare($sql);
	$stmt->execute([':flower' => '%' . $_GET['flower'] . '%']);
	$row = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Fresh Flowers - Hansel and Petal</title>
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
        <li>Fresh Flowers</li>
      </ul>
    </div>
    <div id="col_1" role="main">
      <h1 class="inline_block">Fresh Flowers</h1>
      <h2 class="h3 inline_block">Cut Daily</h2>
      
     
      <?php if (isset($row) && $row) { ?>
		   <section class="results">
		 <?php  do { ?>
			  <figure><img src="/rewrite/handp/images/<?= $row['image']; ?>" alt="" height="160" width="160">
          <figcaption>
            <p><?=  $row['description']; ?></p>
          </figcaption>
        </figure>
		 <?php  } while ($row = $stmt->fetch());
	  } else { ?>
      <p>Select a flower to see the range of colors available.</p>
       <section class="results">
        <figure><a href="/rewrite/handp/flowers.php?flower=calla"> <img src="images/160_calla_blush_160337318.jpg" alt="" height="160" width="160">
          <figcaption>
            <h3>Calla Lilies</h3>
            <p>$3.00 per stem</p>
          </figcaption>
          </a>
        </figure>
        <figure><a href="/rewrite/handp/flowers.php?flower=gerbera"> <img src="images/160_gerbera_purple_146798391.jpg" alt="" height="160" width="160">
          <figcaption>
            <h3>Gerbera Daisies</h3>
            <p>$3.00 per stem</p>
          </figcaption>
          </a>
        </figure>
        <figure><a href="/rewrite/handp/flowers.php?flower=rose"> <img src="images/160_rose_pink_112277154.jpg" alt="" height="160" width="160">
          <figcaption>
            <h3>Roses</h3>
            <p>$3.00 per stem</p>
          </figcaption>
          </a>
        </figure>
        <figure><a href="/rewrite/handp/flowers.php?flower=lily"> <img src="images/160_lily_pink_160102549.jpg" alt="" height="160" width="160">
          <figcaption>
            <h3>Lilies</h3>
            <p>$3.00 per stem</p>
          </figcaption>
          </a>
        </figure>
        <figure><a href="/rewrite/handp/flowers.php?flower=tulip"> <img src="images/160_tulip_purple_160910481.jpg" alt="" height="160" width="160">
          <figcaption>
            <h3>Tulips</h3>
            <p>$2.00 per stem</p>
          </figcaption>
          </a>
        </figure>
        <?php } ?>
      </section>
    </div>
  </div>
  <?php  include './includes/footer.php'; ?>
</div>
</body>
</html>