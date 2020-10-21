<?php
class Calculator {
    public $propone;
    public $proptwo;
    public $propthree;
    
    public function getOne()
    {
      return $this->propone;
    }

    public function getTwo()
    {
      return $this->proptwo;
    }

    public function getThree()
    {
      return $this->prothree;
    }

    public function setOne($v)
    {
      $this->propone = $v;
    }

    public function setTwo($v)
    {
      $this->proptwo = $v;
    }

    public function setThree($v)
    {
      $this->propthree = $v;
    }

    public function calculator()
    {
      return $this->propone * $this->proptwo * $this->propthree;
    }

}