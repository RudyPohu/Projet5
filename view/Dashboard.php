<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>
   
<section class="sliderhome">
    <h1 class="">Dashboard</h1>
</section>


       
<?php
$content = ob_get_clean();
require 'Template.php';
?>
