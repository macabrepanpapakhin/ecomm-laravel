<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-comm Project</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>
<body>
  {{View::make('header')}}
  @yield('content') 
  {{View::make('footer')}}
</body>
<style>
  .custom-login{
    height:500px;
    padding-top: 100px;
    padding-left:200px;
  }
 .slider-image{
    width:800px;
   
   height:400px;
  }
  .custom-product{
    height:600px;
    padding-bottom: 200px;
  }
  .custom-width{
    width: 90%;
  }
  .slider-text{
    background-color: #35443585 !important ;
  }
  .limit{
    width:800px;
  }
  .trending-image{
   
    height: 100px;
  }
  .trending-items{
    float:left;
    width: 33.3%;
  }
  .trending-wraper{
   margin-bottom: 100px;
  }
  .m-tt{
    margin-top: 50px;
  }
  .details-img{
    height:200px;
  }
  .marginRight{
    margin-right: 100px;
  }
  .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .mb-tt{
      margin-bottom: 50px;
    }
</style>
</html>