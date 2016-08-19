<?php 
/**
  * Template Name: VIDEOS TEMPLATE
  */

$n = '3';
$n2 = '3';
?>


<?php get_header(); ?>

<style type="text/css">
	.bs-table 
	.dataTables_wrapper 
	.dataTables_paginate 
	.previous {
		float: left !important;
	}

	.bs-table 
	.dataTables_wrapper 
	.dataTables_paginate .next { 
		float: right !important;
	}
</style>

<div class="page animated fadein" id="page">
	<?php # ------- begin videos ------------------ ?>
	<div class="videos">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="bs-table">
					<table id="browse-search-table" class="" cellspacing="0" border="0" width="100%">
						<thead>
							<tr><th></th></tr>
						</thead>
						<tbody>
							<?php for ($i=0; $i < $n2 ; $i++): ?>
							<tr class="animated fadein">
								<td>
									<div class="vr-embed-vid">
										<div align="center" class="embed-responsive embed-responsive-16by9">
											<iframe src="" frameborder=0 width=510 height=200 scrolling=no></iframe>
										</div>
									</div><?php # /-- vr-embed-vid -- (for video embeded) ?>

									<hr class="rhc-hr">

									<div class="vr-des-vid">
										<h1 class="title">Combat Bulletin No. 66</h1>
										<p class="author"><i>produced by Army Pictorial Service Signal Corps</i></p>
										<p class="description">"World War II newsreel showing activities in China, service troops arriving in Manila, Japanese anti-submarine mortar. Third Fleet shelling Japan, and the sinking and subsequent explosion of the HMS Barham."</p>
										<i class="tag fa fa-tag" aria-hidden="true">&nbsp;<span><i>books, japan, history</i></span></i>
									</div><?php # /-- vr-des-vid -- (for video description) ?>

									<hr class="rhc-hr">

									<div class="vr-det-vid">
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>CREATOR:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>DATE:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>RUN TIME:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>SOURCE:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>LANGUAGE:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>SUBTITLES:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>COLLECTION:</label></div>
											<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>NOTES:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKD</p></div>
											</div>
										</div>
										<div class="vrdv-group">
											<div class="row">
												<div class="col-lg-2 col-md-2  col-sm-6 col-xs-6 no-padding"><label>CITATION:</label></div>
												<div class="col-lg-10 col-md-10 col-sm-6 col-xs-6 no-padding"><p>ASDASKDKAJSKDJKAJSKDasdasjd akjskdkajksdjkajksdjkajksdjas dkajskdjaksjdkjaksjdkjaksjdka dsaksjdkajskdjkajsdkjaksjdkajskdjkasjdkas aksjdkajskdjkajsdkjaksdjkajskdjaksjdkjaksda akdsjkajskdjaksjdkajskdjkajsd</p>
												</div>
											</div>
										</div>
									</div>
									<?php # /-- vr-det-vid -- (for video details) ?>

									<hr class="rhc-hr">
								</td>
							</tr>
							<?php endfor; ?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div><?php # /-- videos -- ?>
	<?php # --------- end videos ------------------ ?>


	<?php # ------- begin suggested content ------- ?>
	<div class="suggtd-content">
		<div class="container">
			<div class="row">
  			<div class="col-lg-12">
  				<p class="header">SUGGESTED CONTENT</p>
  			</div>
  		</div>
		</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
     <div class="carousel-inner" role="listbox">
        <div class="item active">
        	<div class="container">
						<div class="row">
							<?php for ($i=0; $i < $n ; $i++): ?>
							<div class="col-md-4 col-sm-12">
			          <div class="panel panel-default text-center panel-collections">
			          	<div class="panel-heading pc-heading">
			              <span>
			                <img class="img-responsive" src="http://localhost/rhc/wp-content/themes/rhctheme/images/collection-1.jpg">
			              </span>
			            </div>

			            <div class="panel-body pc-body">
			              <p class="pcb-header">Images</p>
			              <p class="pcb-content">
			              Lorem ipsum dolor sit amet, consectetur
			              adipiscing elit, sed do eiusmod tempor incididunt
			              ut labore et dolore magna aliqua. Ut cnim ad
			              minim venian, quis nostrud exercitation ullamco
			              laboris nisi ut aliquip ex sa commodo consequat.</p>
			              <div class="pcb-link">
			              	<a href="http://localhost/rhc/the-collections/images" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
			              </div>
			            </div>
			          </div>
			        </div>
			      	<?php endfor;?>
						</div>
					</div>
        </div>

        <div class="item">
        	<div class="container">
						<div class="row">
							<?php for ($i=0; $i < $n ; $i++): ?>
							<div class="col-md-4 col-sm-12">
			          <div class="panel panel-default text-center panel-collections">
			          	<div class="panel-heading pc-heading">
			              <span>
			                <img class="img-responsive" src="http://localhost/rhc/wp-content/themes/rhctheme/images/collection-1.jpg">
			              </span>
			            </div>

			            <div class="panel-body pc-body">
			              <p class="pcb-header">Images</p>
			              <p class="pcb-content">
			              Lorem ipsum dolor sit amet, consectetur
			              adipiscing elit, sed do eiusmod tempor incididunt
			              ut labore et dolore magna aliqua. Ut cnim ad
			              minim venian, quis nostrud exercitation ullamco
			              laboris nisi ut aliquip ex sa commodo consequat.</p>
			              <div class="pcb-link">
			              	<a href="http://localhost/rhc/the-collections/images" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
			              </div>
			            </div>
			          </div>
			        </div>
			      	<?php endfor;?>
						</div>
					</div>
        </div>

        <div class="item">
          <div class="container">
						<div class="row">
							<?php for ($i=0; $i < $n ; $i++): ?>
							<div class="col-md-4 col-sm-12">
			          <div class="panel panel-default text-center panel-collections">
			          	<div class="panel-heading pc-heading">
			              <span>
			                <img class="img-responsive" src="http://localhost/rhc/wp-content/themes/rhctheme/images/collection-1.jpg">
			              </span>
			            </div>

			            <div class="panel-body pc-body">
			              <p class="pcb-header">Images</p>
			              <p class="pcb-content">
			              Lorem ipsum dolor sit amet, consectetur
			              adipiscing elit, sed do eiusmod tempor incididunt
			              ut labore et dolore magna aliqua. Ut cnim ad
			              minim venian, quis nostrud exercitation ullamco
			              laboris nisi ut aliquip ex sa commodo consequat.</p>
			              <div class="pcb-link">
			              	<a href="http://localhost/rhc/the-collections/images" class="pcb-link">View collection <i class="fa fa-arrow-right"></i></a>
			              </div>
			            </div>
			          </div>
			        </div>
			      	<?php endfor;?>
						</div>
					</div>
        </div>
       
      </div>

      <?php // -- begin left button -- ?>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <?php // -- end left button -- ?>

      <?php // -- begin right button -- ?>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <?php // --  end right button -- ?>
    </div>
	</div>
	<?php # --------- end suggested content ------- ?>
</div>
<?php get_footer(); ?>

<style type="text/css">

</style>

<script type="text/javascript">
	$(document).ready(function() {
	  $('#browse-search-table').DataTable({
	    bFilter: false, 
	    bInfo: false,
	    bLengthChange: false,
	    columnDefs: [{
	      targets: "_all",
	      orderable: false
	    }],
	    pagingType: "simple",
	    pageLength: 1
	  });
	});
</script>