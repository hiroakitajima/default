<?php include($_SERVER['DOCUMENT_ROOT']. '/default/cmn/inc/settings.php'); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="description" content="サイトの説明">
    <meta name="keywords" content="サイトのキーワード,キーワード">
    <title>サイトのタイトル</title>
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/cssreset-min.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/labstrap.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/cmn.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/layout.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/<?php echo($css); ?>.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo(HOMEURL); ?>cmn/js/jquery-1.12.3.min.js"></script>
  </head>
  <body class="<?php echo($body_page); ?>">

    <!-- ! ヘッダー ============================== -->
    <header>
      <div class="container">
        <a class="logo" href="<?php echo(HOMEURL); ?>">
          <img src="<?php echo(HOMEURL); ?>cmn/img/logo.svg">
        </a>
      </div>
    </header>
    
    <!-- ! メイン ============================== -->
    <main>
      <div class="container">

        <!-- ! タブ ============================== -->
        <div class="aside_wrap tab_wrap">
          <section class="aside_nav tab_nav_wrap">
            <ul class="tab_nav">
              <li class="current"><p class="btn_small_full">ボタン</p></li>
              <li><p class="btn_small_full">テーブル</p></li>
              <li><p class="btn_small_full">フォーム</p></li>
              <li><p class="btn_small_full">スプリット・ギャップ</p></li>
            </ul>
          </section>
          
          <!-- ! ボタン ============================== -->
          <section class="aside_main tab_cnt current">
            <h2>ボタン</h2>
            <section class="box_btn">
              <div class="btnarea">
                <p>.btnarea</p>
                <a class="btn_">.btn_</a>
                <a class="btn_small">.btn_small</a>
                <a class="btn_large">.btn_large</a>
              </div>
              <div class="btnarea_center">
                <p>.btnarea_center</p>
                <a class="btn_thin">.btn_thin</a>
                <a class="btn_thick">.btn_thick</a>
              </div>
              <div class="btnarea_right">
                <p>.btnarea_right</p>
                <a class="btn_narrow">.btn_narow</a>
                <a class="btn_wide">.btn_wide</a>
              </div>
              <div class="btnarea">
                <a class="btn_full">.btn_full</a>
              </div>
              <div class="btnarea_center">
                <p>カラー</p>
                <a class="btn_gray">.btn_gray</a>
              </div>
              <div class="btnarea_center">
                <p>クラスの組み合わせ</p>
                <a class="btn_small_thin_narrow">.btn_small_thin_narrow</a>
                <a class="btn_large_thick_wide_gray">.btn_large_thick_wide_gray</a>
              </div>
            </section>
          </section>
          
          <!-- ! テーブル ============================== -->
          <section class="aside_main tab_cnt">
            <h2>テーブル</h2>
            <section class="box_table">
              <table>
                <thead>
                  <tr>
                    <th>タイトル</th>
                    <th>タイトル12345</th>
                    <th>タイトル1234567890</th>
                    <th>タイトル123</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   for($i=0;$i<5;$i++) {
                  ?>
                  <tr>
                    <td>コンテンツ</td>
                    <td>コンテンツ</td>
                    <td>コンテンツ</td>
                    <td>コンテンツ</td>
                  </tr>
                  <?php
                   }
                  ?>
                </tbody>
              </table>
              <div class="paging">
                <ul>
                  <li class="off"><a href="" class="prev">prev</a></li>
                  <li class="current"><a href="">1</a></li>
                  <li><a href="">2</a></li>
                  <li><a href="">3</a></li>
                  <li><a href="">4</a></li>
                  <li><a href="">5</a></li>
                  <li><a href="next">next</a></li>
                </ul>
              </div>
            </section>
          </section>
          
          <!-- ! フォーム ============================== -->
          <section class="aside_main tab_cnt">
            <h2>フォーム</h2>
            <section class="box_form">
              <ul class="list_form_200_required">
                <li class="required">
                  <article class="form_box">
                    <div class="form_ttl">
                      お名前
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <span class="unit_2_right">姓</span>
                        <input type="text">
                        <span class="unit_2_right">名</span>
                        <input type="text">
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="form_box">
                    <div class="form_ttl">
                      フリガナ
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <span class="unit_2_right">セイ</span>
                        <input type="text">
                        <span class="unit_2_right">メイ</span>
                        <input type="text">
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="form_box">
                    <div class="form_ttl">
                      性別
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <div class="radio_wrap">
                          <input name="radio_abc" type="radio" id="radio_1">
                          <label for="radio_1">男性</label>
                          <input name="radio_abc" type="radio" id="radio_2">
                          <label for="radio_2">女性</label>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="form_box">
                    <div class="form_ttl">
                      電話番号
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap input_200">
                        <input type="text">
                        <span class="unit_center">-</span>
                        <input type="text">
                        <span class="unit_center">-</span>
                        <input type="text">
                      </div>
                    </div>
                  </article>
                </li>
                <li class="required">
                  <article class="form_box">
                    <div class="form_ttl">
                      メールアドレス
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <input type="text">
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="form_box">
                    <div class="form_ttl">
                      住所
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap input_150">
                        <span class="unit_left">〒</span>
                        <input type="text">
                        <span class="unit_center">-</span>
                        <input type="text">
                      </div>
                      <div class="input_wrap input_150">
                        <div class="select_wrap">
                          <select>
                            <option value="" selected="">都道府県</option>
                            <option>東京都</option>
                            <option>埼玉県</option>
                            <option>千葉県</option>
                          </select>
                        </div>
                      </div>
                      <div class="input_wrap">
                        <input type="text" placeholder="市区町村">
                      </div>
                      <div class="input_wrap">
                        <input type="text" placeholder="丁目番地号">
                      </div>
                      <div class="input_wrap">
                        <input type="text" placeholder="マンション名部屋番号など">
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="form_box">
                    <div class="form_ttl">
                      興味のあるジャンル
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <div class="checkbox_wrap">
                          <input type="checkbox" id="checkbox_1">
                          <label for="checkbox_1">スポーツ</label>
                          <input type="checkbox" id="checkbox_2">
                          <label for="checkbox_2">音楽</label>
                          <input type="checkbox" id="checkbox_3">
                          <label for="checkbox_3">映画</label>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
                <li class="required">
                  <article class="form_box">
                    <div class="form_ttl">
                      お問い合わせの内容
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap input_400">
                        <div class="select_wrap">
                          <select>
                            <option value="" selected="">お問い合わせ内容を選択して下さい</option>
                            <option>不明なことがある</option>
                            <option>製品に不備があったので交換を希望している</option>
                            <option>そのほか</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
                <li class="required">
                  <article class="form_box">
                    <div class="form_ttl">
                      メッセージ
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <textarea></textarea>
                      </div>
                    </div>
                  </article>
                </li>
                <li class="required_none">
                  <article class="form_box">
                    <div class="form_ttl">
                      必須・任意が不要
                    </div>
                    <div class="form_cnt">
                      <p>liに.required_noneを付与して下さい。</p>
                    </div>
                  </article>
                </li>
                <li class="required_none">
                  <article class="form_box">
                    <div class="form_ttl">
                      ボタン横並び配置
                    </div>
                    <div class="form_cnt">
                      <div class="input_wrap">
                        <div class="input_couple">
                          <input type="text" placeholder="キーワード検索">
                          <button class="btn_">検索</button>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article>
                    <div class="btnarea_center">
                      <button class="btn_thick_wide">上記内容で送信する</button>
                    </div>
                  </article>
                </li>
              </ul>              
            </section>
          </section>
          
          <!-- ! スプリット・ギャップ ============================== -->
          <section class="aside_main tab_cnt">
            
            <!-- ! スプリット ============================== -->
            <h2>スプリット</h2>
            <section class="box_split">
              <?php
               for($count=1;$count<10;$count++) {
              ?>
              <h5>ul.split_<?php echo($count); ?></h5>
              <ul class="split_<?php echo($count); ?>">
                <?php
                 for($i=0;$i<$count;$i++) {
                ?>
                <li><article><?php echo($count); ?></article></li>
                <?php
                 }
                ?>
              </ul>
              <?php
               }
              ?>
            </section>
            
            <!-- ! ギャップ ============================== -->
            <h2 style="margin-top: 40px;">ギャップ</h2>
            <section class="box_split">
              <h5>ul.split_3.gap_5</h5>
              <div>
                <ul class="split_3 gap_5">
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                </ul>
              </div>
              <div>
                <ul class="split_3 gap_10">
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                </ul>
              </div>
              <div>
                <ul class="split_3 gap_15">
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                  <li><article>gap</article></li>
                </ul>
              </div>
            </section>
          </section>
          
        </div>
      </div>
    </main>
    
    <!-- ! フッター ============================== -->
    <footer>
      <div class="container">
        <p class="copyright">@2018 Innovation lab.inc</p>
      </div>
    </footer>
    
    <!-- ! スクリプト ============================== -->
    <script>
    </script>
    
    <!-- ! サンプルページ用スタイル ============================== -->
    <style>
      main {padding: 40px 0;}
      h1 {margin: 0 0 30px;}
      h2 {margin: 0 0 15px;}
      .aside_wrap {display: -webkit-flex; display: flex;-webkit-flex-wrap: nowrap; flex-wrap: nowrap;}
      .aside_nav { -webkit-flex: 0 0 200px; flex: 0 0 200px; margin: 0 40px 0 0;}
      .aside_main { -webkit-flex: 1 1 auto; flex: 1 1 auto; padding: 40px;}
    
      /* ボタン */
      .box_btn [class*="btnarea"] {border: 1px dotted #ccc; padding: 10px;}
      [class*="btnarea"] + [class*="btnarea"] {margin: 10px 0 0;}
      [class*="btnarea"] p {margin: 0 0 5px;}
    
      /* タブ分け */
      .tab_wrap { width: 100%;}
      .tab_nav {
        margin: -2px;
        position: relative;
        display: -webkit-flex; display: flex;
        -webkit-flex-direction: column; flex-direction: column;
        -webkit-flex-wrap: wrap; flex-wrap: wrap;
      }
      .tab_nav li {
        overflow: hidden;
        padding: 2px;
      }
      .tab_nav span {
        color: #fff;
        font: 600 16px/1em 'noto sans japanese';
        text-align: center;
        background: #333;
        height: 44px;
        padding: 10px 0 0;
        border-top: 3px solid #333;
        border-left: 3px solid #333;
        border-right: 3px solid #333;
        border-bottom: 1px solid #333;
        display: -webkit-flex; display: flex;
        -webkit-justify-content: center; justify-content: center;
        cursor: pointer;
      }
      .tab_nav li.current [class*="btn_"] {
        color: #222;
        background: #fff;
      }
      .tab_nav li.current span:hover{
        cursor: default;
      }
      .tab_nav li:not(.current) span:hover {
        background: #8EC320;
        border-color: #8EC320;
      }
      .tab_nav li + li span {
      /*   margin: 0 0 0 -1px; */
      }
      .tab_nav .current span {
        color: #333;
        background: #fff;
        height: 45px;
        position: relative;
      }
      .tab_cnt {
        background: #fff;
        display: none;
      }
      .tab_cnt.current {
        display: block;
        clear: both;
      }
      /* フォーム */
      .box_form [class*="btnarea"] {
        margin: 20px 0 0;
      }
      /* スプリット */
      [class*="split_"] article {
        color: #fff;
        font: 300 12px/1em 'noto sans japanese';
        text-align: center;
        padding: 2px 0;
        background: #000;
      }
      [class*="split_"] + [class*="split_"] {
      /*   margin-top: 10px; */
      }
      .box_split li:nth-of-type(2) article{ background: rgba(0,0,0,.8)}
      .box_split li:nth-of-type(3) article{ background: rgba(0,0,0,.7)}
      .box_split li:nth-of-type(4) article{ background: rgba(0,0,0,.6)}
      .box_split li:nth-of-type(5) article{ background: rgba(0,0,0,.5)}
      .box_split li:nth-of-type(6) article{ background: rgba(0,0,0,.4)}
      .box_split li:nth-of-type(7) article{ background: rgba(0,0,0,.3)}
      .box_split li:nth-of-type(8) article{ background: rgba(0,0,0,.2)}
      .box_split li:nth-of-type(9) article{ background: rgba(0,0,0,.1)}
      /* ギャップ */
      .box_split > div {border: 1px dotted #ccc; padding: 10px;}
      .box_split > div + div { margin: 10px 0 0; }  
      .box_split h5 {
        font: 500 13px/1em 'noto sans japanese';
        margin: 10px 0 5px;
      }
    </style>
    <!--  タブ分け  -->
    <script>
    $(function(){
    	$('.tab_nav > li').click(function(){
    		var thisElm = $(this);
    		var thisTabWrap = thisElm.parents('.tab_wrap');
    		var thisTabBtn = thisTabWrap.find('.tab_nav > li');
    		var thisTabContents = thisTabWrap.find('.tab_cnt');
    		
    		var currentClass = 'current';
    		
    		thisTabBtn.removeClass(currentClass);
    		thisElm.addClass(currentClass);
    		
    		var thisElmIndex =  thisTabBtn.index(this);
    		
    		thisTabContents.removeClass(currentClass);
    		thisTabContents.eq(thisElmIndex).addClass(currentClass);
    	});
    });
    </script>
    
  </body>
</html>