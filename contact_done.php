<?php
if (!empty($_POST)) {
  $stop_flg = 0;

  if ($_POST["last_name"] === "") {
      $error["last_name"] = "blank";
      $stop_flg = 1;
  }

  if ($_POST["name"] === "") {
      $error["name"] = "blank";
      $stop_flg = 1;
  }

  if ($_POST["mail"] === "") {
    $error["mail"] = "blank";
    $stop_flg = 1;
  }

  if ($_POST["contact_contents"] === "") {
    $error["contact_contents"] = "blank";
    $stop_flg = 1;
  }

  if (empty($error)) {
    $_SESSION["contact"] = $_POST;
    header("Location: contact_confirm.php");
    exit();
  }
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
      .error {
        margin: 13px auto 0;
        text-align: center;
      }
      .test {
        position: relative;
        min-height: 100vh;
      }
      footer {
        bottom: 0;
        position: fixed;
      }
    </style>
  </head>
  <body>
  <?php include(dirname(__FILE__).'/tpl/header.html'); ?>
  <div class="test">
    <main>
      <form method="post" action="#" enctype="multipart/form-data">
        <p class="contact-logo">
          お問い合わせフォーム
        </p>
        <div class="contact-page-caution">
          2営業日内にお問い合わせ内容のご確認・ご返信させていただきます。少々お待ちくださいませ
        </div>
      </form>
      <a class="top-link-btn" href="index.php">
        トップページへ戻る
      </a>
    </main>
    <footer>
		  <p class="footer-p">©︎2022 Koki Motomura</p>
	  </footer>
    </div>
  </body>
</html>