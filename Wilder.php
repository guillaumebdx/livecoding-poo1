<?php

namespace App;

class Wilder
{
    public const AUTHORIZED_LANGUAGES = ['php', 'js'];

    public const MAXIMUM_TIRENESS = 10;

    private string $name;

    private string $language;

    protected int $tireness = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function study(): void
    {
        $this->tireness += 1;
    }

    public function drinkCoffee()
    {
        if (!$this->isDead()) {
            $this->tireness -= 2;
        }
    }


    public function isDead(): bool
    {
        $result = false;
        if ($this->tireness >= self::MAXIMUM_TIRENESS) {
            $result = true;
        }
        return $result;
    }

    public function getTireness(): int
    {
        return $this->tireness;
    }

    public function setTireness(int $tireness): void
    {
        $this->tireness = $tireness;
    }



    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        if (in_array($language, self::AUTHORIZED_LANGUAGES)) {
            $this->language = $language;
        }

    }


}