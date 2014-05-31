<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
  <title>株式会社フェムテック</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" media="all" type="text/css" href="style.css" />
</head>
<body>
<div class="container">
	<div class="topbar"></div>
	<div class="header_wrap">
		<div class="header">	
			<div class="header_top  clearfix">
				<div class="header_msg">
					発想を変えて不可能を可能に。 "Changing ideas, Make it possible."
				</div>
				<a href="./contact.html" class="contact">
					<i class="ion-email"></i><span>お問い合わせ</span>
				</a>
			</div>
			<div class="header_main clearfix">
				<div class="title">
					<img src="img/femtech_logo_1.png" alt="femtech_logo_1" width="410" height="85" />
				</div>
			</div>
		</div>
	</div>
	
	<div class="menu_bar">
		<div class="menu_wrap clearfix">
			<img class="logo2" src="img/femtech_logo_2.png" alt="femtech_logo_2" width="79" height="35" />
			<ul>
				<li class="logo_spacer">　</li>
				<li><a href="./index.html">トップ</a></li>
				<li><a href="./companyceomessage.html">会社情報</a></li>
				<li><a href="./productlappingandpolishing.html">製品案内</a></li>
				<li><a href="./technology.html">技術紹介</a></li>
			</ul>
		</div>
	</div>

	<div class="contents_wrap">
		<div class="contact_message">
<?php
	mb_language("Ja");
	mb_internal_encoding("UTF-8");
	
	//nullチェックとメール送信実行処理
	if(!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["inquiry"])){
		$name=$_POST["name"];
		$mail=$_POST["mail"];
		$inquiry=$_POST["inquiry"];
		
		//入力チェック
		if(mb_strlen($name) > 50){
			echo "氏名は50文字以内で入力して下さい。";
		}else if(mb_strlen($mail) > 100){
			echo "メールアドレスは100文字以内で入力して下さい。";
		}else if(mb_strlen($inquiry) > 2000){
			echo "問い合わせ内容は2000文字以内で入力して下さい。";
		}else{
		
		//メール送信実行
		$mailto="info@femtech.co.jp";
		$subject="【ホームページからの問い合わせ】氏名: " . $name;
		$content='氏名: ' . $name . '
e-mail: ' . $mail . '
様からのお問い合わせがありました。
【内容】
' . $inquiry;
		$mailfrom="From:" .mb_encode_mimeheader("ホームページからの問い合わせ自動送信") ."<info@femtech.co.jp>";
		mb_send_mail($mailto,$subject,$content,$mailfrom);

		//	送信完了メッセージ
		echo"問い合わせ内容を送信しました。";
		}
	}else{
		echo "全項目入力してください。";
}
?>
</div>
	</div>
	
	<div class="footer">
	
		<div class="copyright">Copyright 2014(C) Femtech Corporation., Ltd. Allrights Reserved.</div>
	</div>
</div>
</body>
</html>