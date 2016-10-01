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
    <h1> За словесными горами </h1>
    <p> Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. Даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. Великий Оксмокс предупреждал ее о злых запятых, диких знаках вопроса и коварных точках с запятой, но текст не дал сбить себя с толку. Он собрал семь своих заглавных букв, подпоясал инициал за пояс и пустился в дорогу. Взобравшись на первую вершину курсивных гор, бросил он последний взгляд назад, на силуэт своего родного города Буквоград, на заголовок деревни Алфавит и на подзаголовок своего переулка Строчка. Грустный реторический вопрос скатился по его щеке и он продолжил свой путь. По дороге встретил текст рукопись. Она предупредила его: «В моей стране все переписывается по несколько раз. Единственное, что от меня осталось, это приставка «и». Возвращайся ты лучше в свою безопасную страну». Не послушавшись рукописи, наш текст продолжил свой путь. Вскоре ему повстречался коварный составитель рекламных текстов, напоивший его языком и речью и заманивший в свое агенство, которое использовало его снова и снова в своих проектах. И если его не переписали, то живет он там до сих пор.Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные члены предложения залетают прямо в рот. Даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. </p>
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