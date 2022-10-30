<?php
  require_once 'db.php';

  # SQL INJECTION PROTECTION
  $db->query("INSERT INTO blog (name, title, text) VALUES ('Ozgur', 'Lorem 1234', 'lorem 12345667')");
  $query = $db->query("SELECT * FROM blog");
  $data = $query->fetch_all(MYSQLI_ASSOC);
  echo '<pre>';
  die(var_dump($data));
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BLog Sayfası</title>

</head>
<body>
  <div class="background">
    <style>
      body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      .title {
        display: block;
        color: skyblue;
      }
      .title + input, .title + textarea {
        width: 100%;
        min-height: 45px;
        font-size: 18px;
      }.navbar{
        display:flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
       }
       .navbar a{
         display:block;
         padding: 8px 10px;
         background-color:transparent;
         color: #B36307;
         text-decoration: :none;
         text-transform: uppercase;
         margin: 0 24px;
         font-size: 20px;
       }
       .navbar a:hover {
         color: #8b4e09;
         background-color: #ededed;
         border-radius: 10px;
         transition: all.5s ease;
       }
       .img-container img {
         width: auto;
         height: 256px;
         margin-top: 30px;
         margin-left: 25px;
         object-fit: cover;
       }



    </style>
  </div>
    <div class="navbar">
      <a href="/blog">Ana Sayfa</a>
      <a href="posts.php">Blog</a>
      <a href="Portfolio.php">Portfolio</a>
      <a href="contact.php">İletişim</a>
    </div>
    <div class="img-container">
      <img src="images/kayacık.jpeg" alt="Dalaman Kayacık">
      <img src="images/kum_zambagı.jpeg" alt="Kum Zambağı">
    </div>
</body>
</html>





