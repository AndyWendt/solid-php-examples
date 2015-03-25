<?php
namespace SolidPhp\SingleResonsibilityPrinciple\correct;

use SolidPhp\SingleResonsibilityPrinciple\interfaces\Coach;

class BasketballCoach implements Coach
{
    public function leadTeam()
    {
        return 'Run your plays!';
    }

    public function leadPractice()
    {
        return 'Run another ladder...';
    }
}
