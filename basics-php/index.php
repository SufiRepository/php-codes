<?php

$Name = 'Hello';
$name = 'World';

echo $name . ' ' . "\n";
echo $Name . "\n";
echo "hellop{$name}" . "\n";
echo print 'Hello World S' . "\n";
//comment 1
#comment
/*
comment multi line
 */

// Constants
define('VARI_NAME', 'vari value');
echo VARI_NAME . "\n";

echo PHP_VERSION . "\n";
echo __LINE__ . "\n";

//variable variable
$new = "fresh";
$$new = "awesome";

echo $fresh . "\n";
echo $$new . "\n";

/*
Data types and type casting

4 Scalar types
bool
int
float
string

4 compound types
array
object
callable
iterable

2 special types
resource
null
*/