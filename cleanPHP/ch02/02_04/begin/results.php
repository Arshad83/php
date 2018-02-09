<?php
if (isset($_GET['searchterm'])) {
    $searchterm = $_GET['searchterm'];
} else {
    $searchterm = false;
}
$row = false;
if ($searchterm) {
    require './includes/db_connect.php';
    $flowers = 'SELECT image, description, searchterm FROM flowers INNER JOIN searchterms USING (search_id)
                WHERE searchterm LIKE :searchterm OR alternative LIKE :searchterm';
    $arrangements = 'SELECT arrangement_id, image, alt, title, price, description
                     FROM arrangements INNER JOIN search2arrangements USING (arrangement_id)
                     INNER JOIN searchterms USING (search_id)
                     WHERE searchterm LIKE :searchterm OR alternative LIKE :searchterm';
    $stmt = $db->prepare($flowers);
    $stmt->execute([':searchterm' => '%' . $searchterm . '%']);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mixed Arrangements - Hansel and Petal</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
  <?php require './includes/header.php'; ?>
  <div id="content">
    <div id="col_1" role="main">
      <h1>Search Results
        <?php
            if ($row) {
                echo 'for ' . htmlentities(ucwords($searchterm));
            }
            ?>
      </h1>
      <?php if (!$row) { ?>
      <p>Sorry, no results found
          <?php
              if ($searchterm) {
                  echo ' for ' . htmlentities($searchterm);
              }              
          ?>.</p>
      <?php } else { ?>
      <h2>Fresh Flowers</h2>
      <section class="results">
        <?php do { ?>
        <figure> <img src="images/<?= $row['image']; ?>" height="160" width="160">
          <figcaption>
            <?= $row['description']; ?>
          </figcaption>
        </figure>
        <?php } while ($row = $stmt->fetch(PDO::FETCH_ASSOC)); ?>
      </section>
      <h2>Flower Arrangements</h2>
      <section class="results">
        <?php
                $stmt = $db->prepare($arrangements);
                $stmt->execute([':searchterm' => '%' . $searchterm . '%']);
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <figure><a href="details.php?arrangement_id=<?= $row['arrangement_id'];
                        ?>"> <img
                                src="images/<?= $row['image']; ?>" alt="<?= $row['alt'];
                            ?>"
                                height="200"
                                width="200">
          <figcaption>
            <h3><?= $row['title']; ?></h3>
            <p class="reset">From $<?= $row['price']; ?></p>
          </figcaption>
          </a> </figure>
        <?php endwhile; ?>
      </section>
      <?php } ?>
    </div>
  </div>
  <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
