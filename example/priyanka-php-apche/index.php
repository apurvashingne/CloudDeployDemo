<?php
echo "<h1> Hello World From Prajaktaa!! </h1>";
$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello %s!', $name);
?>
