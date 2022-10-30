<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
</head>
<style>
  body{
    background-color: #fff;
  }
  .navbar {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }
  .navbar a {
    display: block;
    padding: 8px 10px;
    background-color: transparent;
    color: #B36307;
    text-decoration: none;
    text-transform: uppercase;
    margin: 0 24px;
    font-size: 20px;
  }
  .navbar a:hover {
    color: #8b4e09;
    background: #ededed;
    border-radius: 10px;
    transition: all .5s ease;
  }
</style>
<body>
  <div>
    <div class="navbar">
      <a href="/blog">Anasayfa</a>
      <a href="posts.php">Blog</a>
      <a href="Portfolio.php">Portfolio</a>
      <a href="contact.php">İletişim</a>
      <a href="cms/login.php">Login</a>
    </div>
    <style>

    </style>
  </div>
  </div>

  {{content}}
</body>
</html>
