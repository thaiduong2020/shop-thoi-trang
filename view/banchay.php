<!DOCTYPE html>
<html>
    <head>
        <title>Lúa Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/style.css">
        <link rel="stylesheet" href="public/main.css">
        <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
  

    </style>
    </head>
    <body>
    <?php require_once("module/topbar.php");?>
    <div class="wrap">
    <?php require_once("module/header.php");?>

        <div class="navbarr">
        <?php require_once("module/menu-danhmuc.php");?>

        <?php require_once("module/navbar-top.php");?>
        <?php require_once("module/navbar-mid.php");?>

            
            
       
    </div>
    <?php require_once("module/topbanchay.php");?>

    <div class="products">
    <?php require_once("module/thoitrangnam.php");?>
    <?php require_once("module/thoitrangnu.php");?>
    <?php require_once("module/phukienhot.php");?>
    <?php require_once("module/tintuc.php");?>


        
    <?php require_once("module/footer.php");?>

     
    </div>
   
    </body>
</html>