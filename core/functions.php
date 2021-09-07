<?php  

namespace Core\Functions;

function formater_date(string $date, string $format = DATE_FORMAT) :string {
    $date = new \DateTime($date);
    return $date->format($format);
}