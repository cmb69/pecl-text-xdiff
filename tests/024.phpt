--TEST--
xdiff_string_diff() with context = 1
--SKIPIF--
<?php if (!extension_loaded("xdiff")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
$a = file_get_contents('tests/lorem1.txt');
$b = file_get_contents('tests/lorem2.txt');
$patch = xdiff_string_diff($a, $b, 1);
echo strcmp($patch, file_get_contents('tests/context1.patch'));
?>
--EXPECT--
0
