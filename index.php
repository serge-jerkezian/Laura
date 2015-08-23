<?php require_once("header.php");?>


    	<!-- /.item --><!-- Start Content Block 1-3 -->
	<section id="content-1-3" class="content-block content-1-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="underlined-title">
						<div class="editContent">
			        		<h1>Every service under one roof</h1>
						</div>
						<hr>
		        	</div>
        						
					<div class="services-wrapper">
						<div class="col-md-4">
							<div class="icon bg-crete">
								<span class="fa fa-laptop"></span>
							</div>
							<div class="editContent">
								<h4>Digital Design</h4>
							</div>
							<div class="editContent">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon bg-finn">
								<span class="fa fa-code"></span>
							</div>
							<div class="editContent">
								<h4>Web Development</h4>
							</div>
							<div class="editContent">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon bg-sunflower">
								<span class="fa fa-rocket"></span>
							</div>
							<div class="editContent">
								<h4>Creative Direction</h4>
							</div>
							<div class="editContent">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
    <!--// END Content Block 1-3 -->


	<script>
	$(function(){
		
		if( $('#nivoSlider').size() > 0 ) {
		
	    	$('#nivoSlider').nivoSlider({
	    		effect: 'random',
				pauseTime: 5000
	    	});
		
		}
		
	})
	</script>


<?php require_once("footer.php");?>