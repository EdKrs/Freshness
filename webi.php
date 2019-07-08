
	<?php 
	include("header.php");
	if(!isset($_SESSION['user_id'])){
		header("Location: login.php");
	}
	$stmt = $pdo->query("SELECT * FROM gallery");
   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count = count($results);
	?>

	<div class="flex bordt">
			<img alt="SLIDE" src="compjuter.png">
		
			
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
					<div class="item active">
					<div>
					<?php
   echo '<img src="data:image/png;base64,'.base64_encode($results[0]['imageData']).'"/>';
   echo '<h1>'.$results[0]['title'].'</h1>';
   echo '<p>'.$results[0]['description'].'</p>';
  
  ?>
					</div>     
			</div>
	  <?php for($i=1;$i<$count;$i++){
	echo'<div class="item">
	<div>
    <img src="data:image/png;base64,'.base64_encode($results[$i]["imageData"]).'" />
     <h1>'.$results[$i]['title'].'</h1>
     <p>'.$results[$i]['description'].'</p>
  </div>
</div> ';
  } ?>
      
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
		</div>
		 <div class="flex bordt grid3">
			  <div>
					<img src="img300x160.png" alt='' class='img300'>
					<h3>YOUR TITLE HERE</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						
					<button class='btn btn-primary'>Read more ></button>
				</div>
				<div>
				<img src="img300x160.png" alt='' class='img300'>
					<h3>YOUR TITLE HERE</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						
					<button class='btn btn-primary'>Read more ></button>
				</div>
				<div>
				<img src="img300x160.png" alt='' class='img300'>
					<h3>YOUR TITLE HERE</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						
					<button class='btn btn-primary'>Read more ></button>
				</div>
			
</div>
<div class = 'bordt'>
<h2>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor”</h2>

<div class = 'grid3 gridr2'>

	<div class='flex'>
	<img src ='img80x80.png' alt=''>
	<div> <h5>Title Goes Here</h5>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error illum nisi dolorem delectus harum.</p>
    </div>	
	</div>
	<div class='flex'>
	<img src ='img80x80.png' alt=''>
	<div> <h5>Title Goes Here</h5>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error illum nisi dolorem delectus harum.</p>
    </div>	
	</div>
	<div class='flex'>
	<img src ='img80x80.png' alt=''>
	<div> <h5>Title Goes Here</h5>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error illum nisi dolorem delectus harum.</p>
    </div>	
	</div>
	<div class='flex'>
	<img src ='img80x80.png' alt=''>
	<div> <h5>Title Goes Here</h5>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error illum nisi dolorem delectus harum.</p>
    </div>	
	</div>
	<div class='flex'>
	<img src ='img80x80.png' alt=''>
	<div> <h5>Title Goes Here</h5>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error illum nisi dolorem delectus harum.</p>
    </div>	
	</div>
	<div class='flex'>
	<img src ='img80x80.png' alt=''>
	<div> <h5>Title Goes Here</h5>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error illum nisi dolorem delectus harum.</p>
    </div>	
    </div>
</div>

</div>
	<?php
	include("footer.php");
	?>