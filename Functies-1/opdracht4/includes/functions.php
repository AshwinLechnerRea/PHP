<?php
declare(strict_types=1);
function printBusinessCard(string $firstName = "Patrick", string $lastName = "Schevers", int $age=28, string $title = "PHP Wizard", string $location = "Eindhoven",string $biography = "Lorem ipsum dolor sit amet consectetur "):string{
	$output = '<article>';
	$output .= '<p>Naam: '.$firstName.' '.$lastName.'</p>';
	$output .= '<p>Leeftijd: '.$age.'</p>';
	$output .= '<p>Titel: '.$title.'</p>';
	$output .= '<p>Locatie: '.$location.'</p>';
	$output .= '<p>Biografie: '.$biography.'</p>';
	$output .= '</article>';
	return $output;
}
