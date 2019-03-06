<html>
<head>
<title>different if
</title>
</head>
<body>

<form action="" method="POST">
	<input type="text" name="inputvalue" value="" >
</form>
<?php
$first_value = $_POST['inputvalue'];
?>
	<?php if ($first_value > 50) {?>
	<h1><strong>You are in inside if condition</strong></h1>
				<h1><strong>You are in inside if condition</strong></h1>
					<h1><strong>You are in inside if condition</strong></h1>
						<h1><strong>You are in inside if condition</strong></h1>
							<h1><strong>You are in inside if condition</strong></h1>
								<h1><strong>You are in inside if condition</strong></h1>
	<?php} else{?>
			<h2>You are in Else condition</h2>
			<h2>You are in Else condition</h2>
			<h2>You are in Else condition</h2>
			<h2>You are in Else condition</h2>
			<h2>You are in Else condition</h2>
			<h2>You are in Else condition</h2>
			<h2>You are in Else condition</h2>


	<?php //endif?>
	</body>