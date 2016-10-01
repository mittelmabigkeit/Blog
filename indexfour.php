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
    <h1> LOREM IPSUM</h1>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. </p>
    </div>  
    <div class="left-block">         <!-- right block -->
    <a href="index.php">Главная</a>
    <ul>
     <li><a href="indexone.php">Статья 1</a></li>
     <li><a href="indextwo.php">Статья 2</a></li>
     <li><a href="indexthree.php">Статья 3</a></li>
     <li><a href="indexfour.php">Статья 4</a></li>
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