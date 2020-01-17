<!DOCTYPE html>
<?php
require_once './config/db_connection.php';
$lists = getlists();
?>

<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/CSS/Theme.css" />
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

     <?php include_once ('./assets/PHP_Templates/nav.php'); ?> 
     <h1>Code Start here for currentonsale </h1>

     	<?php 
            if( !empty( $lists ) )
            { 
              foreach ($lists as $value)
               {
					?>
					<tr>
          <br>
						<th scope="row"><?= isset($value['ID']) ? $value['ID'] : '-' ?> </th>
						
					</tr>
          <?php 
        } 
        } else
         { ?>
					<tr colspan="4">
						<td>No lists Found</td>
					</tr>
					
          <?php } ?>
     
     <?php include_once ('./assets/PHP_Templates/footer.php'); ?>
</body>
</html>
