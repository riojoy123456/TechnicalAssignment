<?php 

$n = 11;
$m = 15;
$o = 21;

echo '# Level 1 '.PHP_EOL;
for ($i = 1; $i <= $n; $i++ ) {
	for ($j = 1; $j <= $n; $j++) {
		if ($i == 1 || $i == $n || $j == 1 || $j == $n || $i == $j || $j == $n - ($i - 1)) {
			echo 'x';
			} else {
				echo ' ';
		}
	}
	echo PHP_EOL;
}

echo PHP_EOL.PHP_EOL;

echo '# Level 2 '.PHP_EOL;
for ($i = 1; $i <= $m; $i++ ) {
	for ($j = 1; $j <= $m; $j++) {
		if ($i == 1 || $i == $m || $j == 1 || $j == $m || $i == $j || $j == $m - ($i - 1)) {
			echo 'x';
			} else {
				echo ' ';
		}
	}
	echo PHP_EOL;
}

echo PHP_EOL.PHP_EOL;

echo '# Level 3 '.PHP_EOL;
for ($i = 1; $i <= $o; $i++ ) {
	for ($j = 1; $j <= $o; $j++) {
		if ($i == 1 || $i == $o || $j == 1 || $j == $o || $i == $j || $j == $o - ($i - 1)) {
			echo 'x';
			} else {
				echo ' ';
		}
	}
	echo PHP_EOL;
}