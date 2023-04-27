<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
<?php require_once "include/head.inc.php"; ?>
<body>
	<?php require_once "include/header.inc.php";?>
	<main>
		<section class="latest-posts" id="articleList">
			<h2>最新文章</h2>
			<ul id="articleNews"></ul>
		</section>
	</main>
	<footer>
		<nav id="pageination">
			<p>&copy; 2023 論壇</p>
		</nav>
	</footer>

</body>
<script type="text/javascript" src="js/global.js"></script>
<script>
	$(document).ready(function(){
		ajaxFunction("indexArticleNews", "articleNews");
	});
</script>
<script type="text/javascript" src="js/global.js"></script>
</html>
