<?php
/**
 * Class du jeux de la fourchette
 */
class Fork
{
    private $goal;
    private $count = 0;

    function __construct()
    {
        $this->goal = rand(1,100);
    }

    public function setGoal($goal)
    {
        return $this->goal = $goal;
    }

    public function getGoal()
    {
        return $this->goal;
    }

    public function setCount($count)
    {
        return $this->count = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    private function _addOneTry()
    {
        return $this->count = $this->count +1;
    }

    public function tryNumber($input)
    {
        $this->_addOneTry();
        switch ($input <=> $this->goal) {
            case 0:
                $_SESSION['success'] = true;
                return true;
                break;
            case 1:
                $_SESSION['less'] = true;
                return true;
                break;
            case -1:
                $_SESSION['more'] = true;
                return true;
                break;
        }
    }
}

?>
