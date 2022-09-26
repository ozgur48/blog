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
        background-image: url('blog.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      .title {
        display: block;
        color: red;
      }
      .title + input, .title + textarea {
        width: 100%;
        min-height: 45px;
        font-size: 18px;
      }
    </style>
  </div>
  <form action="" method="post">
    <div>
      <strong class="title">Title:</strong>
      <input type="text" name="title" id="" class="form-control">
    </div>
    <div>
      <strong class="title">Details:</strong>
      <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" value="share" class="btn btn-dark">Submit</button>
  </form>



</body>
</html>





