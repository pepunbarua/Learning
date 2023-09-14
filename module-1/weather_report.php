<?php

$temparature = 9;

$feel = ($temparature < 8) ? "It's freezing!":(($temparature < 15) ? "It's cool":(($temparature > 15 && $temparature < 35) ? "It's warm.": "It's Too Much Hot!!!"));

echo $feel;
