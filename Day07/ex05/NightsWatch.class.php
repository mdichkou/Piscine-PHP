<?php
class NightsWatch{
    private $army = array();
    public function recruit($obj) {
        array_push($this->army,$obj);
    }
    public function fight() {
        foreach ($this->army as $fighter)
        {
            if ($fighter instanceof IFighter)
                $fighter->fight();
        }
    }
}
?>