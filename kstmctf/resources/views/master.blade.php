<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>kstmctf</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- BootstrapのCSS読み込み -->
		<link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery読み込み -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
		<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand">kstm CTF</a>
		</div>
		<!-- 3.リストの配置 -->
		<ul class="nav navbar-nav">
		<li class="active">{{Html::link(env('APP_URL','.').'questionlist', '問題一覧')}}</li>
		<li><a href="404">Ranking</a></li>
		<li class="active">{{Html::link(env('APP_URL','.').'create', '問題投稿')}}</li>
	</ul>
</div>
</nav>

	<div class="container">
		@yield('content')
	</div>
	</body>
</html>
