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
if (!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["inquiry"])) {
	$comname = $_POST["comname"];
	$depname = $_POST["depname"];
	$name = $_POST["name"];
	$address = $_POST["address"];
	$telephone = $_POST["telephone"];
	$mail = $_POST["mail"];
	$subtitle = $_POST["subtitle"];
	$inquiry = $_POST["inquiry"];

	//入力チェック
	if (mb_strlen($name) >= 100) {
		echo "氏名は100文字以内で入力して下さい。/ Input name in 100 Charactors.";
	} else if (mb_strlen($mail) >= 100) {
		echo "メールアドレスは100文字以内で入力して下さい。/ Input E-mail in 100 Charactors.";
	} else if (mb_strlen($inquiry) >= 4000) {
		echo "問い合わせ内容は4000文字以内で入力して下さい。 / Input Inquiry in 4000 Charactors.";
	} else {

		//メール送信実行
		$mailto = "info@femtech.co.jp";
		$mailto2 = "hisakai@femtech.co.jp";
		$mailto3 = "hyakusoku@femtech.co.jp";
		$subject = "【ホームページからの問い合わせ】会社名/部署名/氏名: " . $comname . '/' . $depname . '/' . $name;
		$content = '会社名/部署名/氏名: ' . $comname . '/' . $depname . '/' . $name . '
住所: ' . $address . '
電話番号: ' . $telephone . '
E-mail: ' . $mail . '
様からのお問い合わせがありました。
【件名】
' . $subtitle . '
【内容】
' . $inquiry;
		$mailfrom = "From:" . mb_encode_mimeheader("ホームページからの問い合わせ自動送信") . "<info@femtech.co.jp>";
		mb_send_mail($mailto, $subject, $content, $mailfrom);
		mb_send_mail($mailto2, $subject, $content, $mailfrom);
		mb_send_mail($mailto3, $subject, $content, $mailfrom);

		//	送信完了メッセージ
		echo "問い合わせ内容を送信しました。/ Inquiry sent successfully.";
	}
} else {
	echo "全項目入力してください。/ Please input all fields";
}
?>
</div>
	</div>
	<div class="footer">
		<div class="copyright">
			Copyright 2002 -
			<script type="text/javascript">myDate = new Date() ;myYear = myDate.getFullYear ();document.write(myYear);</script>
			(C) Femtech Corporation., Ltd. All Rights Reserved.
		</div>
	</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57187797-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>