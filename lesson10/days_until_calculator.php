<?php

$event = readline('Event name: ');
$eventDate = readline('Event date (YYYY-MM-DD): ');
$thisDay = new DateTime();
$thisDay->format('Y-m-d');
$rEventDate = date_create_from_format('Y-m-d', $eventDate);
$interval = $thisDay->diff($rEventDate);
echo 'Event \'' . $event . '\' is ' . $interval->format('%a days') . ' away';