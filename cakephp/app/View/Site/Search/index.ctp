<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>index</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/s-style.css">
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
	
	<div id="main">
		<form id="form2" method="" action="">
			<!--<p>
				<label>
					<span>！！！</span>
					<input type="text" name="テキストボックス" class="txtfiled">
				</label>
			</p>-->
			
			<p>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択２">選択２</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
				<label><input type="checkbox" name="チェックボタン" value="選択１">選択１</label>
			</p>
			
			
			<p>
				<label><input type="radio" name="ラジオボタン" value="選択１">選択１</label>
				<label><input type="radio" name="ラジオボタン" value="選択2">選択2</label>
				<label><input type="radio" name="ラジオボタン" value="選択１">選択１</label>
				<label><input type="radio" name="ラジオボタン" value="選択１">選択１</label>
				<label><input type="radio" name="ラジオボタン" value="選択１">選択１</label>
			</p>
			
			<!--<p>
				<select name="セレクトボックス">
					<option value="項目1">項目1</option>
					<option value="項目2">項目2</option>
					<option value="項目3">項目3</option>
					<option value="項目4">項目4</option>
					<option value="項目5">項目5</option>
					<option value="項目6">項目6</option>
					<option value="項目7">項目7</option>
					<option value="項目8">項目8</option>
				</select>
				</p>-->
			
			<p>
				<input type="submit" value="検索">
				<input type="reset" value="リセット">
			</p>	
		</form>
	
	</div><!--main-->
	
	<div id="footer">footer</div>

</div><!--container-->

</body>
</html>