<?php
/* @var $this SiteController */
/* @var $error array */
?>
<h2>error:<?php echo $error['code'];?></h2>
<div class="error">
<?php echo CHtml::encode($error['message']); ?>
</div>