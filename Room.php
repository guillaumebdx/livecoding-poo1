<?php

use App\Wilder;

class Room
{
    private Wilder $wilder;

    /**
     * @return Wilder
     */
    public function getWilder(): Wilder
    {
        return $this->wilder;
    }

    /**
     * @param Wilder $wilder
     */
    public function setWilder(Wilder $wilder): void
    {
        $this->wilder = $wilder;
    }


}