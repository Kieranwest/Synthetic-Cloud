<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php' ?>
</head>
<body>
    
    <!--Start Grid-->
    <div style="margin-top: 50px;" class="container">
    	
	    <div class="row wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">
	    	
	    	<div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/server.svg">
	    			
	    			<h2>Stratus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						1 vCore
    						<br>
    						512MB RAM
    						<br>
    						20GB SSD Storage
    						<br>
    						100Mbps Network
    						<br>
    						Weekly Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    	<div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/server.svg">
	    			
	    			<h2>Cumulus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						1 vCore
    						<br>
    						2GB RAM
    						<br>
    						80GB SSD Storage
    						<br>
    						100Mbps Network
    						<br>
    						Weekly Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    <div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/server.svg">
	    			
	    			<h2>Nimbostratus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						2 vCore
    						<br>
    						2GB RAM
    						<br>
    						160GB HDD Storage
    						<br>
    						100Mbps Network
    						<br>
    						Weekly Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    	<div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/server.svg">
	    			
	    			<h2>Cirrocumulus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						2 vCore
    						<br>
    						4GB RAM
    						<br>
    						320GB HDD Storage
    						<br>
    						100Mbps Network
    						<br>
    						Weekly Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    </div>
	    
	    <div style="margin: 0; padding-top: 0;" class="jumbotron wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">
	    		<h2 style="margin: 0; padding: 0;">Need More Power?</h2>
	    		<a href="dedicated.php"><h3 id="dedicatedServers" style="margin-top: 0;">View our dedicated servers!</h3></a>
	    		<br>
	    		<br>
	    </div>
    </div>
    
    <script>
    	function buyNow(){
    		alert("Function not added yet!");
    	}
    	
    	document.getElementById("dedicatedServers").addEventListener("mouseover", dedicatedServersOn);
		document.getElementById("dedicatedServers").addEventListener("mouseout", dedicatedServersOff);
    	
    	function dedicatedServersOn(){
    		document.getElementById("dedicatedServers").style.color = "lightblue";
    	}
    	
    	function dedicatedServersOff(){
    		document.getElementById("dedicatedServers").style.color = "white";
    	}
    </script>
    
    <?php include 'footer.php' ?>
    
    
</body>
</html>
