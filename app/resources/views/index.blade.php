<!DOCTYPE html> <!-- バージョン宣言 -->
<html lang="ja"> <!-- 使用言語 -->

<head> <!-- 表示されないページ情報 -->
 <title>ページタイトル</title> <!-- ページ内容を示すタイトル -->
 <meta charset="UTF-8" /> <!-- 文字エンコーディングを指定 -->
 <meta name="description" content="ページの概要" /> <!-- ページの概要・説明 -->  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}"> <!-- 適用するCSS -->
 <link rel="icon" href="storage/icon.jpg" sizes="32x32" /> <!-- タブアイコン -->
 <link rel="apple-touch-icon" href="storage/iconb.jpg" sizes="180x180" /> <!-- ホーム画面アイコン -->
</head>
<body> <!-- 表示されるページ内容 -->
 <header> <!-- ヘッダー -->
  
    ロゴ<a href="{{ route('index')}}"><img src="storage/logo.jpg" class="logo"></a>
    <a href="{{ route('cart')}}">カート</a>
    <div>
    <a href="{{ route('login')}}">ログイン</a> / <a href="{{ route('register')}}">会員登録</a>
    </div>
</header>
 <main> <!-- コンテンツ -->
  <form class="form-group">
    <select type="category">
      <option>選択肢1</option>
<option>選択肢2</option>
<option>選択肢</option>
</select>
    <select type="budget">
      <option>選択肢1</option>
<option>選択肢2</option>
<option>選択肢</option>
</select>
    
    <input type="word">
    </form>

    <!-- 広告 -->
      <p class="resizeimage">
        <img src="storage/pop01.jpg" />
      </p>
      
<!-- 商品カード -->
    <div class=”container”>
      
      <div class="card-deck mb-3"><!-- 余白 -->
              <div class="card-deck"><!-- カード横並び -->

        <div class="card"><!-- カード -->
          <div class="card-header"> <!-- カードのヘッダー -->
            <img src="..." class="img-responsive center-block" >
          </div>
          <div class="card-body"><!-- カード -->
            <p class="card-title">商品名 </p>
            <ul class="list-unstyled mt-3 mb-4">
              <li>価格</li>
            </ul>
          </div>
        </div>
    </div>
            </div>
      </div>
</main>
<footer> <!-- サイトマップなど -->
    Ⓒ すぎょやん.INC
 </fotter>
 <!-- Bootstrap Javascript(jQuery含む) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="～.js"></script> <!-- 適用するjavascript、bodyの最後に配置 -->
</body>


</html>