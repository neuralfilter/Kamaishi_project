<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>index</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">

	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/pict.js"></script>
<script src="js/popup.js"></script>


</head>

<body>

<div class="container">
	
	<div class="header">	
	</div>
	
	<div id="menu">
		<img src="img/rogo.png" alt="ロゴ" height="50px" width="200px">
			<ul>
			<li><a href="">TOUR</a></li>
			<li><a href="">SPOT</a></li>
			<li><a href="#popup1" class="popup_btn">LOGIN</a></li>
				<div id="popup1" class="popup">
					<div class="popup_inner">
					<div>
						<a href="#close_btn" class="close_btn">×</a>
					</div>
					<h2>LOGIN</h2>
						<ul>
							<li><p>ID &nbsp; &nbsp; :<br> <input type="text" id="t2" value=""></p></li>
							<li><p>PASSWORD : <input type="text" id="t3" value=""></p></li>
						</ul>
						<div id="btns">
							<p><input type="button" id="b2" value="LOGIN"></p>
							<p><input type="button" id="b3" value="MAKE AN ACCONUT" onclick="window.open('account')"></p>
						</div><!--#btns-->
					</div><!--.popup_inner-->
				</div>
				<div id="overlay"></div>
				<p><script>
						(function($){
						$(function(){
						    $(document)
						        .on('click', '.popup_btn', function(){
						            var $popup = $($(this).attr('href'));
						            var mT = ($popup.outerHeight() / -2) + 'px';
						            var mL = ($popup.outerWidth() / -2) + 'px';
						            $('.popup').hide();
						            $popup.css({
						                'margin-top': mT,
						                'margin-left': mL
						            }).show();
						            $('#overlay').show();
						            return false;
						        })
						        .on('click', '.close_btn, #overlay', function(){
						            $('.popup, #overlay').hide();
						            return false;
						        });
						});
						})(jQuery);
				</script></p>
			</ul>
	
	</div><!--menu-->
	
	<div class="main">

		<div class="viewer">
	
			<ul>
				<li><img src="img/top.png" width="100%" height="590px" alt=""></li>
				<li><img src="img/yakei.png" width="100%" height="590px" alt=""></li>
			</ul>
		
			</div><!--.viewer-->

			<div id="textbox">
			<p><span>
				ここに<br>
				サイトの説明を<br>
				かきます
				<br><br>
				<input type="text" id="t1" name="kensaku" value="">
				<input type="button" id="b1" name="btn" value="search">
			</span></p>
			</div><!--#textbox-->
		
		</div><!--.main-->
	
	
	
	<div id="footer">footer</div>

</div><!--container-->

</body>
</html>