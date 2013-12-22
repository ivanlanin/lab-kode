<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Audio</title>
<style>
audio { display: none; }
</style>
</head>
<body>
<a id="hear"><input width="16" type="image" height="16" style="height:16px;width:16px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAcUlEQVQ4y2P4//8/AyUYQhAH3gNxA7IAIQPmo/H3g/QA8XkgFiBkwHyoYnRQABVfj88AmGZcTuuHyjlgMwBZM7IE3NlQGhQe65EN+I8Dw8MLGgYoFpFqADK/YUAMwOsFigORatFIlYRElaRMWmaiBAMAp0n+3U0kqkAAAAAASUVORK5CYII=" /></a>
<audio id="audio" controls="controls" src="//ssl.gstatic.com/dictionary/static/sounds/de/0/risk.mp3"></audio>
<script src="./assets/js/jquery.min.js"></script>
<script>
$(function() {
	$("#hear").click( function() {
		$("#audio").get(0).play();
	});
});
</script>
</body>
</html>