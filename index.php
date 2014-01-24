<html>
<head>
<title>Grammar server</title>
<link href="/design/style.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
</head>
<body>

<header>
<h1>Grammar server test page</h1>
<p>Built using <a href="http://www.schneertz.com/rmutt/"><?php print shell_exec("rmutt -v 2>&1"); ?></a> and the <a href="http://slimframework.com">Slim</a> framework.</p>
<p>Styled with <a href="http://bourbon.io/">Bourbon</a>, <a href="http://neat.bourbon.io/">Neat</a>, and <a href="http://bitters.bourbon.io/">Bitters</a>.</p>
</header>

<?php
$time_start = microtime(true);
$output = shell_exec("rmutt /usr/local/share/rmutt/recipe.rm");
$time_end = microtime(true);
$time = $time_end - $time_start;
?>

<article>
<?php print $output; ?>
</article>

<footer>Time used: <?php print round($time, 4); ?> seconds</footer>

</body>
</html>