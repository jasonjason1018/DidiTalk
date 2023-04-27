<header>
	<h1 onclick="location.href='index.php'"><a href="javascript:void(0)" style="text-decoration:none;color:#333">論壇</a></h1>
	<nav>
		<ul class="menu">
			<li><a href="index.php">首頁</a></li>
			<li><a href="articleList.php">文章</a></li>
			<!-- <li><a href="javascript:void(0)">用戶</a></li> -->
			<li><a href="login.php">登入</a></li>
			<li><a href="register.php">註冊</a></li>
		</ul>
	</nav>
	<form action="search.php" method="POST" id="searchForm">
		<input type="search" name="q" id="search" placeholder="輸入關鍵字" autocomplete="off">
		<a id="searchBtn">搜索</a>
	</form>
</header>
<script type="text/javascript">
	$("#searchBtn").on("click", function(){
		if($("#search").val() != ''){
			$("#searchForm").submit();
		}
	});
</script>