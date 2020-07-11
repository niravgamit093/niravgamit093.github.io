<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'link/links.php'; ?>
	<?php  include 'css/style.php'; ?>
</head>
<body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
      </li>


       <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>

    </ul>

  </div>
</nav>
  

 
<section class="corona_update container-fluid">
  <div class=" my-3 ">
  <h3 class="text-center text-uppercase"> COVID-19 LIVE UPDATES OF INDIA</h3>
  </div>
  <div class="table-resposive">

    <table class="table table-bordered table-stripped text-center">
      <tr>
        <th>Country</th>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>    



<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=1;
while($i < $statescount){

?>
<tr>
  <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
  <td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
  <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
  <td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
  <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
  <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td> 
</tr>

<?php
  $i++;
}


?>

      

    </table>
    
  </div>    








<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>


<!-- /////////////////// fotter ////////////// -->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by shiv kataria and nirav gamit</p>
  </div>
</footer>


<script type="text/javascript">


  
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>

</body>
</html>


