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

.main_body{
  margin: 5%;
  font-size: 140%;
  font-weight: bold;
}

.main_body a{
  color: #2F4F4F;
  text-decoration: none;
  font-size: 180%;
}
.main_body a:hover{
  color: maroon;
  text-decoration: none;
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

<div class="main_body">
  <a href="news.php?category=vsshow">Victoria Secret news</a> |
  <a href="news.php?category=milan">Milano news</a>|
  <a href="news.php?category=ny">NewYork news</a>|
  <a href="news.php?category=paris">Paris news</a>|
  <br/><br/>
  <a href="news.php?category=vsshow&format=json">VSshow news (JSON)</a> |
  <a href="news.php?category=milan&format=json">Milano news (JSON)</a><br/><br/>

  <?php
  $news = [
  "vsshow"=>["Victoria's Secret is an American designer, manufacturer, and marketer of women's premium lingerie, womenswear, and beauty products. With 2012 sales of $6.12 billion",
    "By 2006, Victoria's Secret's 1,000 stores across the United States accounted for one third of all purchases in the intimate apparel industry."],
  "milan"=>["Milan Fashion Week was a day shorter than usual. The schedule was definitely more packed—especially Saturday, when the prolific Dolce & Gabbana put on a Secret Show of new eveningwear at 10:00 p.m. that was young, fun, and joyous—but at least the sun was shining.",
    "Milan Fashion Week, established in 1958, is part of the global Big Four fashion weeks, the others being Paris Fashion Week, London Fashion Week and New York Fashion Week. The schedule begins with New York, followed by London, and then Milan, and ending with Paris."],
  "ny"=>["In 1664, the city was named after then Duke of York, and future King of England James II. James had been named by his older brother Charles II as proprietor of the former territory of New Netherlands and its main city of New Amsterdam, which had recently been seized from the Dutch.",
    "During the Wisconsinan glaciation, the New York City region was situated at the edge of a large ice sheet over 1,000 feet (300 m) in depth. The ice sheet scraped away large amounts of regolith, leaving the bedrock that serves as the geologic foundation for much of New York City today. Later on, movement of the ice sheet would contribute to the separation of what are now Long Island and Staten Island."],
  "paris"=>["As the fashion pack arrives in the french capital for Paris Fashion Week, see the best street style looks and trends from the streets outside the shows.",
    "The final round of Spring ’18 shows is here, and the street style in Paris never disappoints. Phil Oh is on the ground to capture the best looks in the City of Light, from top models in head-to-toe Dior to chic locals in no-fuss jeans and button-downs. Expect to see lots of suiting, too, and maybe even a catsuit. And while it’s almost impossible to find a bad setting in Paris—the Tuileries, the architecture, the cafés!—this week’s venues are providing some pretty spectacular backdrops.  "]
  ];
  //$category = ["vsshow"];
  $category = null;
  if(isset($_GET['category'])){
      $category = $_GET['category'];
  	$isTouch = isset($_GET['format']);
  	if($isTouch){
  		echo json_encode($news[$category]);
  	}
  	else{
  		print $news[$category][0]."<hr>".$news[$category][1];
  	}
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
