<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
     

/* Extra styles for the cancel button */

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50% ; /* Could be more or less, depending on screen size */
  height:fixed%;
  overflow: auto;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}


  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


    </style>
</head>
<body>
   

<button onclick="document.getElementById('lo01').style.display='block'">Click me</button>
<div id="lo01" class="modal">
  
  <form class="modal-content animate"  action="/admin" method="post">
    
    <div class="imgcontainer">
      
      <span onclick="document.getElementById('lo01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <div>
       
            
    <?php 
    $imgs= array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg");
    $N=1;
    $nub= count($imgs);
   
    foreach($imgs as $value){

    // echo"<th>";
  
    echo"<img src='imgs/$value'>";

    //echo"</th>";
    if($N==3 || $N==6 ||$N==9)  {
    echo"<br/>";
     } 
    $N++;
     
        
    
    }
    echo"</table>";
    echo "";
    echo  "<h1>Hello</h1>";
   
    
    ?>
      </div>
      <br>
    
    </div>


</body>
</html>