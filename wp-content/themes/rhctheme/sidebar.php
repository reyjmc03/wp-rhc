<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sparkling
 */
?>
<style type="text/css">
	.refine-filters .rf-header {
		background-color: #e2e2e2;
		color: #666666;
		font-weight: bolder;
		padding-top: 8px;
		padding-bottom: 8px;
		padding-left: 10px;
	}
	.refine-filters .rf-header .rfh-p {
		margin: 0 0 0px !important;
		font-size: 20px;
	}

	.refine-filters .rf-body {
		margin-top: 15px;
		margin-left: 2px;
		margin-right: 2px;
		margin-bottom: 20px;
	}

	.refine-filters .rf-body .rfb-p {
		margin: 0 0 0px !important;
		font-size: 18px;
		background-color: #f5f3f3;
		color: #666666;
		padding-left: 15px;
		padding-top: 5px;
		padding-bottom: 5px;
		font-weight: bold;
	}

	.refine-filters .rf-body .rfb-rd {
		margin-top: 10px;
		margin-left: 10px;
		font-size: 16px;
		line-height: 150%;
	}

	.refine-filters .rf-body .rfb-rd label {
		font-weight: normal !important;

	}

	.refine-filters .btn-rhc {
    width: 130px !important;
    height: 35px !important;
	}
</style>
<div class="col-lg-3" id="sidebar">
	<div class="refine-filters">
		<?php if (is_page('browse')): ?>
			<div class="rf-header">
				<p class="rfh-p">FILTERS</p>
			</div>
			<?php dynamic_sidebar( 'left-sidebar-widget' ); ?>
			<div class="rf-body">
				<div class="rf-body">
					<p class="rfb-p">Availability</p>
					<div class="rfb-rd">
				    <ul class="list-unstyled">
				      <li><label><input type="checkbox" value="">&nbsp;View online</label></li>
				      <li><label><input type="checkbox" value="">&nbsp;Hardcopy only</label></li>
				      <li><label><input type="checkbox" value="">&nbsp;Free</label></li>
				      <li><label><input type="checkbox" value="">&nbsp;Available for purchase</label></li>
				    </ul>
					</div>
					<br>
					<p class="rfb-p">Tags</p>
					<div class="rfb-rd">
						<ul class="list-unstyled">
							<li><label><input type="checkbox" value="">&nbsp;General correspondence</label></li>
							<li><label><input type="checkbox" value="">&nbsp;Reminiscences</label></li>
							<li><label><input type="checkbox" value="">&nbsp;Generals</label></li>
							<li><label><input type="checkbox" value="">&nbsp;Philippines</label></li>
							<li><label><input type="checkbox" value="">&nbsp;Prisoners of war</label></li>
							<li><label><input type="checkbox" value="">&nbsp;Personal narratives</label></li>
							<li><label><input type="checkbox" value="">&nbsp;American</label></li>
							<li><label><input type="checkbox" value="">&nbsp;US Army Publications</label></li>
				    </ul>
					</div>
				</div>
			</div>
			<button id="btnRefine" name="btnRefine" type="button" class="btn btn-rhc pull-right"><label>REFINE</label></button>
		<?php else: ?>	
			<div class="rf-header">
				<p class="rfh-p">FILTERS</p>
			</div>
			<div class="rf-body">
				<div class="rf-body">
					<p class="rfb-p">Format</p>
					<div class="rfb-rd">
				    <ul class="list-unstyled">
				      <li><label><input type="checkbox" id="chkPdf"   name="chkPdf"   value="PDF">&nbsp;PDF</label></li>
				      <li><label><input type="checkbox" id="chkVideo" name="chkVideo" value="Video">&nbsp;Video</label></li>
				      <li><label><input type="checkbox" id="chkImage" name="chkImage" value="Image">&nbsp;Image</label></li>
				      <li><label><input type="checkbox" id="chkOnlineResource" name="chkOnlineResource" value="Online Resource">&nbsp;Online Resource</label></li>
				    </ul>
					</div>
					<br>
					<p class="rfb-p">Collection</p>
					<div class="rfb-rd">
						<ul class="list-unstyled">
							<li><label><input type="checkbox" id="chkNewsletters" name="chkNewsletters" value="Newsletters">&nbsp;Newsletters</label></li>
							<li><label><input type="checkbox" id="chkImages" name="chkImages" value="Images">&nbsp;Images</label></li>
							<li><label><input type="checkbox" id="chkVideoFiles" name="chkVideoFiles" value="Video files">&nbsp;Video files</label></li>
							<li><label><input type="checkbox" id="chkDvds" name="chkDvds" value="DVDs">&nbsp;DVD's</label></li>
							<li><label><input type="checkbox" id="chkTexts" name="chkTexts" value="Texts">&nbsp;Texts</label></li>
							<li><label><input type="checkbox" id="chkArticles" name="chkArticles" value="Articles">&nbsp;Articles</label></li>
							<li><label><input type="checkbox" id="chkOnlineResources" name="chkOnlineResources" value="Online Resources">&nbsp;Online Resources</label></li>
							<li><label><input type="checkbox" id="chkOnlineVideos" name="chkOnlineVideos" value="Online Videos">&nbsp;Online Videos</label></li>
							<li><label><input type="checkbox" id="chkUSArmyPublications" name="chkUSArmyPublications" value="US Army Publications">&nbsp;US Army Publications</label></li>
							<li><label><input type="checkbox" id="chkResearchedAccounts" name="chkResearchedAccounts" value="Researched Accounts">&nbsp;Researched Accounts</label></li>
				    </ul>
					</div>
				</div>
			</div>
			<button id="btnRefine" name="btnRefine" type="button" class="btn btn-rhc pull-right"><label>REFINE</label></button>
		<?php endif; ?>
	</div>
</div>