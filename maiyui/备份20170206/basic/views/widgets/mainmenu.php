<?php
$menuQuery=WfMenuHelper::menuQuery()->byId(1);
$maxDepth=1;
?>
<?php
$menu=WfMenuHelper::getMenuTree($menuQuery,$maxDepth);
$menus=$menu->getWebMenuSubmenus();
Yii::import('wfbase.menu.WfMenuRender');
$menuRender= new WfMenuRender($menus);
?>
<ul>
<?php 
while($menuRender->current($menu)){
?>
  <?php if ($menuRender->beginContentBefore()) {?>
    <li class="<?php echo WfMenuHelper::getMenuClass($menu) ?>">
      <a href='<?php echo $menu->getWebMenuUrl();?>' title='<?php echo $menu->getWebMenuComment();?>'>
        <span><?php echo $menu->getWebMenuTitle();?></span>
      </a>
  <?php }//End content before ?>
    <?php if ($menuRender->beginListBefore()) {?>
      <ul class="<?php echo WfMenuHelper::getMenuClass($menu) ?>">
    <?php }//End list before ?>  
    <?php $menuRender->renderSubmenus()?>
    <?php if ($menuRender->beginListAfter()) {?>
      </ul>
  <?php }//End list after ?>  
  <?php if ($menuRender->beginContentAfter()) {?>
    </li>
  <?php }//End content after ?>
<?php }//Loop end ?>
</ul>