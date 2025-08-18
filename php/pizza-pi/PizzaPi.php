<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $numberOfPizza, int $numberOfPerson): int
    {
        return $numberOfPizza * (($numberOfPerson * 20) + 200);
    }

    public function calculateSauceRequirement(int $numberOfPizza, int $mlPerCan): int
    {
        $neededSauceVolume = $numberOfPizza * 125;

        return ceil($neededSauceVolume / $mlPerCan);
    }

    public function calculateCheeseCubeCoverage(float $cheeseDimension, float $pizzaThickness, float $pizzaDiameter)
    {
        $pizzas = ($cheeseDimension ** 3) / ($pizzaThickness * pi() * $pizzaDiameter);

        return floor($pizzas);
    }

    public function calculateLeftOverSlices(int $numberOfPizza, int $numberOfPerson)
    {
        return ($numberOfPizza * 8) % $numberOfPerson;
    }
}
