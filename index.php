
<?php 
if(isset($_GET['mainid']))
{
    die(htmlentities($_GET['mainid']));
    $auswahl = $_GET['mainid'];
    
}

require_once("header.php");
?>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>

    <!-- HERE -->
    <section id="order">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Your Order</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4 col-md-12 text-center">
                    <!-- AUSWAHL -->
                    <div class="auswahl-box">
                    <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                    <h3>Sorte</h3>
                    <p class="text-muted">Wählen Sie ihre Sorte.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="auswahlform" method="GET">
                        <div>
                            <label for="sorte">Sorte:</label>
                            <select class="form-control" id="Select_1" name="sorte"
                                onchange="waehleSorte(this.value); mainInfo(this.value) ">
                                <option value="Gurke">Gurke</option>
                                <option value="Tomate">Tomate</option>
                                <option value="Aubergine">Aubergine</option>
                                <option value="Erdbeere">Erdbeere</option>
                                <option value="Kartoffel">Kartoffel</option>
                            </select>
                        </div>
                        
                        <!--<div>-->
                        <!--    <label for="auswahlmenge">Menge: </label>-->
                        <!--    <input type="text" name="auswahlmenge" id="auswahlmenge"/> cm<sup>3</sup>/l-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--    <label for="auswahlsorte">Sorte: </label>-->
                        <!--    <input type="text" name="auswahlsorte" id="auswahlsorte"/>-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--    <button type="submit" class="btn btn-primary">In den Warenkorb</button>-->
                        <!--    <input type="button" class="btn btn-danger" value="Zurück" onclick="location.href = '/';">-->
                        <!--</div>-->
                    </form>
                    </div>
                    <!-- AUSWAHL -->
                    
                </div>
            </div>
            <h1 id="test2">Test Test</h1>
            <div class="row">

                <!--Konditionenlogik -->
                <?php
                
                $auswahl = $_GET['mainid'];
                
                if($auswahl == 'Gurke') $kondition == 1;
                if($auswahl == 'Tomate') $kondition == 2;
                if($auswahl == 'Aubergine') $kondition == 3;
                if($auswahl == 'Erdbeere') $kondition == 4;
                if($auswahl == 'Kartoffel') $kondition == 5;
                
                switch ($kondition) {
                    case 1:
                        $lose = false;
                        $topf = true;
                        $sack = false;
            
                        break;
                    case 2:
                        $lose = true;
                        $topf = true;
                        $sack = false;
                        
                        break;
                    case 3:
                        $lose = false;
                        $topf = true;
                        $sack = true;
                        
                        break;
                    case 4:
                        $lose = true;
                        $topf = false;
                        $sack = true;
                        
                        break;
                    case 5:
                        $lose = true;
                        $topf = false;
                        $sack = false;
                        
                        break;
                    case 6:
                        $lose = false;
                        $topf = false;
                        $sack = true;
                        
                        break;
                    default:
                        $lose = true;
                        $topf = true;
                        $sack = true;
                        
                        break;
                }
                ?>
                <!--Konditionenlogik -->
                
                <div class="col-lg-4 col-md-12 text-center">
                    <!-- LOSE -->
                    <div class="lose-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Lose Option</h3>
                        <p class="text-muted">Die Dimension ist in cm angegeben</p>
                        <div>
                            <input name="zahl1" type="range" min="1" max="100" value="1" step="1" 
                                onchange="showValue1(this.value); rechnung()" />
                            <span id="range1">1</span>
        
                            <input name="zahl2" type="range" min="1" max="100" value="1" step="1" 
                                onchange="showValue2(this.value); rechnung()" />
                            <span id="range2">1</span>
        
                            <input name="zahl3" type="range" min="1" max="100" value="1" step="1" 
                                onchange="showValue3(this.value); rechnung()" />
                            <span id="range3">1</span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="losewk">In den Warenkorb</button>
                        </div>
                    </div>
                    <!-- LOSE -->
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <!-- SACK-->
                    <div class="sack-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Sack Option</h3>
                        <p class="text-muted">Ein Sack wiegt 500l</p>
                        <div>
                            <label for="sack">Menge:</label> 
                            <input type="number" id="sack" name="sack" min="1" max="9999" step="1" value="1" 
                                onchange="showMenge(this.value)">
                        </div>
                        <!--<div>-->
                        <!--    <label for="menge">Menge:</label> -->
                        <!--    <input type="number" id="menge" name="menge" min="1" max="9999" step="1" value="1" -->
                        <!--        onchange="showMenge(this.value)"> cm<sup>3</sup>/l-->
                        <!--</div>-->
                        <div>
                            <button type="submit" class="btn btn-primary" name="sackwk">In den Warenkorb</button>
                        </div>
                    </div>
                    <!-- SACK -->
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <!-- TOPF-->
                    <div class="topf-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Topf Option</h3>
                        <p class="text-muted">Ein Topf hat 1m<sup>3</sup></p>
                        <div>
                            <label for="topf">Menge:</label> 
                            <input type="number" id="topf" name="topf" min="1" max="9999" step="1" value="1" 
                                onchange="showMenge(this.value)">
                        </div>
                        <!--<div>-->
                        <!--    <label for="menge">Menge:</label> -->
                        <!--    <input type="number" id="menge" name="menge" min="1" max="9999" step="1" value="1" -->
                        <!--        onchange="showMenge(this.value)"> cm<sup>3</sup>/l-->
                        <!--</div>-->
                        <div>
                            <button type="submit" class="btn btn-primary" name="topfwk">In den Warenkorb</button>
                        </div>
                    </div>
                    <!-- TOPF -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-4 col-lg-4">
                    <h2>Ergebnis Test</h2>
                    <div class="hidden">
                        <label for="auswahlmenge">Menge: </label>
                        <input type="text" name="auswahlmenge" id="auswahlmenge"/> cm<sup>3</sup>/l
                    </div>
                    <div class="hidden">
                        <label for="auswahlsorte">Sorte: </label>
                        <input type="text" name="auswahlsorte" id="auswahlsorte"/>
                    </div>
                    <div>
                        <button type="submit">Absenden</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERE -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

<?php require_once("footer.php");?>
