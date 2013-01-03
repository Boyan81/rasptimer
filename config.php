<?php
// Configuration file. Adjust as needed.

// Title of the web page
$title = "Rasptimer";

// The devices being controlled.
// key:   name of the device
// value: wiringPi PIN number, see https://projects.drogon.net/raspberry-pi/wiringpi/pins/

$devices = array(
    "Main pump"    => 11,
    "Sweeper pump" =>  6
);

// Where to log events. This file must be writeable by the webserver user, e.g. "chown www-data /var/log/rasptimer.log"
$logFile = "/var/log/rasptimer.log";

