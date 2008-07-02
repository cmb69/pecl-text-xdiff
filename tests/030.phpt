--TEST--
xdiff_string_patch() with context1.patch and reverse patching
--SKIPIF--
<?php if (!extension_loaded("xdiff")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
$a = file_get_contents('tests/lorem2.txt');
$b = file_get_contents('tests/context1.patch');
$c = xdiff_string_patch($a, $b, XDIFF_PATCH_REVERSE);
$d = file_get_contents('tests/lorem1.txt');
echo strcmp($c, $d);
?>
--EXPECT--
0
