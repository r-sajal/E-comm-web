<!DOCTYPE html>
<html>
<head>
	<title>
		E-commerce Website
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Bootstrap file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel ="stylesheet" href="video4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	
    <style>

.topnav {
  overflow: hidden;
  background-color: rgba(0,0,0,0.8);
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  background-color: orange;
  color: white;
 
}

.topnav a.active {
  background-color: orange;
  color: white;
  border-radius:15%;
  margin:4px 2px 4px 5px;
  padding: 10px 10px 10px 10px;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
 
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: orange;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: orange;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.Center img{ 
width:60px; 
height:60px; 
position: fixed; 
left: 50%; 
margin-top: 0px;
    border-radius: 100%;
   padding: 2px 0px 8px;

 
    cursor: pointer;
} 
</style>

</head>

	

<body>

<div class="topnav">
    
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
    <div class ="Center"><img src="images/1.png" id = "icon_shift"></div>
  <div class="search-container">
    <form action="#" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
    </div>


<section class="header">

	<div class="side-menu" id="side-menu">

		<ul>
			<li> Men's Fashion <i class="fa fa-angle-right"></i>

				<ul>
					<li>T-shirts</li>
					<li>Shirts</li>
					<li>Jeans</li>
					<li>sox</li>
				</ul>

			</li>
			<li> Women's Fashion <i class="fa fa-angle-right"></i>

				<ul>
					<li>Tops</li>
					<li>Shirts</li>
					<li>Skirts</li>
					<li>sox</li>
				</ul>

			</li>
			<li> Accessories <i class="fa fa-angle-right"></i>

				<ul>
					<li>Watches</li>
					<li>Laptops</li>
					<li>Mobiles</li>
					<li>Goggles</li>
				</ul>

			</li>
		</ul>
		
	</div>

	<div class="slider">

		<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="images/12.jpg" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
      				<img src="images/13.jpg" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
      				<img src="images/14.jpg" class="d-block w-100" alt="...">
    			</div>
  			</div>

  			<ol class="carousel-indicators">
    			<li data-target="#slider" data-slide-to="0" class="active"></li>
    			<li data-target="#slider" data-slide-to="1"></li>
    			<li data-target="#slider" data-slide-to="2"></li>
  			</ol>
		</div>
	</div>
	
</section>

<section class= "featured-categories">
    <div class = "container">
    <div class ="row">
        <div class="col-md-4">
            <img src="2.jpg">
        </div>
        <div class="col-md-4">
            <img src="3.jpg">
		</div>
		<div class="col-md-4">
            <img src="1.jpg">
        </div>
    </div>
        
    </div>
</section>

<section class ="on-sale">
    <div class ="container">
        <div class = "title-box"><h2>On Sale</h2>
        </div>
        <div class ="row1">
            <div class="col-md-3">
            <div class = "product-top"><img src ="1.jpg">
                <div class = "overlay-right">
                <button type ="button" class = "btn btn-secondary" title = "Quick Shop"><i class = "fa fa-eye"></i></button>
                <button type ="button" class = "btn btn-secondary" title = "Add To Wishlist"><i class = "fa fa-heart-o"></i></button>
                <button type ="button" class = "btn btn-secondary" title = "Add To Cart"><i class = "fa fa-shopping-cart"></i></button></div>
                </div>
                <div class = "product-bottom text-center">
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star-half-o"></i>
                    <h3>name </h3>
                    <h5>Price</h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<script>
 
    $("#icon_shift").click(function() {
  window.location.href = 'ecomm.php'
});
	
	function openmenu() {

		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}

	function closemenu() {
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}

</script>



</body>
</html>