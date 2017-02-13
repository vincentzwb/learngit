<?php
$links=WfPageHelper::getPathUrlList();
if (!empty($links)){
?>
<ul class='breadcrumbs'>
<li class='home'><a href='/'><span><?php echo WfPageHelper::t('preset','home');?></span></a><span class='sep'>&raquo;</span></li>
<?php foreach ($links as $link=>$label){ ?>
 <li><a href='<?php echo $link ?>'><span><?php echo $label ?></span></a><span class='sep'>&raquo;</span></li>
<?php } ?>
<li class='current'><span><?php echo WfPageHelper::getTitle()?></span></li>
</ul>
<?php } ?>