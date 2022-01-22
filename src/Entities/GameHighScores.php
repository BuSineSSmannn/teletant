<?php


namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class GameHighScores extends Entity
{
    /**
     * @return GameHighScore[]
     */
    public function each()
    {
        $scores = [];
        if (is_array($this->_data())) {
            foreach ($this->_data() as $score) {
                $scores[] = new GameHighScore($score);
            }
            return $scores;
        } else return [];
    }
}