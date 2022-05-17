<?php
session_start();

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
    </style>
  </head>
  <body>
    <?php include(dirname(__FILE__).'/tpl/header.html'); ?>
    <main>
      <form method="post" action="#" enctype="multipart/form-data">
        <p class="contact-logo">
          ご予約、お問い合わせフォーム
        </p>
        <div class="contact-page-caution">
          ※電話番号でのご予約、お問い合わせも可能です。<br>
          電話番号：000-000-0000
        </div>
        <div class="contact-name">
          <label>
            <div class="contact-label">お名前<span class="badge hissu-badge">必須</span></div><br>
            <input type="text" class="txt-box4 mgr-r-18" name="last_name" value="<?php !empty($member['last_name']) ? print(htmlspecialchars($member['last_name'], ENT_QUOTES)) : null; ?>">
          </label>
          <label>
            <input type="text" class="txt-box4" name="name" value="<?php !empty($member['name']) ? print(htmlspecialchars($member['name'], ENT_QUOTES)) : null; ?>">
          </label>
        </div>
        <?php
          if (!empty($error["last_name"]) && $error["last_name"] === "blank" && !empty($error["name"]) && $error["name"] === "blank") {
              echo '<p class = "error">※苗字と名前が未入力です</p>';
          } elseif (!empty($error["last_name"]) && $error["last_name"] === "blank") {
              echo '<p class = "error">※苗字が未入力です</p>';
          } elseif (!empty($error["name"]) && $error["name"] === "blank") {
              echo '<p class = "error">※名前が未入力です</p>';
          }
        ?>
        <div class="contact-mail">
          <label>
            <div class="contact-label">メールアドレス<span class="badge hissu-badge">必須</span></div><br>
            <input type="email" class="txt-box5" name="mail" value="<?php !empty($member['mail']) ? print(htmlspecialchars($member['mail'], ENT_QUOTES)) : null; ?>">
          </label>
          <?php
          if (!empty($error["mail"]) && $error["mail"] === "blank") {
              echo '<p class = "error">※メールアドレスが未入力です</p>';
          }
          ?>
        </div>
        <div class="contact-content">
          <label>
            <div class="contact-label">ご予約、お問い合わせ内容<span class="badge hissu-badge">必須</span></div>
            <textarea name="contact_contents" class="content-area"></textarea>
          </label>
          <?php
          if (!empty($error["contact_contents"]) && $error["contact_contents"] === "blank") {
              echo '<p class = "error">※ご予約、お問い合わせ内容が未入力です</p>';
          }
          ?>
        </div>
        <button class="contact-confirm-btn">
          ご予約、お問い合わせ内容の確認
        </button>
      </form>
    </main>
    <footer>
		  <p class="footer-p">©︎2022 Koki Motomura</p>
	  </footer>
  </body>
</html>