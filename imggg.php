<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cards Gallery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="cards-gallery.css">
</head>
<body>
   <section class="gallery-block cards-gallery">
	    <div class="container">
	        <div class="heading">
	          <h2>Cards Gallery</h2>
	        </div>
	        <div class="row">

          <?php   $imgs= array("image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg","image6.jpg","image7.jpg","image8.jpg","image9.jpg");
  
  $nub= count($imgs);
  for($i = 0; $i<$nub ;$i++){


      echo" <div class='col-md-6 col-lg-4'>";
      echo" <div class='card border-0 transform-on-hover'>" ;
      echo"<a class='lightbox' href='img/image1.jpg'>";
      echo"<img src='img/$imgs[$i]' alt='Card Image' class='card-img-top'>";
      echo"	</a>";
      echo"	</div>";
      echo"	</div>";

  }
   ?>
	            
	        </div>
	    </div>
    </section>
   
   
</body>
</html>


