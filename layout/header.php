<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
       integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <style>
      body {
        background-color: rgb(36, 0, 52);
      }
  
      .navbar {
        background-color: #58426e;
        height: 100px;
      }

      .nav-item::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #fff;
        transition: width .3s;
    }

    .nav-item:hover::after {
        width: 100%;
        transition: width .3s;
    }
  
  
      footer {
        background-color: #58426e;
      }

      .btn{
        background-color: #58426e;
      }

      .img-fluid{
        padding-top: 30px;
        padding-bottom: 30px;
      }

    </style>
  
  </head>
  </html>
