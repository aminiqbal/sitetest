<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="files/a1.css">
		<title>Computing Concepts</title>
	</head>
	<body>
		<div class="mainContainer">
			<div class="navbar">
				<a class="button01" href="computing_concepts.html"><span>Computing Concepts</span></a>
				<a class="button02" href="operating_system_concepts.html"><span>Operating System Concepts</span></a>
				<a class="button01" href="data_structures.html"><span>Data Structures</span></a>
				<a class="button02" href="sorting_algorithms.html"><span>Sorting Algorithms</span></a>
				<a class="button01" href="miscellaneous_algorithms.html"><span>Miscellaneous Algorithms</span></a>
				<a class="button02" href="algorithm_design_concepts.html"><span>Algorithm Design Concepts</span></a>
			</div>
			<div class="secondaryContainer">
			<form>
				<select name="itemlist" class="itemSelection" onchange="this.form.submit()">
					<option class="itemLabel">Item01</option>
					<option class="itemLabel" value="a1">a</option>
				</select>
			</form>
			<div class="displayArea">
<pre class="codeArea"><?php
if(isset($_GET["itemlist"]))
{
	$f = $_GET["itemlist"];
	$filename = "files/data/$f.txt";
	$textfile = fopen($filename, "r") or die("Unable to open file!");
	$content = fread($textfile, filesize($filename));
	fclose($textfile);
	echo($content);
}
?></pre>
			</div>
			</div>
		</div>
		<script type="text/javascript" src="files/a1.js"></script>
	</body>
</html>