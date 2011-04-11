<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>
	<div class="wrap">
		<?php print $skipnav ?>
		
		<div id="header" class="clearfix region">
			<?php if ($site_name): ?>
				<div id="logo">
					<h1 class="site-name"><?php print $site_name ?></h1>
				</div>
			<?php endif; ?>
			
			<?php if (isset($primary_links)) : ?>
				<div id="navigation">
      		<?php print theme('links', $primary_links, array('class' => 'links primary-menu')) ?>
      	</div>
    	<?php endif; ?>
			
			<?php if ($search_box): ?>
				<div id="search-box" class="block block-theme">
					<?php print $search_box ?>
				</div>
			<?php endif; ?>
		</div>	
	
  <?php if ($help || ($show_messages && $messages)): ?>
    <div id="console" class="region clearfix">
      <?php print $help; ?>
      <?php if ($show_messages && $messages): print $messages; endif; ?>
    </div>
  <?php endif; ?>

	<div id="page" class="clearfix region">
		<div id="main" class="article c6">
			<div id="content">
				<?php print $content ?>
			</div>
		</div>
		
		<?php if ($left): ?>
      <div id="left" class="aside c2">
      	<?php print $left ?>
      </div>
    <?php endif; ?>	
    
    <?php if ($right): ?>
      <div id="right" class='aside c2 last'>
      	<?php print $right ?>
      </div>
    <?php endif; ?>		
    <div class="clear"></div>
    <?php if ($cloumn_left): ?>
      <div id="cloumn_left" class="article c4">
      	<?php print $cloumn_left ?>
      </div>
    <?php endif; ?>
    
    <?php if ($cloumn_middle): ?>
      <div id="cloumn_middle" class="article c4">
      	<?php print $cloumn_right ?>
      </div>
    <?php endif; ?>
    
    <?php if ($cloumn_right): ?>
      <div id="cloumn_right" class="article c4 last">
      	<?php print $cloumn_right ?>
      </div>
    <?php endif; ?>
	</div>	
	 
</div>

<div id="footer" class="region clearfix">
	<div class="wrap">
    <?php print $feed_icons ?>
    <?php print $footer ?>
    <?php print $footer_message ?>
  </div>  
</div>
  <?php print $scripts ?>
  <?php print $closure ?>

  </body>
</html>
