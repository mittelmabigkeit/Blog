<!doctype html>
<html lang="en">
<head>
<title>BLOG</title>
   <meta charset="Utf-8">
   <link href="css/style.css" rel="stylesheet">  <!--style connect -->
   <link rel="stylesheet" href="css/fonts/.css">  <!--fonts connect -->
   <style>
   body {
    background-image: url(img/bg.jpg); 
   }
   @font-face {
    font-family: RobotoSlab-Bold; /* Гарнитура шрифта */
    src: url(css/fonts/RobotoSlab-Bold.ttf); /* Путь к файлу со шрифтом */
   }
   h1 {
    font-family: RobotoSlab-Bold;
   } 
   @font-face {
    font-family: RobotoSlab-Regular; /* Гарнитура шрифта */
    src: url(css/fonts/RobotoSlab-Regular.ttf); /* Путь к файлу со шрифтом */
   }
   p {
    font-family: RobotoSlab-Regular;
   } 

  </style>
</head>
<body>
    <div class="logo-block">   <!-- top block -->
    <a href="index.php"><img src="img/logo.png"></a> 
    </div>
    <div class="login-block">         <!-- login-block-->   
	 <? if (!isset($_REQUEST['GO']))
{?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>">
        <p>Логин</p><input type="text" name = "LOGIN" size="15" value=""/><br>
        <p>Пароль</p><input type="password" name = "PASS" size="15" value=""/><br>
        <br>
            <input type="submit" name="GO" value="Войти">
    </form>
<?}
   else {
        if ($_REQUEST['LOGIN']=="root"&&$_REQUEST['PASS'] == "111")
        {
            echo "Succes for user $_REQUEST[LOGIN]";
        }
        else
        {
            echo "Acces denied";
        }
      }
    ?>
    <a href="reg.php">Регистрация</a>
	</div>
    <div class="central-block">      <!-- central block -->
    </div>  
    <div class="left-block">         <!-- right block -->
    <a href="index.php">Главная</a>
    <ul>
    <form>
     <button><a href="">Новая статья</a></button>
    </form>
     <li><a href="indexone.php">Статья 1</a></li>
     <form>
      <button><a href="">Редактировать</a></button>
      <button><a href="">Удалить</a></button>
     </form>
     <li><a href="indextwo.php">Статья 2</a></li>
     <form>
      <button><a href="">Редактировать</a></button>
      <button><a href="">Удалить</a></button>
     </form>
     <li><a href="indexthree.php">Статья 3</a></li>
     <form>
      <button><a href="">Редактировать</a></button>
      <button><a href="">Удалить</a></button>
     </form>
     <li><a href="indexfour.php">Статья 4</a></li>
     <form>
      <button><a href="">Редактировать</a></button>
      <button><a href="">Удалить</a></button>
     </form>
   </ul>
   	</div>                                                               
    <div class="right-block">        <!-- right block -->
    <div class="banner">
    <img src="img/14655755576320.png">
    </div>
    <div class="bannerone">
    <img src="img/14598071065480.jpg">
    </div>
    <div class="bannertwo">
    <img src="img/TrMLzysVOP4.jpg">
    </div>
    <div class="bannerthree">
    <img src="img/14547073552830.jpg">
    </div>
   	</div>                                                                  
    <div class="bottom-block">        <!-- bottom block -->
    <p>Контакты: 88005553535</p>
    <p>О нас: молодцы мы </p>
    </div>                                                                  

</body>
</html>