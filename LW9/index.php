<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <meta charset="UTF-8" />
  <title>Иванова Анна</title>
  <script src="js/savingForm.js" defer></script>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header class="menu">
  <a class="menu about_me_button">Обо мне</a>
  <a class="menu hobby_button">Мое хобби</a>
  <a class="menu video_button">Любимые фильмы</a>
</header>
<div class="main_background"></div>
<main class="main_block">
  <div class="left_column">
    <img class="selfie" src="images/selfie.jpg" alt="Мое фото"/>
    <div>
      <div class="authors_container">
        <h3 class="lists_title">Любимые писатели:</h3>
        <ul class="list authors_list">
          <li>Роберт Шекли</li>
          <li>Чак Паланик</li>
          <li>Ирвин Уэлш</li>
          <li>Стивен Кинг </li>
        </ul>
      </div>
      <div class="films_container">
        <h3 class="lists_title">Любимые фильмы:</h3>
        <ol class="list films_list">
          <li class="first_string">12 обезьян</li>
          <li>Лестница Иакова</li>
          <li>Экстаз</li>
          <li>Солнцестояние</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="quote_block">
    <p class="quote">Почему, мистер Андерсон, почему?</p>
    <p class="quote_author">Агент Смит</p>
  </div>
  <div class="right_column">
    <div>
      <h1 class="about_me_title">Иванова Анна</h1>
      <img class="rectangle" src="images/rectangle.png" alt="Прямоугольник"/>
      <div class="about_me">
        <p>
          Меня зовут Иванова Анна. Окончила МРМТ по специальности иформационная безопасность.
        </p>
      </div>
      <div>
        <h2 class="hobby_and_films_title hobby_title">Мое хобби</h2>
        <p class="hobby">Я увлекаюсь рисованием. Люблю играть в компьютерные игры.</p>
      </div>
      <a class="link" href="https://vk.com/id537196608">Напиши мне</a>
      <hr class="link_line">
    </div>
  </div>
</main>
<div class="films_description_block">
  <h2 class="hobby_and_films_title films_title">Любимые фильмы</h2>
  <div class="twelve_monkeys">
    <img class="image_film" src="images/12_monkeys.jpg" alt="12 обезьян"/>
    <h4 class="all_films_titles">12 обезьян</h4>
    <p class="description">
      2035 год... Чудовищный, неизлечимый вирус уничтожил пять миллиардов человек, то есть 99% населения Земли. 
      Оставшиеся в живых люди вынуждены обитать под землей. Уголовник Джеймс Коул добровольно отправляется в опасное путешествие на машине времени.
      Он должен попасть в прошлое, чтобы помочь ученым найти источник возникновения этого ужасного вируса и раскрыть загадку таинственных «Двенадцати обезьян»...
    </p>
  </div>
  <div class="jacobs_ladder">
    <img class="image_film" src="images/jacobs_ladder.jpg" alt="Лестница Иакова"/>
    <h4 class="all_films_titles">Лестница Иакова</h4>
    <p class="description">
      Иаков Сингер возвращается в Нью-Йорк после ранения во Вьетнаме. Терзаемый воспоминаниями о сыне и ужасах войны Иаков постепенно теряет контроль над реальностью. 
      Оказывается, что только его друг Луис является единственным человеком, на которого Иаков может рассчитывать. 
      Дело принимает мрачный оборот, когда он узнает, что его бывшие сослуживцы страдают от таких же галлюцинаций.
    </p>
  </div>
  <div class="climax">
    <img class="image_film" src="images/climax.jpg" alt="Экстаз"/>
    <h4 class="all_films_titles">Экстаз</h4>
    <p class="description">
      Выпускники академии современного танца решают устроить прощальную вечеринку. 
      Однако таинственным образом под нарастающий ритм музыки почти всех охватывает нездоровая эйфория, которой невозможно сопротивляться. 
      Оказывается, кто-то подмешал в сангрию психоделики, и теперь участники этой безумной вечеринки постепенно начинают слетать с катушек.
    </p>
  </div>
  <div class="midsommar">
    <img class="image_film" src="images/midsommar.png" alt="Солнцестояние"/>
    <h4 class="all_films_titles">Солнцестояние</h4>
    <p class="description">
      День летнего солнцестояния – древний праздник, который во всех культурах окутан мистическим ореолом. 
      В отрезанном от цивилизованного мира шведском поселении в этот день проводятся уникальные обряды с многовековой традицией. 
      Именно туда отправляется группа молодых американских студентов-антропологов, прихватив с собой девушку одного из них. 
      Однако вскоре после прибытия друзья выясняют, что местные обряды далеко не безобидны
    </p>
  </div>
  <button class="all_films_button">Все фильмы</button>
</div>
<div>
  <hr class="line left_line">
  <h2 class="write_me">НАПИШИ МНЕ</h2>
  <hr class="line">
  <div class="clear"></div>
  <form method="POST" id="form" class="write_me_form" name="write_me">
    <label for="name" class="form_text form_text_required">Ваше имя</label>
    <input required type="text" id="name" name="name" class="field name_field input_text all_fields isValidate"/>
    <label for="email" class="form_text form_text_required">Ваш email</label>
    <input required type="text" id="email" name="email" class="field email_field input_text all_fields isValidate"/>
    <label for="country" class="form_text">Откуда вы?</label>
    <select name="country" id="country" class="country_field all_fields">
      <option value="rus" class="input_text">Россия</option>
      <option value="uk" class="input_text">Украина</option>
      <option value="bel" class="input_text">Беларусь</option>
    </select>
    <p class="form_text gender_margin">Ваш пол</p>
      <input type="radio" id="male" class="gender_radio" name="gender" value="male" checked>
      <label for="male" class="gender">Мужской</label>
      <input type="radio" id="female" class="gender_radio gender_radio_female" name="gender" value="female">
      <label for="female" class="gender">Женский</label>
    <label for="message" class="form_text message_margin form_text_required">Ваше сообщение</label>
    <textarea required name="message" id="message" class="message input_text all_fields"></textarea>
    <div class="send_block">
      <input type="submit" value="Отправить" class="send">
    </div>
    <p class="success_message" id="success_message">Ваше сообщение успешно отправлено</p>
  </form>
</div>
<footer class="volgatech">© 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО <q>ПГТУ</q></footer>
</body>
</html>
