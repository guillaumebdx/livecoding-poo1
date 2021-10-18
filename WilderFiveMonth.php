<?php

namespace App;

class WilderFiveMonth extends Wilder
{
    private string $internship;

    public function study(): void
    {
        $this->tireness += 3;
    }

    /**
     * @return string
     */
    public function getInternship(): string
    {
        return $this->internship;
    }

    /**
     * @param string $internship
     */
    public function setInternship(string $internship): void
    {
        $this->internship = $internship;
    }


}