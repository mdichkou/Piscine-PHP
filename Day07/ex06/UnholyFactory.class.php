<?php
class UnholyFactory {
    public $fighter = array();
    public function ft_find($var)
    {
        foreach ($this->fighter as $val)
        {
            if ($val->str == $var)
                return true;
        }
        return false;
    }
    public function ft_clone($obj) {
        foreach ($this->fighter as $val)
        {
            if ($val->str == $obj)
            {
                $obj2 = clone $val;
                return $obj2;
            }
        }
    }
    public function absorb($obj) {
        if ($obj instanceof Fighter)
        {
            if (!$this->ft_find($obj->str))
            {
                print("(Factory absorbed a fighter of type " . $obj->str . ")" .  PHP_EOL);
                array_push($this->fighter,$obj);
            }
            else
                print("(Factory already absorbed a fighter of type ".$obj->str.")".PHP_EOL);
        }
        else
            print("(Factory can't absorb this, it's not a fighter)" .  PHP_EOL);
    }
    public function fabricate($obj) {
        if ($this->ft_find($obj))
        {
            print("(Factory fabricates a fighter of type " . $obj . ")" .  PHP_EOL);
            return $this->ft_clone($obj);
        }
        else
            print("(Factory hasn't absorbed any fighter of type " . $obj . ")" .  PHP_EOL);
    }
}
?>