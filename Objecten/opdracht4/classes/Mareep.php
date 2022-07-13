<?php
class Mareep
{
    private int $level;
    private static int $mareepCounter = 0;
    function __construct(int $level)
    {
        if ($level > 0 && $level < 100) {
            $this->level = $level;
        } else {
            echo 'Level must be between 1 and 99!';
        }
        self::$mareepCounter++;
        echo ' <img src="images/mareep.png" alt="Mareep">';
    }
    public function getLevel(): int
    {
        return $this->level;
    }
    public function setLevel(int $level)
    {
        $this->level = $level;
    }
    public function tackle()
    {
        return 'Level ' . $this->level . ' Mareep uses tackle! It deals ' . ceil(40 * ($this->level * 0.3)) . ' damage';
    }
    public function groupAttack()
    {
        if (self::$mareepCounter == 1) {
            return self::$mareepCounter . ' Mareep uses a group attack together in unison';
        } else {
            return self::$mareepCounter . ' Mareeps use a group attack together in unison';
        }
    }
}