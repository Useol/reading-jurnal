<? include $_SERVER["DOCUMENT_ROOT"]."/book/header.php" ?>
<?
$page = $_GET['page'];
?>
<script src="../book/js/book_list.js" charset="utf-8"></script>
<link rel="stylesheet" href="../book/css/book_list.css">

<section id="book_list">
<div class="grid">
  <?
    if($page === '1'){?>
      <div class="box">
        <a href="../book/in/8/content.php" class="inner_a">
          <img src="../book/img/book_list_8.jpg" alt="">
          <h2>보이드</h2>
          <p>우주의 텅 빈 공간, 거기 무엇이 있었는가 진공의 역사로 알아본 우주 탄생의 비밀
          </p>
        </a>
      </div>
      <div class="box">
        <a href="../book/in/7/content.php" class="inner_a">
          <img src="../book/img/book_list_7.jpg" alt="">
          <h2>사이언스 소믈리에</h2>
          <p>2012년 한해 과학계에는 어떤 이슈들이 생겼는지, 일상에서 접하게 되는 숱한 일들 중에 숨어 있는 과학의 원리들은 어떤 것들이 있는지 저자는 어려운 과학이야기를 쉬운 언어로 간명하게 전해준다. 또한 부록으로 스쳐 지나기 쉬운, 2012년 한해 세상을 떠난 과학계의 석학들의 업적을 꼼꼼히 짚어주어 그 깊이를 더했다.
          </p>
        </a>
      </div>
      <div class="box">
        <a href="../book/in/5/content.php" class="inner_a_a">
          <img src="../book/img/book_list_5.jpg" alt="인간관계론">
          <h2>데일카네기 - 인간관계론</h2>
          <p>북유럽 신화에 등장하는 많은 신들이 곧 마블 히어로즈들의 원형이란 사실을 알고 나면, 마블 팬들의 영화를 보는 즐거움은 배가 되고, 지식은 더욱 풍요해진다. 그리하여 아마존 독자들은 이렇게 말한다. “마블 영화팬이라면 반드시 이 책을 읽어라. 이 책의 독서 경험이 곧 마블 영화를 가장 재밌게 즐길 수 있는 최고의 방법이다."
          </p>
        </a>
      </div>
      <div class="box">
        <a href="#" class="inner_a">
          <img src="../book/img/book_list_6.jpg" alt="외계생명체에 관해 과학이 알아낸 것들">
          <h2>외계생명체에 관해 과학이 알아낸 것들</h2>
          <p>천문학자, NASA연구원, 유전학자, 수학자까지 세계 최고의 과학자들이 밝혀낸 외계인의 진실
          </p>
        </a>
      </div>
      <div class="box">
        <a href="#" class="inner_a">
          <img src="../book/img/book_list_1.jpg" alt="칼세이건-코스모스">
          <h2>칼 세이건이 펼쳐 보이는 대우주의 신비</h2>
          <p>전 세계 60개국, 6억 시청자, 600만 독자를 사로잡은 최고의 과학 책 『코스모스(Cosmos)』를 특별판으로 다시 만난다.</p>
        </a>
      </div>
      <div class="box">
        <a href="#" class="inner_a">
          <img src="../book/img/book_list_2.jpg" alt="군주론">
          <h2>마키아벨리의 군주론</h2>
          <p>마키아벨리 전공 학자가 번역에 참여한 <군주론>의 이탈리아어 원전 번역판이다. 마키아벨리는 <군주론>에서 정치 행위가 종교적 규율이나 전통적인 윤리적 가치로부터 자유로워야 한다고 주장해 근대 현실주의 정치사상을 최초로 주창한 인물로 평가받는다. “초판 번역본 역자 후기”와 “제2판 개역본 역자 후기”를 보면 알 수 있듯이 이 번역본은 한 번의 작업으로 이루어진 번역서가 아니다. 많은 시간, 많은 사람들의 손을 거쳐 나온 작품이다.
          </p>
        </a>
      </div>
      <div class="box">
        <a href="#" class="inner_a">
          <img src="../book/img/book_list_3.jpg" alt="낭만적연애와그후의일상">
          <h2>"낭만이 저물고 난 뒤"</h2>
          <p>알랭 드 보통 장편소설. 사랑이 이루어지고 나면 연인들에게는 무슨 일이 벌어질까? 알랭 드 보통이 21년 만에 내놓은 이 소설은 결혼한 한 커플의 삶을 통해 일상의 범주에 들어온 사랑에 대해 통찰한다.
          </p>
        </a>
      </div>
      <div class="box">
        <a href="#" class="inner_a">
          <img src="../book/img/book_list_4.jpg" alt="북유럽신화">
          <h2>마블중에 토르를 제일 좋아해서 봤다.</h2>
          <p>북유럽 신화에 등장하는 많은 신들이 곧 마블 히어로즈들의 원형이란 사실을 알고 나면, 마블 팬들의 영화를 보는 즐거움은 배가 되고, 지식은 더욱 풍요해진다. 그리하여 아마존 독자들은 이렇게 말한다. “마블 영화팬이라면 반드시 이 책을 읽어라. 이 책의 독서 경험이 곧 마블 영화를 가장 재밌게 즐길 수 있는 최고의 방법이다.""
          </p>
        </a>
      </div>
    <?
    }
  ?>
</div>
<div class="page">
  <a href="/book/book_list.php?page=1"<?if($page === "1"){?>class="on"<?}else{?><?}?>>1</a>
  <a href="/book/book_list.php?page=2"<?if($page === "2"){?>class="on"<?}else{?><?}?>>2</a>
  <a href="/book/book_list.php?page=3"<?if($page === "3"){?>class="on"<?}else{?><?}?>>3</a>
  <a href="/book/book_list.php?page=4"<?if($page === "4"){?>class="on"<?}else{?><?}?>>4</a>
  <a href="/book/book_list.php?page=5"<?if($page === "5"){?>class="on"<?}else{?><?}?>>5</a>
</div>
</section>
