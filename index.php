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
        
        <!-- ! サンプルなので削除して下さい ============================== -->
        <a href="<?php echo(HOMEURL); ?>sample" class="btn_small" style="margin: 60px 0 0;">サンプルページ</a>
        <!-- ! /サンプルなので削除して下さい ============================== -->
        
      </div>
    </main>  
  
    <!-- ! フッター ============================== -->
    <footer>
      <div class="container">        
        <p class="copyright">@2018 Innovation lab.inc</p>
      </div>
    </footer>
    
    <!-- ! スクリプト ============================== -->
    <!-- ファイルアップロード -->
    <script>
      var inputs = document.querySelectorAll( 'input[type="file"]' );
        Array.prototype.forEach.call( inputs, function( input )
        {
        	var label	 = input.nextElementSibling,
        		labelVal = label.innerHTML;
        
        	input.addEventListener( 'change', function( e )
        	{
        		var fileName = '';
        		if( this.files && this.files.length > 1 )
        			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        		else
        			fileName = e.target.value.split( '\\' ).pop();
        
        		if( fileName )
        			label.querySelector( 'span' ).innerHTML = fileName;
        		else
        			label.innerHTML = labelVal;
        	});
        });
    </script>
    
  </body>
</html>