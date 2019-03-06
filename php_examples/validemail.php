<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$email = "john@m.co";

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "<script>alert('$email');</script>";
} else {
    echo "<script>alert('$email');</script>";
?>

</body>
</html>