<!DOCTYPE html>
<html lang="en">

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




</head>

<body>
    <div id="home" class="header1">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <div class="header1-info">
                    <i class="fas fa-phone"></i> +387 36 1111111
                    <i class="fas fa-envelope"></i> mobshop@test.com
                </div>
                <div class="header1-sign">
                    <a href="#"><i class="fas fa-user"></i> Prijava</a>
                    <a href="#" class="btn btn-info">Registracija</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="header2">
        <div class="wrapper">
            <nav id="navbar">
                <div class="logo">
                    <h1>Mob<span id="logo-span">Shop</span> </h1>
                </div>
                <ul id="nav-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="#services">O nama</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                    <li><a href="#">Prijava</a></li>
                    <li id="list-cart"><a href="#"><i class="fas fa-shopping-cart"></i><span id="cart-badge" class="badge badge-light">0</span></a></li>
                    <li><a href="#">Guest <i class="fas fa-user"></i></a></li>
                </ul>
                <div class="clear"></div>
            </nav>
        </div>
    </div>
    <main id="main">
        <div class="showcase">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="showcase-images/samsung_s9_thumb.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="showcase-images/iphone-x.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="showcase-images/zte-1.jpg" alt="Third slide">
    </div>
  </div>
</div>
        </div>
        <div class="main-products">
            <div class="container">
                <h3 class="titles"><span>IZDVOJENO</span></h3>
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4">
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
                    <div class="col-lg-4 col-sm-4">
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
                    <div class="col-lg-4 col-sm-4">
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
                    <div class="col-lg-4 col-sm-4">
                        <div class="product-top text-center">
                            <img src="samsung-s9.png" alt="product-1">
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
                    <div class="col-lg-4 col-sm-4">
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
                    <div class="col-lg-4 col-sm-4">
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
                </div>
            </div>
        </div>
        <section id="wrapper" class="skewed">
            <div class="layer bottom">
                <div class="content-wrap">
                    <div class="content-body">
                        <h1>Laptopi</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam temporibus dolore vero
                            reiciendis atque debitis. Sequi at consequatur deserunt?</p>
                        <h3>Uskoro u ponudi!</h3>
                    </div>
                    <img src="laptopi.png" alt="">
                </div>
            </div>

            <div class="layer top">
                <div class="content-wrap">
                    <div class="content-body">
                        <h1>Mobiteli</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam temporibus dolore vero
                            reiciendis atque debitis. Sequi at consequatur deserunt?</p>
                        <a href="shop.php" class="btn btn-info">Pogledaj ponudu</a>
                    </div>
                    <img src="mobiteli.png" alt="">

                </div>
            </div>

            <div class="handle"></div>
        </section>
        <section class="container about-us" id="services">
            <h3 class="titles"><span>O nama</span></h3>
            <div id="about-us-section" class="row">
                <div class="col col-sm-12 col-lg-4">
                    <h2 class="indigo-text text-darken-4">Tko smo mi?</h2>
                    <p>Rem odio officiis dolores vero pariatur minima eveniet maxime alias quis facere. Voluptas, alias
                        est?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore doloremque architecto
                        consequatur consectetur
                        ipsum soluta?</p>
                </div>
                <div class="col col-sm-12 col-lg-6 offset-lg-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab"
                                aria-controls="home" aria-selected="true">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Servis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="future-tab" data-toggle="tab" href="#future" role="tab"
                                aria-controls="future" aria-selected="false">Vizija</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eum dolorem maxime
                                eligendi tempora non distinctio excepturi veritatis provident suscipit error doloribus,
                                eaque voluptatibus labore. Deserunt ut cumque consectetur architecto.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id in vitae natus dignissimos
                                ducimus, fuga asperiores corrupti cumque labore quidem nostrum officia doloremque autem
                                quod, praesentium soluta nobis rerum amet!</p>
                        </div>
                        <div class="tab-pane fade" id="future" role="tabpanel" aria-labelledby="future-tab">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, odit excepturi ullam hic
                                quibusdam officiis, repellat reprehenderit dicta id alias sapiente ab eos illum
                                voluptatum doloremque, ut quo tenetur doloribus.</p>
                            <a href="#" class="btn btn-info">Više detalja</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team-members">
            <div class="team-members-title">
                <h3 class="titles"><span>Naš Tim</span></h3>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="team-member">
                            <img src="member2.png" alt="">
                            <h5>Ante Bule</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, repudiandae?</p>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="team-member">
                            <img src="member2.png" alt="">
                            <h5>Josip Pašalić</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, repudiandae?</p>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="team-member">
                            <img src="member2.png" alt="">
                            <h5>Petar Grubišić</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, repudiandae?</p>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="team-member">
                            <img src="member2.png" alt="">
                            <h5>Josip Brajković</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, repudiandae?</p>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <h3 class="titles"><span>Kontakt</span></h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="contact-content">

                        </div>
                        <div id="map"></div>
                    </div>
                    <div class="col-lg-5 col-sm-12 offset-lg-1">
                        <div class="contact-content">

                        </div>
                        <form id="contact-us">
                            <div class="form-group">
                                <label for="name">Ime</label>
                                <input type="text" class="form-control" id="name" placeholder="Upišite ime">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Upišite email">
                            </div>
                            <div class="form-group">
                                <label for="message">Poruka</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Vaša poruka"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-block">Pošalji</button>

                        </form>

                    </div>
                </div>
            </div>
        </section>
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
 
    <div class="scroll-to-top-btn">
        <a href="#home"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="split.js"></script>


    <script>
        var map;
        var mostar = { lat: 43.343033, lng: 17.807894 }
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: mostar,
                zoom: 16,
            });
            var marker = new google.maps.Marker({
                position: mostar,
                map: map,
                title: 'Hello World!'
            });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAngIcofEhGbdpHN3EDqIg8Hcb71nxnZbo&callback=initMap"
        type="text/javascript"></script>



</body>

</html>