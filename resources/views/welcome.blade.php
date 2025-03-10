<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="png" href="{{ asset('foto/del.png') }}">
    <title>SIPA</title>
    <link rel="stylesheet" href="{{ asset('css/nafbar.css') }}">
</head>
<body>
    <aside>
        <button class="menu-btn fa fa-chevron-left"></button>
        <a href="/" class="logo-wrapper">
          <span class="fa-brands fa-uikit"></span>
          <span class="brand-name">SIPA</span>
        </a>
        <div class="separator"></div>
        <ul class="menu-items">
          <li><a href="#"><span class="icon fa fa-house"></span><span class="item-name">Dashboard </span></a><span
              class="tooltip">Dashboard </span>
          </li>
          <li><a href="#"><span class="icon fa fa-layer-group"></span><span class="item-name">Bimbingan</span></a>
            <span class="tooltip">Bimbingan</span>
          </li>
          <li><a href="#"><span class="icon fa fa-chart-line"></span><span class="item-name"> Lock Activity</span></a>
            <span class="tooltip"> Lock Activity</span>
          </li>
          <li><a href="#"><span class="icon fa fa-chart-simple"></span><span class="item-name">Leaderboard</span></a>
            <span class="tooltip">Leaderboard</span>
          </li>
          <li><a href="#"><span class="icon fa fa-user"></span><span class="item-name">Diskusi</span></a>
            <span class="tooltip">Diskusi</span>
          </li>
          <li><a href="#"><span class="icon fa fa-gear"></span><span class="item-name">Settings</span></a>
            <span class="tooltip">Settings</span>
          </li>
          <li><a href="#"><span class="icon fa fa-comment-dots"></span><span class="item-name">Contact</span></a>
            <span class="tooltip">Contact</span>
          </li>
        </ul>
      </aside>
      <main>

      </main>
</body>

    <script>
    const menuBtn = document.querySelector(".menu-btn");
menuBtn.addEventListener("click", (e) => {
  document.body.classList.toggle("collapsed");
  e.currentTarget.classList.toggle("fa-chevron-right");
  e.currentTarget.classList.toggle("fa-chevron-left");
})
</script>
</html>
