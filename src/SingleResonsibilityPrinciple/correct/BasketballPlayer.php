<?php
namespace SolidPhp\SingleResonsibilityPrinciple\correct;

use SolidPhp\SingleResonsibilityPrinciple\interfaces\Player;

class BasketballPlayer implements Player
{

    public function play()
    {
        return 'Triple double';
    }

    public function practice()
    {
        return 'Free throw practice shot number 9000 for today';
    }
}
