<?php

class UnholyFactory{

	public $person = array();

	public function absorb($p)
{
	if (get_parent_class($p) == 'Fighter') {
		if (isset($this->person[$p->getName()])) {
			print("(Factory already absorbed a fighter of type ".$p->getName().")".PHP_EOL);
		} else {
			print("(Factory absorbed a fighter of type ".$p->getName().")".PHP_EOL);
			$this->person[$p->getName()] = $p;
		}
	} else {
		print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
	}
}
	public function fabricate($p)
	{
		if (array_key_exists($p, $this->person))
		{
            print("(Factory fabricates a fighter of type ".$p.")".PHP_EOL);
            return (clone $this->person[$p]);
        }
		else
		{
			print("(Factory hasn't absorbed any fighter of type ".$p .")".PHP_EOL);
			return null;
		}
	}
}

?>
