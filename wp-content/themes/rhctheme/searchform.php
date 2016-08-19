<?php
# Programmer: Jose Mari Caballa Rey
# 
# Date Created: 03 July 2016
# Description: To create a cutomized theme for the RODERICK HALL COLLECTION website.
# File Type: PHP File
# File Name: searchform.php
# Location: ../rhctheme/searchform.php
?>



<div class="trans-bg">
  <form class="search-form" id="searchform" method="get" action="<?php bloginfo('home'); ?>" >
    <div class="input-group">
      <span class="input-group-btn">
        <input type="text" class="form-control" placeholder="Search for..." name="s" id="s">
        <button type="submit" class="btn btn-rhc-search" name="submit" id="searchsubmit" value="<?php echo attribute_escape(__('Search')); ?>">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </span>
    </div>
    <center>
      <label class="search-label" for="s"><?php _e( "Can't find it? Use ", 'rhctheme' ); ?><a href="<?php bloginfo('home'); ?>/advance-search">advance search</a></label>
    </center>
  </form>
</div>


