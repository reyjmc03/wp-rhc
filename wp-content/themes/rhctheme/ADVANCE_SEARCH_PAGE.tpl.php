<?php 
/**
  * Template Name: ADVANCE SEARCH TEMPLATE
  */
?>
<?php get_header(); ?>
<div class="page animated fadein" id="page">
	<center><h3><strong><?php the_title(); ?></strong></h3></center>
	<br>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php # -------------- begin word / phrase search -------------- ?>
				<div class="panel panel-rhc panel-default ">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><b>WORD / PHRASE </b></div>
				  <div class="panel-body">
				  		<form class="form-horizontal form-horizontal-rhc">
				  			<!-- error notification -->
				  			<div id="WordNotification" name="WordNotification"></div>
				  			<!-- input word / phrase -->
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-4 control-label" style="font-size: 18px;">Exact word / phrase:</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="txtEWP" name="txtEWP"" placeholder="please type the words or phrases">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Contains the words:</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="txtCTW" name="txtCTW" placeholder="please type the words or phrases">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Ignore the words:</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="txtITW" name="txtITW" placeholder="please type the words or phrases">
							    </div>
							  </div>
							</form>
							<br>
							<button id="btnWordSearch" name="btnWordSearch" type="button" class="btn btn-rhc pull-right"><b>SEARCH</b></button>
				  </div>
				</div>
				<?php # --------------   end word / phrase search -------------- ?>


				<?php # -------------- begin format search -------------- ?>
				<div class="panel panel-rhc panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><b>FORMAT</b></div>
				  <div class="panel-body">
				  		<form class="form-horizontal form-horizontal-rhc">
				  			<!-- error notification -->
				  			<div id="FormatNotification" name="FormatNotification"></div>

								<!-- format selection -->
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-4 control-label" style="font-size: 18px;">PDF:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Video:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Image:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Online resource:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							</form>
							<br>
							<button id="btnFormatSearch" name="btnFormatSearch" type="button" class="btn btn-rhc pull-right"><b>SEARCH</b></button>
				  </div>
				</div>
				<?php # --------------   end format search -------------- ?>


				<?php # -------------- begin collection search -------------- ?>
				<div class="panel panel-rhc panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><b>COLLECTION</b></div>
				  <div class="panel-body">
				  		<form class="form-horizontal form-horizontal-rhc">
				  			<!-- error notification -->
				  			<div id="CollectionNotification" name="CollectionNotification"></div>

								<!-- format selection -->
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-4 control-label" style="font-size: 18px;">Newsletters:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Images:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Videos:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">DVDs:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Texts:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Articles:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Online resources:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">US Army publications:</label>
							    <div class="col-sm-8">
							      <input type="checkbox" value="" style="width:35px; height:35px;">
							    </div>
							  </div>
							</form>
				  		<br>
							<button id="btnCollectionSearch" name="btnCollectionSearch" type="button" class="btn btn-rhc pull-right"><b>SEARCH</b></button>
				  </div>
				</div>
				<?php # --------------   end collection search -------------- ?>
				

				<?php # -------------- begin date search -------------- ?>
				<div class="panel panel-rhc panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><b>DATE</b></div>
				  <div class="panel-body">
				  		<form class="form-horizontal form-horizontal-rhc">
				  			<!-- error notification -->
				  			<div id="DateNotification" name="DateNotification"></div>

								<!-- input date format -->
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-4 control-label" style="font-size: 18px;">Search specific date:</label>
							    <div class="col-sm-4">
							       <div class="form-group">
						            <div class='input-group date' id="DatePicker1" name="DatePicker1">
						                <input type='text' class="form-control" />
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar">
						                    </span>
						                </span>
						            </div>
						        </div>
							    </div>
							  </div>
							  <br>
							  <br>
							  <!-- date from -->
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Date from:</label>
							    <div class="col-sm-4">
							      <div class="form-group">
						            <div class='input-group date' id="DatePicker2" name="DatePicker2">
						                <input type='text' class="form-control" />
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar">
						                    </span>
						                </span>
						            </div>
						        </div>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-4 control-label" style="font-size: 18px;">Date to:</label>
							    <div class="col-sm-4">
							      <div class="form-group">
						            <div class='input-group date' id="DatePicker3" name="DatePicker3">
						                <input type='text' class="form-control" />
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar">
						                    </span>
						                </span>
						            </div>
						        </div>
							    </div>
							  </div>
							</form>
				  		<br>
							<button id="btnDateSearch" name="btnDateSearch" type="button" class="btn btn-rhc pull-right"><b>SEARCH</b></button>
				  </div>
				</div>
				<?php # --------------   end date search -------------- ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>