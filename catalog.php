<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
    
    <link rel="stylesheet" href="./css/catalog.css">
    <title>Produs</title>


</head>
<body>

    <!-- Header -->
    <header class="main__header">
        <?php
        include "navbar.php"
       ?>
        
    </header>

    <!-- Title -->
    <section class="title section">
        <div class="container">
            <h2>CĂRȚI</h2>
            <p>Cu libertate, cărți și luna, cine nu ar fi fericit?</p>
        </div>
    </section>

    <!-- Filters Horoizontal-->
    <form action="where.php" method="post">
    <section class="filters section">
        <div class="containerf">
            <div class="filters__content grid">
                
                <input class="filters__option" type="text" name="denumire" id="denumire" placeholder="Denumire">
                <input class="filters__option" type="text" name="autor" id="denumire" placeholder="Autor">
                <input class="filters__option button" type="submit"  id="cauta" value="CAUTĂ">
               
                
            </div>
        </div>
    </section> 
    </form>
  


    <!-- Main-->
    <section class="main">
        <div class="container">
            <div class="main_inner grid">
                <div class="main_items_grid grid">

                <?php
                    include ("conexiune.php");
                    $sql=mysqli_query($conexiune, "SELECT * FROM books");

                    while ($row=mysqli_fetch_row($sql)) {
                    
                    echo "<a class='slider__item grid' >
                    <span class='slider__item__img' style='background-image: url({$row[2]})'></span>
                        <span class='slider__item__content'>
                            <div class='slider__title'>$row[1]</div>
                            <div class='slider__author'>$row[3]</div>
                            <div class='slider__price'>$row[4] MDL</div>
                            <div class='slider__footer'>

                            <form action='carte_main.php' method='post'>
                            <input type='hidden' name='id' value='$row[0]'>
                                <div class='btn-group'>
                               
                            
                                    <button class='button det' type='submit'><i class='fas fa-paper-plane'></i>DETALII</Del></button></form>
                                    <form action='insertc.php' method='post'>
                                    <input type='hidden' name='book' value='$row[1]'>
                            <input type='hidden' name='url' value='$row[2]'>
                            <input type='hidden' name='autor' value='$row[3]'>
                            <input type='hidden' name='price' value='$row[4]'>
                                    <button class='button buy' type='submit'><i class='fas fa-shopping-cart'></i>CUMPĂRĂ</button></form>
                                </div>
                            </div>
                        </span>
                    </span>
                </a>";

                    }
                    
                    mysqli_close($conexiune);
                      ?>
                            <!-- <a class="slider__item grid" >
                                <span class="slider__item__img" style="background-image: url('img/popular1.png')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Temă pentru acasă</div>
                                        <div class="slider__author">Nicolae Dabija</div>
                                        <div class="slider__price">200,00 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det" onClick="window.location='carte_main.html';"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy" onClick="window.location='account.html';"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a> -->
                            <!-- <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/popular2.jpeg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Povestea mea</div>
                                        <div class="slider__author">Michelle Obam</div>
                                        <div class="slider__price">49,90 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/popular3.jpeg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Arta subtilă a nepăsării</div>
                                        <div class="slider__author">Mark Manson</div>
                                        <div class="slider__price">195,19 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>

                            <a class="slider__item grid" >
                                <span class="slider__item__img" style="background-image: url('img/popular4.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Institutul</div>
                                        <div class="slider__author">Stephen King</div>
                                        <div class="slider__price">59,9 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/new1.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Libertie</div>
                                        <div class="slider__author">Kaitlyn Greenfige</div>
                                        <div class="slider__price">457,20 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/new2.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Infinite Country</div>
                                        <div class="slider__author">Patricia Engel</div>
                                        <div class="slider__price">120,00 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>

                            <a class="slider__item grid" >
                                <span class="slider__item__img" style="background-image: url('img/new3.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Fata de pe stâncă</div>
                                        <div class="slider__author">Lucinda Riley</div>
                                        <div class="slider__price">230,19 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/new4.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">In the Quick</div>
                                        <div class="slider__author">Kate Hope Day</div>
                                        <div class="slider__price">70,59 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/limited1.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">The Push</div>
                                        <div class="slider__author">Ashley Audrain</div>
                                        <div class="slider__price"><span class="slider__priceNO">300,00 MDL</span>245,00 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>

                            <a class="slider__item grid" >
                                <span class="slider__item__img" style="background-image: url('img/limited2.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Summerwater</div>
                                        <div class="slider__author">Sarah Moss</div>
                                        <div class="slider__price"><span class="slider__priceNO">>180,95 MDL</span>120,00 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/limited3.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">The Removed</div>
                                        <div class="slider__author">Brandon Habson</div>
                                        <div class="slider__price"><span class="slider__priceNO">460,29 MDL</span>95,19 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a>
                            <a class="slider__item grid">
                                <span class="slider__item__img" style="background-image: url('img/limited4.jpg')"></span>
                                    <span class="slider__item__content">
                                        <div class="slider__title">Girl A</div>
                                        <div class="slider__author">Anigail Dean</div>
                                        <div class="slider__price"><span class="slider__priceNO">120,19 MDL</span>95,95 MDL</div>
                                        <div class="slider__footer">
                                            <div class="btn-group">
                                                <button class="button det"><i class="fas fa-paper-plane"></i>DETALII</Del></button>
                                                <button class="button buy"><i class="fas fa-shopping-cart"></i>CUMPĂRĂ</button>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </a> -->
                  
                </div>

                <div class="filter_items">
                        <div class="filter">
                            <div class="filter_back">
                            <div class="filter_header">
                                SORTARE<i class="fas fa-caret-down cursor"></i>
                            </div>
                            <div class="filter_cotent">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="width:180px; height:35px; background-color:transparent; color:black; border-radius: 10px;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="pretdcr.php">Dupa preț: mare→mic</a>
                                <a class="dropdown-item" href="pretcr.php">Dupa preț: mic→mare</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="ascendent.php">Dupa titlu: A→Z</a>
                                <a class="dropdown-item" href="descendent.php">Dupa titlu: Z→A</a>
                                </div>
                            </div>
                            </div>
                </div>
                      

                    </div>

                    <div class="filter">
                        <div class="filter_back">
                        <div class="filter_header">
                            PREȚ<i class="fas fa-caret-down cursor"></i>
                        </div>
                        <div class="filter_cotent count">
                            <div class="rangeslider">
                                <input class="min" name="range_1" type="range" min="1" max="100" value="10" />
                                <input class="max" name="range_1" type="range" min="1" max="100" value="90" />
                                <span class="range_min light left">1.000 MDL</span>
                                <span class="range_max light right">100.000 MDL</span>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="filter">
                        <div class="filter_back">
                        <div class="filter_header">
                            EDITURA<i class="fas fa-caret-down cursor"></i>
                        </div>
                        <div class="filter_cotent third">
                            <label class="b-contain">
                            <span >Amaltea (2)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>
                        <label class="b-contain">
                            <span >Bestseller (17)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>
                        <label class="b-contain">
                            <span >Bookzone (20)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>
                        <label class="b-contain">
                            <span >Litera (34)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>
                        <label class="b-contain">
                            <span >Curtea Veche (4)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>
                        <label class="b-contain">
                            <span >Alfa (19)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>

                        <label class="b-contain">
                            <span >Humanitas (13)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>

                        <label class="b-contain">
                            <span >AMeteor Prss (3)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>

                        <label class="b-contain">
                            <span >Corint (1)</span>
                            <input type="checkbox" >
                            <div class="b-input"></div>
                        </label>

                            
                        </div>
                        </div>
                        <div class="border"></div>

                        <div class="filter_back">
                            <div class="filter_header">
                                LIMBA<i class="fas fa-caret-down cursor"></i>
                            </div>
                            <div class="filter_cotent third">
                                <label class="b-contain">
                                <span >Româna (345)</span>
                                <input type="checkbox" >
                                <div class="b-input"></div>
                            </label>
                            <label class="b-contain">
                                <span >Engleza (129)</span>
                                <input type="checkbox" >
                                <div class="b-input"></div>
                            </label>
                            <label class="b-contain">
                                <span >Franceza (80)</span>
                                <input type="checkbox" >
                                <div class="b-input"></div>
                            </label>
                            <label class="b-contain">
                                <span >Rusa (145)</span>
                                <input type="checkbox" >
                                <div class="b-input"></div>
                            </label>
                            <label class="b-contain">
                                <span >Japoneza (45)</span>
                                <input type="checkbox" >
                                <div class="b-input"></div>
                            </label>
                                
                            </div>
                            </div>
                            <div class="border"></div>

                            <div class="filter_back">
                                <div class="filter_header">
                                    Coperta<i class="fas fa-caret-down cursor"></i>
                                </div>
                                <div class="filter_cotent third">
                                    <label class="b-contain">
                                    <span >Copertă groasă (72)</span>
                                    <input type="checkbox" >
                                    <div class="b-input"></div>
                                </label>
                                <label class="b-contain">
                                    <span >Copertă moale (677)</span>
                                    <input type="checkbox" >
                                    <div class="b-input"></div>
                                </label>                                    
                                </div>
                                </div>

                                

                </div>
                <div class="filter">
                    <div class="filter_back">
                    <div class="filter_header">
                        TOP CĂRȚI<i class="fas fa-caret-down cursor"></i>
                    </div>
                    <div class="filter_cotent books">
                        
                        <div class="filter_item_books one" style="background-image: url('img/popular1.png')"></div>
                        <div class="filter_item_books two">
                            <div class="filter_item_title">Temă pentru acasă</div>
                            <div class="filter_item_author">Nicolae Dabija</div>
                            <div class="filter_item_stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="filter_item_review">170 de voturi</div>
                        </div>
                        </div>
                
  <div class="filter_cotent books">
                        
                        <div class="filter_item_books one" style="background-image: url('img/limited1.jpg')"></div>
                        <div class="filter_item_books two">
                            <div class="filter_item_title">The Push</div>
                            <div class="filter_item_author">Ashley Audrain</div>
                            <div class="filter_item_stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="filter_item_review">160 de voturi</div>
                        </div>
                        </div>
                        <div class="filter_cotent books">
                        
                            <div class="filter_item_books one" style="background-image: url('img/new2.jpg')"></div>
                            <div class="filter_item_books two">
                                <div class="filter_item_title">Infinite Country</div>
                                <div class="filter_item_author">Patricia Engel</div>
                                <div class="filter_item_stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="filter_item_review">150 de voturi</div>
                            </div>
                            </div>
                            <div class="filter_cotent books">
                        
                                <div class="filter_item_books one" style="background-image: url('img/limited2.jpg')"></div>
                                <div class="filter_item_books two">
                                    <div class="filter_item_title">Summerwater</div>
                                    <div class="filter_item_author">Sarah Moss</div>
                                    <div class="filter_item_stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="filter_item_review">140 de voturi</div>
                                </div>
                                </div>
                                <div class="filter_cotent books">
                        
                                    <div class="filter_item_books one" style="background-image: url('img/limited3.jpg')"></div>
                                    <div class="filter_item_books two">
                                        <div class="filter_item_title">The Removed</div>
                                        <div class="filter_item_author">Brandon Hobson</div>
                                        <div class="filter_item_stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="filter_item_review">120 de voturi</div>
                                    </div>
                                    </div>
            </div>
            
</div>
        </div> 
    
    </section>

    <section class="slider_bar">
        <div class="container">
            <div class="baar">
                <div class="prev cursor"><i class="fas fa-caret-left"></i></div>
                <div class="numbers ">
                    <span class="numbers_one cursor">01</span>
                    <span class="numbers_two cursor">02</span>
                    <span class="numbers_three active cursor">03</span>
                    <span class="numbers_four cursor">04</span>
                    <span class="numbers_five cursor">05</span>
                </div>
                <div class="next cursor"><i class="fas fa-caret-right"></i></div>

            </div>

        </div>

    </section>
    

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner grid">
                <div class="footer__block">
                    <h4 class="footer__title">ADRESĂ</h4>
                    <address class="footer__address">
                        <div>str. Ion Creangă 13/12</div>
                        <div>mun. Chiținău, R.Moldova</div>
                    </address>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title">Share with Love</h4>
                    <div class="footer_social">
                        <a class="footer_social__item" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a class="footer_social__item" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a class="footer_social__item" href="https://mobile.twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        
                    </div>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title">DESPRE NOI</h4>
                    <div class="footer__text">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright__text">
                    <div>Copyright © 2021 Bado<span style="color: #1e6f5c;">oom</span> All Rights Reserved</div>
                    <div>Made <span>by Iachimova Diana</span></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="catalog.js"></script>
</body>
</html>