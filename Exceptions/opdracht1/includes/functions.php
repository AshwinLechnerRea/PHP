<?php
function createNumbers(int $quantity): array
{
    $getallen = [];
    for ($i = 0; $i < $quantity; $i++) {
        $randomNumber = rand(1, 10);
        $getallen[] = $randomNumber;
    }
    return $getallen;
}
function readNumbers(array $grades)
{
    $failed = [];
    foreach ($grades as $grade) {
        if ($grade < 6) {
            $failed[] = $grade;
        }
    }
    if (count($failed) >= 2) {
        throw new exception('Te veel onvoldoendes behaald. Doe het schooljaar over.');
    }
}