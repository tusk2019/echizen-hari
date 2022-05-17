<?php
session_start();

    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $last_name = $_SESSION["contact"]['last_name'];
        $name = $_SESSION["contact"]['name'];
        $email = $_SESSION["contact"]['mail'];
        $content = $_SESSION["contact"]['contact_contents'];
    }

    // 送信ボタンが押されたら
    if (isset($_POST["submit"])) {
        mb_language("ja");
        mb_internal_encoding("UTF-8");

        // 件名を変数subjectに格納
        $subject = "【自動送信】お問い合わせ内容の確認";

        // メール本文を変数bodyに格納
        $body = <<< EOM
{$last_name}{$name}　様

えちぜん鍼灸院です。
お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】
{$name}

【 メールアドレス 】
{$email}

【 お問い合わせ内容 】
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;


        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "kouki032812@gmail.com";

        // 送信元の名前を変数fromNameに格納
        $fromName = "えちぜん鍼灸院 運営事務局";

        // ヘッダ情報を変数headerに格納する
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

        // メール送信を行う
        mb_send_mail($email, $subject, $body, $header);
        mb_send_mail($fromEmail, "お問い合わせ", $body, $header);

        header("Location: contact_done.php");
        exit();
    }
?>
<!doctype html>
<html lang="ja">
  <head>
    <title>えちぜん鍼灸院</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <style>
    .mgr-10{
      margin-right : 10px;
    }
    .contents-confirm {
      white-space: pre-wrap;
    }
    </style>
  </head>
  <body>
    <?php include(dirname(__FILE__).'/tpl/header.html'); ?>
    <main>
      <form method="post" action="#">
        <p class="contact-logo">
          お問い合わせフォーム
        </p>
        <div class="contact-page-caution">
          ※電話番号でのご予約、お問い合わせも可能です。<br>
          電話番号：000-000-0000
        </div>
        <div class="contact-name">
          <div class="contact-label">お名前<span class="badge hissu-badge">必須</span></div><br>
          <?php
          if (!empty($_SESSION["contact"]['last_name']) && !empty($_SESSION["contact"]['name'])) {
              echo '<p><span class="mgr-10">'.$_SESSION["contact"]['last_name'].'</span>'.$_SESSION["contact"]['name'].'</p>';
          }
          ?>
        </div>
        <div class="contact-mail">
          <div class="contact-label">メールアドレス<span class="badge hissu-badge">必須</span></div><br>
          <?php
          if (!empty($_SESSION["contact"]['mail'])) {
              echo '<p>'.$_SESSION["contact"]['mail'].'</p>';
          }
          ?>
        </div>
        <div class="contact-content">
          <label>
            <div class="contact-label">ご予約、お問い合わせ内容<span class="badge hissu-badge">必須</span></div>
          </label>
          <?php
          if (!empty($_SESSION["contact"]['contact_contents'])) {
              echo '<p class="contents-confirm">'.$_SESSION["contact"]['contact_contents'].'</p>';
          }
          ?>
        </div>
        <button name="submit" class="submit-btn">
          送信する
        </button>
      </form>
    </main>
    <footer>
		  <p class="footer-p">©︎2022 Koki Motomura</p>
	  </footer>
  </body>
</html>