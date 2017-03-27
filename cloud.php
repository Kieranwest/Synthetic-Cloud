<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php' ?>
</head>
<body>
    
    <!--Start Grid-->
    <div style="margin-top: 50px;" class="container">
    	
	    <div class="row wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">
	    	
	    	<div class="col-md-6">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/intelCloud.svg">
	    			
	    			<h2>Intel Powered</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						2x Intel Xeon E5
    						<br>
    						64GB RAM
    						<br>
    						4TB RAID 5 HDD Storage
    						<br>
    						1Gbps Network
    						<br>
    					</p>
    					
    					<button class="btn btn-primary" onClick="buyNow()">Buy Now</button>
    					
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	
	    	<div class="col-md-6">
	    		
	    		<div class="thumbnail">
	    			
	    			<img style="padding-top: 0; margin-top: 0;" width="100px;" src="images/amdCloud.svg">
	    			
	    			<h2>AMD Fueled</h2>
	    			<hr>
	    			
	    			<div class="caption">
    					<p class="serverSpecs">
    						2x AMD Opterons
    						<br>
    						64GB RAM
    						<br>
    						4TB RAID 5 HDD Storage
    						<br>
    						1Gbps Network
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
