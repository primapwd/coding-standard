<?php

if ($foo = 5) { }
if ($foo) {} elseif ($foo = 5) {}
do { } while ($foo = 5);
if (($line = fgets($fp)) !== null) { }
