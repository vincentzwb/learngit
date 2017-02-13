<?php
class  CustomerEvents extends WfEventBehavior
{
  public function onTest($event)
  {
    echo 'test';
  }
}
