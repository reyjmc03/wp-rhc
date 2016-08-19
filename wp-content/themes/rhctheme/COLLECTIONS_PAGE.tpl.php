<?php 
/**
  * Template Name: COLLECTIONS TEMPLATE
  */
?>

<style type="text/css">

/* recently added in collections page*/
.page .tc-recently-added {
	background-color: #e2e2e2 !important;
}

.page .tc-recently-added .header {
  height: auto !important;
  margin-top: 20px;
  margin-bottom: 40px;
  text-align: center;
  color: #666666;
  font-weight: bold;
  font-size: 21px;
}

.page .the-collections {
	margin-top: 20px;
	margin-bottom: 40px;
}
</style>

<?php get_header(); ?>
<div class="page animated fadein" id="page">
	<?php # ---------------------- begin recently added ------------------- ?>
  <div class="tc-recently-added">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="header">RECENTLY ADDED</p>
        </div>
      </div>
    </div>
  </div>
 	<?php # ------------------------ end recently added ------------------- ?>

 	<div class="the-collections">
 		<div class="container">
 			<div class="row">
 				<?php get_sidebar(); ?>
 				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
 					aksdkalkdslaklsdka
 					sdkaksdlkkalskdlkalskdlkalsd
 					asdla'slda;lskdlaskdjkasd
 					asdkasjkdjkajskdas
 					
 				</div>
 			</div>
 		</div>
 	</div>

 </div>
<?php get_footer(); ?>