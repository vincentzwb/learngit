<?php
$pageSize=10;
$pager=WfPageHelper::linkPager();
$contentLength=500;
?>
<?php
$keyword=$action->keyword;
$keywords=$action->keywords;
$paramName=$action->paramName;
?>
<h1>搜索结果：<?php echo CHtml::encode($keyword);?></h1>
<form>
<input name='<?php echo $paramName;?>' value='<?php echo CHtml::encode($keyword)?>'/>
<input type='submit' class='submit-in-search-view' value='<?php echo WfPageHelper::t('page','Search')?>'>
</from>
<?php if (isset($error)){?>
<div class='search-error'>
<?php switch ($error) {?>
<?php case WfSearchHelper::errorNoKeyword:?>
您没有输入关键字，请在搜索框内输入您感兴趣的内容。
<?php  break;?>
<?php case WfSearchHelper::errorKeywordTooShort:?>
<div class='search-keyword-error-too-short'>
您输入的关键字“<?php echo $keyword ?>”过短，请输入长度至少为<?php echo $action->keywordMinLength?>位的搜索关键字;
</div>
<?php  break;?>
<?php default: ?>
<div class='search-keyword-error-unknown'>
对不起，您的搜索发生了未知错误。
</div>
<?php } ?>
</div>
<?php }else{?>
<?php
$provider=WFTDataHelper::criteriaProvider($criteria,$pageSize);
$nodes=$provider->getData();
?>
<?php if (empty($nodes)){?>
<div class='search-result-empry'>
找不到您查找的关键字，请您更换关键字。
</div>
<?php }else{ ?>
<div class='search-result-content'>
<?php foreach ($nodes as $index=>$node){?>
<div class='item-<?php echo $index?>'>
  <h3 class='title'><?php echo $node->getNodeTitle()?></h3>
  <div class='search-result-content'>
    <?php
      $content=$node->getNodeContent();
      $content=WfSearchHelper::getResultContent( $keywords , $content , 500 );
      $content=WfSearchHelper::serverHighLight($keywords, $content,'b');
      echo $content;
    ?>
  </div>
</div>
<?php } ?>
<?php WfPageHelper::renderPager($provider,$pager)?>
<div>
<?php }?>
<?php }?>