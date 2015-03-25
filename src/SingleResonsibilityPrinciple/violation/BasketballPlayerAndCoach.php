<?php
namespace SolidPhp\SingleResonsibilityPrinciple\violation;

use SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach;
use SolidPhp\SingleResonsibilityPrinciple\interfaces\Player;

class BasketballPlayer implements Player, Coach
{

    public function leadTeam()
    {
        return 'Score or you will be running ladders';
    }

    public function leadPractice()
    {
        return 'Run ladders';
    }

    public function play()
    {
        return 'I am going to score points';
    }

    public function practice()
    {
        return 'Running ladders';
    }
}
