<?php

namespace App;
class Alternant extends Wilder
{
    private string $employer;


    public function __construct(string $name, string $employer)
    {
        parent::__construct($name);
        $this->employer = $employer;
    }

    /**
     * @return string
     */
    public function getEmployer(): string
    {
        return $this->employer;
    }

    /**
     * @param string $employer
     */
    public function setEmployer(string $employer): void
    {
        $this->employer = $employer;
    }


}