<?php
	mb_language("Ja") ;
	mb_internal_encoding("UTF-8") ;
	
	//nullチェックとメール送信実行処理
	if(isset($_POST["name"],$_POST["mail"],$_POST["inquiry"])){
		$name=$_POST["name"];
		$mail=$_POST["mail"];
		$inquiry=$_POST["inquiry"];
		
		//入力チェック
		if(strlen($name) > 100){
			echo "50文字以内で入力して下さい。";
			exit();
		}else if(strlen($name) > 100){
			echo "100文字以内で入力して下さい。";
			exit();
		}else if(strlen($inquiry) > 2000){
			echo "1000文字以内で入力して下さい。";
			exit();
		}
		
		//メール送信実行
		$mailto="info@femtech.co.jp";
		$subject="【ホームページからの問い合わせ】氏名: $name e-mail: $mail";
		$content="氏名: $name¥ne-mail: $mail¥n様からのお問い合わせがありました。¥n【内容】¥n$inquiry";
		$mailfrom="From:" .mb_encode_mimeheader("ホームページからの問い合わせ自動送信") ."<info@femtech.co.jp>";
		mb_send_mail($mailto,$subject,$content,$mailfrom);

		//	リダイレクト処理
		header("Location: contact_complete.html");
		
	}else{
		//nullチェックエラー
		echo("全ての項目を入力して下さい。");
	}
?>