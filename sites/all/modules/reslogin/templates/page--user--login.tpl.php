<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, user-scalable=no" /> 
<div class="page-gray-back login_part">
	<div id="page" class="page">
		<div id="auth_box" class="login">
		  <div id="top_part">
		    <h1 id="the_logo">
		      <a href="<?php print url('<front>'); ?>">
		        <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
		      </a>
		    </h1>
		  </div>
		
		  <div id="middle_part">
		    <h2 class="title"><?php print $title; ?></h2>
		
		    <?php print $messages; ?>
		    
		    <?php print render($page['content']); ?>
		  </div>
		
		  <div id="bottom_part">
		  	<div class="password_link">
		      <?php print l(t('Forgot your password?'), 'user/password'); ?>
		    </div>
		    
		  	<?php if (variable_get('user_register')): ?>
		    <div class="register_link">
		      <?php print l(t('Register a new account'), 'user/register'); ?>
		    </div>
		    <?php endif; ?>
		    <div class="back_link">
		      <a href="<?php print url('<front>'); ?>">&larr; <?php print t('Back'); ?> <?php print $site_name; ?></a>
		    </div>
		  </div> 
		</div>		
	</div>
	
</div>