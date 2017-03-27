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
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/dedicatedServer.svg">
	    			
	    			<h2>Stratocumulus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						4 Cores
    						<br>
    						8GB RAM
    						<br>
    						500GB HDD Storage
    						<br>
    						500Mbps Network
    						<br>
    						Daily Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    	<div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/dedicatedServer.svg">
	    			
	    			<h2>Cumulonimbus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						4 Cores
    						<br>
    						8GB RAM
    						<br>
    						1TB HDD Storage
    						<br>
    						500Mbps Network
    						<br>
    						Daily Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    <div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/dedicatedServer.svg">
	    			
	    			<h2>Altostratus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						8 Cores
    						<br>
    						16GB RAM
    						<br>
    						1TB HDD Storage
    						<br>
    						500Mbps Network
    						<br>
    						Daily Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    	<div class="col-md-3">
	    		
	    		<div class="thumbnail">
	    			
			    	<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/dedicatedServer.svg">
	    			
	    			<h2>Cirrostratus</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						16 Cores
    						<br>
    						32GB RAM
    						<br>
    						2TB HDD Storage
    						<br>
    						500Mbps Network
    						<br>
    						Daily Backups
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
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
