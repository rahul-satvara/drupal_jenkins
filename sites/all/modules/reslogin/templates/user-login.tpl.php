<?php
 //print the variables if needed to allow for individual field theming or breaking them up.
/*print '<pre>';
print_r($variables);
print '</pre>';*/
?>
<style>
#messages{padding:0px;}
.page-user.not-logged-in .nav-boxes .row .yes-margin-top-120 .container .col-xs-12.col-xm-12.col-md-12.col-lg-12.column.inspiro-container .post-content{
  background:none;
}
</style>
<div class="login-custom">

<div class="login-wrapper">

    <h2><?php print render($intro_text); ?></h2>
    <h2><?php print render($form['title']); ?></h2>

    <?php
    // split the username and password from the submit button so we can put in links above
    print drupal_render($form['name']);
    print drupal_render($form['pass']);

    ?>

    <div class="user-links">
       <!-- <span class="passlink"><a href="/user/password">Forget your password?</a></span> | <span class="reglink"><a href="/user/register">Create an account</a></span>-->
    </div>

    <?php
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
    print drupal_render($form['actions']);
    ?>

</div><!--//login-wrapper-->
 </div><!--//your-themename-user-login-form-wrapper -->

