<!DOCTYPE html>
<html>
<head>
<title>gridster.js多列网格式拖动布局演示页面 - 互动殿堂</title>
<meta charset="UTF-8">
<meta name="author" content="www.uedsc.com" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/jquery.gridster.min.js"></script>
<script>
$(function() {
	$(".gridster ul").gridster({
		widget_margins: [10, 10],
		widget_base_dimensions: [140, 140]
	});
});
</script>
<link href="http://www.uedsc.com/wp-content/themes/uedsc_new/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/jquery.gridster.min.css">
<style>
a{	color: #808080;}
h1{	padding:10px;	font-size: 38px;}
ul{	list-style:none;}
.s1{	background: url('http://placehold.it/140x140');}
.s2{	background: url('http://placehold.it/300x140');}
.s3{	background: url('http://placehold.it/140x300');}
.s4{	background: url('http://placehold.it/300x300');}
</style>
</head>
<body>

<section class="wrap">
	<article>
		<h1>GridSter.js多列网格式拖动布局演示页面</h1>
		
		<section>

		<div class="gridster">
			<ul>
				<li class="s1" data-row="1" data-col="1" data-sizex="1" data-sizey="1"></li>
				<li class="s1" data-row="2" data-col="1" data-sizex="1" data-sizey="1"></li>
				<li class="s1" data-row="3" data-col="1" data-sizex="1" data-sizey="1"></li>

				<li class="s2" data-row="1" data-col="2" data-sizex="1" data-sizey="1"></li>
				<li class="s4" data-row="2" data-col="2" data-sizex="1" data-sizey="1"></li>

				<li class="s1" data-row="1" data-col="4" data-sizex="1" data-sizey="1"></li>
				<li class="s2" data-row="2" data-col="4" data-sizex="1" data-sizey="1"></li>
				<li class="s1" data-row="3" data-col="4" data-sizex="1" data-sizey="1"></li>

				<li class="s1" data-row="1" data-col="5" data-sizex="1" data-sizey="1"></li>
				<li class="s1" data-row="3" data-col="5" data-sizex="1" data-sizey="1"></li>

				<li class="s1" data-row="1" data-col="6" data-sizex="1" data-sizey="1"></li>
				<li class="s3" data-row="2" data-col="6" data-sizex="1" data-sizey="1"></li>
			</ul>
		</div>
		</section>
	</article>
</section>
</body>
</html>
