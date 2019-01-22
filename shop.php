<!DOCTYPE html>
<html lang="en" ng-app="shopApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MobShop</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="split.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="shop.css">

    <script src="lib/angular.min.js"></script>




</head>

<body ng-controller="shopController">
    <div class="header2 ">
        <div class="wrapper">
            <nav id="navbar">
                <div class="logo">
                    <h1>Mob<span id="logo-span">Shop</span> </h1>
                </div>
                <ul id="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Prijava/Registracija</a></li>
                    <li id="list-cart"><a href="#"><i class="fas fa-shopping-cart"></i><span id="cart-badge" class="badge badge-light">0</span></a></li>
                    <li><a href="#">Guest <i class="fas fa-user"></i></a></li>
                </ul>
                <div class="clear"></div>
            </nav>
        </div>
    </div>

    <div class="shop-title">
        <h2>SHOP</h2>
    </div>

    <main>
        <div class="shop-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <div class="list-group category">
                        <h3>Brand</h3>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> samsung</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> apple</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> sony</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> huawei</label>
                        </div>
                    </div>
                    <div class="list-group category">
                        <h3>Ram</h3>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 2GB</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 4GB</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 8GB</label>
                        </div>
                    </div>
                    <div class="list-group category">
                        <h3>Kapacitet</h3>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 8GB</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 16GB</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 32GB</label>
                        </div>
                        <div class="list-group-item checkbox">
                            <label for=""><input type="checkbox"> 64GB</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 shop-products">
                    <div class="product-category">
                        <input type="text" class="form-control form-control-lg" ng-model="searchProduct" id="search"
                            aria-describedby="searchHelp" placeholder="Search">
                            
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6" ng-repeat="product in products | filter: searchProduct">
                            <div class="product-top text-center">
                                <img ng-src="{{product.uredaj_slika}}" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>{{product.uredaj_ime}}</h4>
                                <p>{{product.uredaj_cijena | currency: 'KM '}}</p>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-top text-center">
                                <img src="honor.png" alt="product-1">
                                <div class="overlay">
                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Pogledaj detalje"
                                        class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </button>

                                    <button type="button" data-toggle="tooltip" data-placement="left" title="Dodaj u korpu"
                                        class="btn btn-info">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-bottom text-center">
                                <h4>Product-1</h4>
                                <p>$119,99</p>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h2>Mob<span>Shop</span></h2>
                    <p><i class="fab fa-facebook-f"></i> <a href="www.facebook.com">facebook/mobshop</a></p>
                    <p><i class="fab fa-instagram"></i> <a href="www.facebook.com">instagram/mobshop</a></p>
                    <p><i class="fab fa-twitter"></i> <a href="www.facebook.com">twitter/mobshop</a></p>
                </div>
                <div id="footer-info" class="col-lg-4 col-sm-12 text-center">
                    <p><i class="fas fa-map-marker-alt"></i> Mostar, bulevar</p>
                    <p><i class="fas fa-map-marked-alt"></i> 88000, Mostar</p>
                    <p><i class="fas fa-phone"></i> +387 63 1111111</p>
                    <p><i class="fas fa-envelope"></i> mobshop@test.com</p>
                </div>
                <div class="col-lg-4 col-sm-12 text-right">
                    <h3>Informacije</h3>
                    <p>O nama</p>
                    <p>Način plaćanja</p>
                    <p>Dostava</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 id="footer-pay-info">SIGURNA ONLINE KARTIČNA NAPLATA</h5>
                    <img src="paypal-logo.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="copyright text-center">
            <p>Copyright &copy 2019</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="shopp.js">

    </script>





</body>

</html>