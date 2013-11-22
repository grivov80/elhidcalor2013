<?php 
 include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo COMPANYNAME;?> - Електро, В и К, Отопление</title>
    <meta id="Keywords" name="keywords" content="Елхидкалор, Elhidcalor, магазин, Асеновград, електро, водопровод, канализация, отопление.">
    <meta id="Description" name="description" content="Елхидкалор - магазин за електро, водопровод, канализация и отопление в Асеновград.">
    <link rel="stylesheet" type="text/css" href="mcss/styles.css">
    <link rel="shortcut icon" href="images/Logo5.png">
<!-- google analytics -->
<?php include 'ehcgoogleanalytics.html';?>
</head>
<body>
	<header>
	    <h1><a href="index.php"><?php  echo COMPANYNAME;?></a></h1>
	    <?php include 'horizontalnoMenu.php';?>
	</header>
	<table>
	    <tr>
	        <td>
	            <div id="elektromateriali">
	                <!--  a href="produkti/electro/electro.php"-->
	                <a href="electro.php">
	                <img src="images/elektromaterial.jpg" alt="elektro" width="360">Електроматериали</a>
	            </div>
	        </td>
	        <td>
	            <div id="vikmat">
	                <a href="vik.php"><img src="images/vik100.jpg" alt="vik" width="360">
	                Водопровод<br>Канализация</a>
	    		</div>
	  		</td>
	 	</tr>
	    <tr>
	        <td>
	            <div id="otoplenie">
	                <a href="otoplenie.php">
	                <img src="images/otoplenie.jpg" alt="otoplenie" width="260">Отопление</a>
	            </div>
	  		</td>
	  		<td>
	    		<div id="konsumativi">
	    	        <a href="konsumativi.php">
	    	        <br>
	       			<img src="images/konsumativi.jpg" alt="konsumativi" width="360"><br>Консумативи</a>
	    		</div>
	  		</td>
	 	</tr>
	</table>
</body>
</html>
