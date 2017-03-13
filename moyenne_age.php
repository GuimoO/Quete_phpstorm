<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 13/03/17
 * Time: 13:33
 */

$students = [   "Emmanuel" => 42,
                "Thierry" => 51,
                "Pascal" => 45,
                "Eric" => 48,
                "Nicolas" => 19
];

$avg_of_students = array_sum($students)/count($students);

foreach ($students as $nom => $age) {

    echo 'Prénom :' . $nom . ' ' .  'Age : ' . $age . '<br> <br>';

}

    echo 'Moyenne des ages: ' . $avg_of_students;

