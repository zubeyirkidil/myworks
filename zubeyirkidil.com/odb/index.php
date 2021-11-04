<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-K77L9DLFBP"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-K77L9DLFBP');
		</script>

	<title>ODB</title>

	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1"/>
 	<meta name="language" content="Turkish"/>

 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body>
<div class="texts">

<img src="img/a.jpg">
<h1>ODB - Ortak Ders Bulucu</h1>

<p>Adınızı soyadınızı, daha sonra aldığınız derslerin <b>KODLARINI</b>  giriniz. Yedi kutuyu da doldurmanız gerekmiyor.</p> 
<p><a href="https://learning-agreement.eu/">https://learning-agreement.eu/</a> sitesinden oluşturduğumuz OLA da aldığınız derslerin <b>KODLARINI</b> bulabilirsiniz :)</p>

<br>
<p><b>Örneğin;<br></b> 5 ders alıyorsanız beş tanesini yazıp gönderebilirsiniz. <span style="color: red;">En az 2 ders</span> girmeniz gerekmekte.</p>
</div>

<?php


		$productsQuery=mysqli_query($connect,"select * from odb1");
		
		$getProduct=mysqli_fetch_assoc($productsQuery);

		$number=1;

		$productsQuery=mysqli_query($connect,"select * from odb1 order by numara");
		
		?>

	<table style="margin-bottom: 25px;">
		
		<tr>
			<th>Sıra</th>
    		<th>Ad</th>
    		<th>Soyad</th>
    		<th>Ders1</th>
    		<th>Ders2</th>
    		<th>Ders3</th>
    		<th>Ders4</th>
    		<th>Ders5</th>
    		<th>Ders6</th>
    		<th>Ders7</th>
    		
  		</tr>


	<?php

  		while($getProduct=mysqli_fetch_assoc($productsQuery)){

	?>
			<tr>
    		<td><?php echo "$number" ?></td>
    		<td><?php echo $getProduct['ad']; ?></td>
    		<td><?php echo $getProduct['soyad']; ?></td>
    		<td><?php echo $getProduct['ders1']; ?></td>
    		<td><?php echo $getProduct['ders2']; ?></td>
    		<td><?php echo $getProduct['ders3']; ?></td>
    		<td><?php echo $getProduct['ders4']; ?></td>
    		<td><?php echo $getProduct['ders5']; ?></td>
    		<td><?php echo $getProduct['ders6']; ?></td>
    		<td><?php echo $getProduct['ders7']; ?></td>
    		

			</tr>
<?php 
		
		$number++;


		}

?>


</table>

<div class="form">
				<form action="index.php?yenikayit" method="POST">
					

					<input type="text" name="ad" placeholder="Ad" required><br>
					<input type="text" name="soyad" placeholder="Soyad" required><br>
					<input type="text" name="ders1" placeholder="Ders 1 Kodu" required><br>
					<input type="text" name="ders2" placeholder="Ders 2 Kodu" required><br>
					<input type="text" name="ders3" placeholder="Ders 3 Kodu"><br>
					<input type="text" name="ders4" placeholder="Ders 4 Kodu"><br>
					<input type="text" name="ders5" placeholder="Ders 5 Kodu"><br>
					<input type="text" name="ders6" placeholder="Ders 6 Kodu"><br>
					<input type="text" name="ders7" placeholder="Ders 7 Kodu"><br>
					
					<button type="submit" name="submit">Kaydet</button>
				</form>

			<?php 
					
					if (isset($_GET['yenikayit'])) {

							$ad=trim($_POST['ad']);
							$soyad=trim($_POST['soyad']);
							$ders1=trim(mb_strtoupper($_POST['ders1']));
							$ders2=trim(mb_strtoupper($_POST['ders2']));
							$ders3=trim(mb_strtoupper($_POST['ders3']));
							$ders4=trim(mb_strtoupper($_POST['ders4']));
							$ders5=trim(mb_strtoupper($_POST['ders5']));
							$ders6=trim(mb_strtoupper($_POST['ders6']));
							$ders7=trim(mb_strtoupper($_POST['ders7']));
							

							$add = mysqli_query($connect,"INSERT INTO odb1(ad,soyad,ders1,ders2,ders3,ders4,ders5,ders6,ders7) VALUES('$ad','$soyad','$ders1','$ders2','$ders3','$ders4','$ders5','$ders6','$ders7')");
							
							if($add){

								echo "Kayıt eklendi";
								header('Location: https://www.zubeyirkidil.com/odb');
							}else{

								echo "fail";
							}
							
					}

			 ?>

			<form style="margin-top: 25px; margin-bottom: 25px;" action="index.php?sorgula" method="POST">
				<input type="text" name="derskodu" placeholder="DERS KODU" required><br>
				<button type="submit" name="submit">Dersi kimlerin aldığını göster</button>
			</form>


		<?php

		

if(isset($_GET['sorgula'])){




			$derskodu=mb_strtoupper($_POST['derskodu']);

			$productsQuery=mysqli_query($connect,"select * from odb1");
			
			$getProduct=mysqli_fetch_assoc($productsQuery);

			$array=[];


			$productsQuery=mysqli_query($connect,"select * from odb1 order by numara");


			while($getProduct=mysqli_fetch_assoc($productsQuery)){

						$ad=$getProduct['ad'];
						$soyad=$getProduct['soyad'];
						$ders1=$getProduct['ders1'];
						$ders2=$getProduct['ders2'];
						$ders3=$getProduct['ders3'];
						$ders4=$getProduct['ders4'];
						$ders5=$getProduct['ders5'];
						$ders6=$getProduct['ders6'];
						$ders7=$getProduct['ders7'];

				if($derskodu==$ders1 || $derskodu==$ders2 || $derskodu==$ders3 || $derskodu==$ders4 || $derskodu==$ders5 || $derskodu==$ders6 || $derskodu==$ders7){


					array_push($array,"$ad $soyad");

				}

			}

			?>

			<table>
		
		<tr>
			<th style="padding: 10px;"><?php echo $derskodu ?> Kodlu Dersi Alanlar</th>
  		</tr>

			<?php




			foreach ($array as $value) {
  				echo "<tr style='padding: 5px;'><td>$value</td></tr>";
			}

}


?>
</table>



<?php


		$productsQuery=mysqli_query($connect,"select * from odb1 order by numara");

		$a=[];
		$b=[];

		while($getProduct=mysqli_fetch_assoc($productsQuery)){


						$ad=$getProduct['ad'];
						$soyad=$getProduct['soyad'];
						$ders1=$getProduct['ders1'];
						$ders2=$getProduct['ders2'];
						$ders3=$getProduct['ders3'];
						$ders4=$getProduct['ders4'];
						$ders5=$getProduct['ders5'];
						$ders6=$getProduct['ders6'];
						$ders7=$getProduct['ders7'];
			
			array_push($a,$ders1,$ders2,$ders3,$ders4,$ders5,$ders6,$ders7);

		}





		

		$n=sizeof($a);

		for ($i=0; $i < $n; $i++) { 
			
			for ($j=$i+1; $j < $n; $j++) { 
				
					if($a[$i]==$a[$j]){


						for ($k=$j; $k < $n; $k++) { 
							
							$a[$k]=$a[$k+1];
						}
						$n--;
						$j--;
					}
			}
		}

		//$a dersler
		
		?>

<table class="ortak">

		<?php
	
		for ($i=0; $i < sizeof($a); $i++) { 
			# code...
		

			if($a[$i]!=""){

				?> 

					<tr>
					<th style="font-weight: bold; margin-top: 15px;"><?php echo $a[$i]." Kodlu Dersi Alanlar: "; ?></th>
					</tr>

				


				<?php

		


			$productsQuery=mysqli_query($connect,"select * from odb1 where ders1='$a[$i]' or ders2='$a[$i]' or ders3='$a[$i]' or ders4='$a[$i]' or ders5='$a[$i]' or ders6='$a[$i]' or ders7='$a[$i]'");


							while($getProduct=mysqli_fetch_assoc($productsQuery)){


									$ad=$getProduct['ad'];
									$soyad=$getProduct['soyad'];
									$ders1=$getProduct['ders1'];
									$ders2=$getProduct['ders2'];
									$ders3=$getProduct['ders3'];
									$ders4=$getProduct['ders4'];
									$ders5=$getProduct['ders5'];
									$ders6=$getProduct['ders6'];
									$ders7=$getProduct['ders7'];


									?>

									<tr>
									<td><?php echo " $ad ";  ?></td>
									</tr>
									<?php 

									
				
						}

					
					}


					?>

				

					<?php 

				}

 ?>

 </table>

<div style="margin-bottom: 30px;"></div>

</div>
</body>
</html>