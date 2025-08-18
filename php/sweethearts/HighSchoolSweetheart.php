<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
        $initials = '';

        [$firstName, $lastName] = explode(' ', trim($name));

        return $this->initial($firstName) . ' ' . $this->initial($lastName);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials = $this->initials($sweetheart_a) . '  +  ' . $this->initials($sweetheart_b);

        $heart = '';
        $heart .= "     ******       ******\n";
        $heart .= "   **      **   **      **\n";
        $heart .= " **         ** **         **\n";
        $heart .= "**            *            **\n";
        $heart .= "**                         **\n";
        $heart .= "**     $initials     **\n";
        $heart .= " **                       **\n";
        $heart .= "   **                   **\n";
        $heart .= "     **               **\n";
        $heart .= "       **           **\n";
        $heart .= "         **       **\n";
        $heart .= "           **   **\n";
        $heart .= "             ***\n";
        $heart .= '              *';

        return $heart;
    }
}
