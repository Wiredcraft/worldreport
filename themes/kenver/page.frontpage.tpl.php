<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>

  	<div id="header" class="region region-header">
  		<div class="container">
  			
  			<?php if(!empty($logo)): ?>
        	<div id="logo">
	        	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
	          	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	        	</a>
        	</div>
      	<?php endif; ?>
      	
      	<?php if($site_name || $site_slogan): ?>
	        <div id="slogan">
	          <?php if($site_name): ?>
	            <h1><?php print $site_name; ?></h1>
	          <?php endif; ?>
	          <?php if($site_slogan): ?>
	            <p><?php print $site_slogan; ?></p>
	          <?php endif; ?>  
	        </div>
     		<?php endif; ?>
     		
     		<?php print $header; ?>
     		
     		<?php if (isset($primary_links)) : ?>
	      	<div class="navigation">
	      		<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
	      	</div>
	    	<?php endif; ?>
     		
     		 
     
  		</div>	
  	</div>	
  	
  	<div id="frontpage" class="region region-page">
  		<div class="container">
	    		<?php if ($title): ?>
	    			<h2 class='page-title'>
	    				<?php print $title ?>
	    			</h2>
	    		<?php endif; ?>
   		
	    		<?php if ($left): ?>
	     		 <div id='left' class='clear-block aside region-left'>
	     		 	 <?php print $left ?>
	     		 </div>
	    		<?php endif; ?>
	    		
	  			<div id="main" class="article region-main">
	  				<?php if ($help || ($show_messages && $messages)): ?>
		          <div id='console'>
		            <?php print $help; ?>
		            <?php if ($show_messages && $messages): print $messages; endif; ?>
		          </div>
	        	<?php endif; ?>
	        	
	        	<?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
	        	
	        	<?php if ($tabs) print $tabs ?>
	        		
	  				<div id='content' class='clear-block'>
	  					<?php print $content ?>
	  				</div>
	  			</div>	
	  			
	  			<?php if ($right): ?>
	     		 <div id='right' class='clear-block aside region-right'>
	     		 		<?php print $right ?>
	     		 </div>
	   		 <?php endif; ?>
  		</div>	
  	</div>	
  	
  	<div id="footer" class="region region-footer">
  		<div class="container">
  			<?php print $footer ?>
    		<?php print $footer_message ?>
  		</div>	
  	</div>	
  <?php print $scripts ?>
  <?php print $closure ?>
  </body>
</html>    