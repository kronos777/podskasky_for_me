<?
class B {
  public $n;
  public $s;

  public function sh ($r) {
     $this->r = $r;
	 echo $this->n.' сказал привет '.$r;
	 $this->drB();
  }
  public function drB () {
    echo '<br><hr>';
	}
}