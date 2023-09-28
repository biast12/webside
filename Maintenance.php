<?php
header(($_SERVER['SERVER_PROTOCOL'] ?? 'HTTP/1.0') . ' 503 Service Temporarily Unavailable', true, 503);
header('Retry-After: 3600');
header('X-Powered-By:');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="https://biast12.info/img/icon/archive_logo_bw.svg" type="image/jpg" />
  <title>The Archives: Maintenance...</title>
  <!-- Goggle -->
  <meta name="type" content="website">
  <meta name="title" content="Maintenance in progress">
  <meta name="url" content="https://biast12.site/">
  <meta name="author" content="Biast12">
  <meta name="description"
    content="Sorry for the inconvenience but i'm performing some maintenance right now. Please check back later. you can join my support server (https://discord.gg/ERFffj9Qs7) to know when the maintenance is done">
  <meta name="keywords" content="Archive, Archives, Apex, Apex Legends, Legends, Respawn, Biast12, Models, Assets">
  <meta name="image" content="https://biast12.info/img/icon/archive_logo_bw.svg">
  <meta name="theme-color" content="#FF0000">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Maintenance in progress">
  <meta property="og:url" content="https://biast12.site/">
  <meta property="og:description"
    content="Sorry for the inconvenience but i'm performing some maintenance right now. Please check back later. you can join my support server (https://discord.gg/ERFffj9Qs7) to know when the maintenance is done">
  <meta property="og:image" content="https://biast12.info/img/icon/archive_logo_bw.svg">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary">
  <meta property="twitter:title" content="Maintenance in progress">
  <meta property="twitter:url" content="https://biast12.site/">
  <meta property="twitter:description"
    content="Sorry for the inconvenience but i'm performing some maintenance right now. Please check back later. you can join my support server (https://discord.gg/ERFffj9Qs7) to know when the maintenance is done">
  <meta property="twitter:image" content="https://biast12.info/img/icon/archive_logo_bw.svg">
  <style type="text/css">
    * {
      box-sizing: border-box;
    }
    html,
    body {
      height: 100%;
      margin: 0;
      background: #000;
    }
    main {
      height: 100%;
      margin: 0 auto;
      max-width: 700px;
      padding: 30px;
      display: table;
      text-align: center;
    }
    main>* {
      display: table-cell;
      vertical-align: middle;
    }
    a:-webkit-any-link {
      color: #fff;
      font-weight: bold;
    }
    body {
      font: 20px Helvetica, sans-serif;
      color: #fff;
    }
    @keyframes blink {
      50% {
        color: transparent
      }
    }
    .dot {
      animation: 1s blink infinite
    }
    .dot:nth-child(2) {
      animation-delay: 250ms
    }
    .dot:nth-child(3) {
      animation-delay: 500ms
    }
  </style>
</head>
<body>
  <main>
    <div>
      <h1>Maintenance in progress<span class="dot">.</span><span class="dot">.</span><span class="dot">.</span></h1>
      <p>Sorry for the inconvenience but i'm performing some maintenance right now. Please check back later. you can
        join my <a href="https://Biast12.info/support" target="_blank">support server</a> to know when the maintenance
        is done</p>
    </div>
  </main>
</body>
</html>