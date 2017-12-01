<html>
<head>
	<style color="text/css">
  html {
    height: 100%;
    box-sizing: border-box;
  }

  *,*:before,*:after {
    box-sizing: inherit;
  }

  body {
    position: relative;
    margin: 0;
    padding-bottom: 6rem;
    min-height: 100%;
    font-family: "Helvetica Neue", Arial, sans-serif;
  }

  footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    background-color: #efefef;
    text-align: center;
  }
  footer table td{
    padding: 5px 20px;
    font-size: 80%;
  }

  footer .reklama{
    font-size: 110%;
    margin-left: 20px;
  }
  header .for_city{
    border: 1px;
    background-color: #2F4F4F;
    color: white;
    font-size: 90%;
    padding: 2px 20px;
  }

  header select{
    background-color: #2F4F4F;
    color: #cc7712;
    font-weight: bold;
  }

  header .start a {
    text-decoration: none;
    font-size: 130%;
    color: #2F4F4F;
    padding: 40px;
  }


  header .start {
    display: inline-block;
    padding: 0px 30px;
  }

  footer a:hover {
    text-decoration: none;
    color: red;
  }

  header .navbar{
    border: 1px solid #DCDCDC;
    background-color: #efefef;
    margin: 20px 0px 20px -20px;
    width: 101.6%;
    overflow: hidden;
  }
  header .navbar a{
    margin-left: 25px;
    padding: 0px 8px;
    text-decoration: none;
    color: dimgrey;
  }

  header .start a:hover ,header .navbar a:hover{
      color: maroon;
      text-decoration: underline;
  }

  header form, input{
    display: inline-block;
    padding-left: 15px;
  }

		.main{
			border:1px solid black;
      background-color: #aaedd4;
			border-radius: 10px;
			width: 200px;
      margin: 0% 10%;
      padding: 0% 2%;
		}

    .row4{
      border:0.5px solid #c9527c;
      border-radius: 10px;
      background-color: #d4fced;
      margin: 10px 0px;
      width: 50px;
      padding: 4px;
          }

	</style>
</head>
<body>
  <header>
    <div class="for_city">
      <div> Ваш регион доставки: город <select>
        <option>Алматы</option>
        <option>Астана</option>
        <option disabled>Шымкент</option>
        <option disabled>Караганда</option>
        </select></div>
    </div>
    <div class = "start">
      <a href="">Женщинам</a>
      <a href="">Мужчинам</a>
      <a href="">Детям</a>
      <img height="100px" width="170px" src="logo.png"/>
      <a href="log_in.html">Войти</a>
      <a href="">Корзина</a>
    </div>

    <div class = "navbar">
      <a href="">Осень 2017</a>
      <a href="">Одежда</a>
      <a href="">Обувь</a>
      <a href="">Аксессуары</a>
      <a href="">Бренды</a>
      <a href="">Премиум</a>
      <a href="">Спорт</a>
      <a href="">Красота</a>
      <a color="red" href="">Распродажа %</a>
      <form method="get" action="/search" target="_blank">
      <input name="q" id="form-query" value="" placeholder="поиск ">
      <input src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png" type="image" style="vertical-align: bottom; padding: 0;"/></form>
    </div>
  </header>

<div class="main">
    <?php
    $brand= $_GET["brand"];
    $cost= $_GET["cost"];
    $color=$_GET["color"];
    $year=$_GET["year"];
    $att=$_GET["att"];
    print "
    <div class='row1'>
    	<h4> ".$brand."</h4>
    	<div class='row2'>".$cost." </div>
    </div><br/>
    <div class='row3'>
    	<div class='row4'>".$year."</div>
    	<div class='row5'>".$color." </div>
    </div><br/>";
    foreach ($att as $value) {
    	echo  $value.", ";
    }
    ?>
</div>
<footer>
  <table>
  <tr><td><div>@2006-2017 ТОО "ЛаМода"</div></td>
      <td><a href="#">О сайте,  </a><a href="#"> газете </a></td>
      <td><div>Следите за нашими новостями </div></td>
      <td><a href="#">Мобильные приожения </a><a href="#"> Мобильная весия сайта </a></td>
  </tr>

  <tr><td><a href="#" class='active'>Пользовательское соглашение </a></td>
      <td><a href="#">Написать письмо</a><a href="#">Карта сайта </a></td>
      <td>......</td>
  </tr>

  <tr><td><a href="#">Правила размещения объявений </a></td>
      <td><a href="#">Работа в "Колеса Крыша Маркет" </a></td>
      <td>.......</td>
      <td><div class="reklama">Рекломедателям  <a href="#"> посвящается</a> </div></td>
  </tr>
</table>

</footer>
</body>
</html>
