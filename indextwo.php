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
    <h1> Страдания юного Вертера </h1>
    <p> Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию, веяние вселюбящего, судившего нам парить в вечном блаженстве, когда взор мой туманится и все вокруг меня и небо надо мной запечатлены в моей душе, точно образ возлюбленной, - тогда, дорогой друг, меня часто томит мысль: "Ах! Как бы выразить, как бы вдохнуть в рисунок то, что так полно, так трепетно живет во мне, запечатлеть отражение моей души, как душа моя - отражение предвечного бога!" Друг мой... Но нет! Мне не под силу это, меня подавляет величие этих явлений.Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. </p>
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