<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        return (int) implode('', $digitsOfNumber1) + (int) implode('', $digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        $originalNumber = (string) $number;

        return strrev($originalNumber) == $originalNumber;
    }

    public function validate(string $input): string
    {
        if (!strlen($input)) {
            return 'Required field';
        }

        if (((int) $input != $input) || (int) $input < 1) {
            return 'Must be a whole number larger than 0';
        }

        return '';
    }
}
