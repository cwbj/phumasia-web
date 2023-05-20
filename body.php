<header class="l-header ">
    <nav>
        <div class="logo">
            <a href="#" class="nav__logo"><span style="color: black;">CWA</span> Camboida</a>
        </div>
        <div class="nav__menu" id="nav-menu">
            <ul class="ul">
                <li class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="otherpages/ourhistory.html" class="nav-link">Our History</a>
                </li>

                <li class="nav-item" id="activity">
                    <a class="nav-link">Activity<i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown activity">
                        <li class="dowmenu activity">
                            <a href="otherpages/agriculture.html" class="dowlink activity">Agriculture</a>
                        </li>
                        <li class="dowmenu activity">
                            <a href="otherpages/" class="dowlink activity">Tradition</a>
                        </li>
                        <li class="dowmenu activity">
                            <a href="otherpages/entrepreneur.html" class="dowlink activity">Entrepreneurship</a>
                        </li>
                        <li class="dowmenu activity">
                            <a href="otherpages/dace.html" class="dowlink activity">Khmer Dance</a>
                        </li>
                        <li class="dowmenu activity">
                            <a href="otherpages/Restaurant.html" class="dowlink activity">Restaurant</a>
                        </li>
                        <li class="dowmenu activity">
                            <a href="otherpages/Experience.html" class="dowlink activity">Experince Airbnb</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="product">
                    <a class="nav-link">Products <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown products">
                        <li class="dowmenu product">
                            <a href="" class="dowlink product">Phumasia Product</a>
                        </li>
                        <li class="dowmenu product">
                            <a href="otherpages/products.html" class="dowlink product">Nhev product</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" id="homestay">
                    <a class="nav-link" id="dropdow">Homestay<i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown homstay">
                        <li class="dowmenu product">
                            <a href="https://www.airbnb.co.nz/rooms/19917748?source_impression_id=p3_1655304182_JSAHq%2FwX7aqjL2K7"
                                class="dowlink homstay">Airbnb</a>
                        </li>
                        <li class="dowmenu product">
                            <a href="otherpages/Experience.html" class="dowlink homstay">Experince</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>
<section class="home bd-grid" id="home">
    <div class="contianer-slider">
        <div class="slide-imege" style="display: block;" fade>
            <div class="some-introduction">
                <h3 class="title-img">What's Phumasia</h3>
                <p>
                    Phum Asia is established in 2015 for creating works<br>
                    in communities agriculture business & local entrepreneurship.
                </p>
                <button onclick=" showingknowmore()">Know more</button>
            </div>
            <img src="photo/cover/homepage-cover3.JPG" alt="" style="width: 100%; height: 100%;" class="photo-slide">
        </div>

        <div class="slide-imege" fade>
            <div class="some-introduction">
                <h3 class="title-img">What's Phumasia</h3>
                <p>Phum Asia is established in 2015 for creating works in communities<br>
                    agriculture business & local entrepreneurship
                </p>
                <button onclick=" showingknowmore()">Know more</button>
            </div>
            <img src="photo/cover/homepage-cover2.jpg" alt="" style="width: 100%; height: 100%;" class="photo-slide">
        </div>

        <div class="slide-imege" fade>
            <div class="some-introduction">
                <h3 class="title-img">What's Phumasia</h3>
                <p>Phum Asia is established in 2015 for creating works in communities<br>
                    agriculture business & local entrepreneurship
                </p>
                <button onclick=" showingknowmore()">Know more</button>
            </div>
            <img src="photo/cover/homepage-cover1.jpg" alt="" style="width: 100; height: 100;" class="photo-slide">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="dotbox" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
</section>
<br>

<!----know More section---->
<div class="know-morecontant">
    <div class="know-more-photo">
        <img src="photo/what's-phumasia1.png" alt="" width="100%" height="100%">
    </div>
    <div class="know-more-paragraph">
        <div class="translate" id="english">
            <label onclick="khmer()"><i class="fa-solid fa-arrow-right-arrow-left"></i><a>English</a></label>
            <p>
                wrating somethings wrating somethings wrating somethings
                wrating somethings wrating somethings
                wrating somethings wrating somethings wrating somethings
                wrating somethings wrating somethings
                wrating somethings wrating somethings wrating somethings
                wrating somethings wrating somethings
            </p>
        </div>

        <div class="translate" id="khmer">
            <label onclick="japanes()"><i class="fa-solid fa-arrow-right-arrow-left"></i><a>Khmer</a></label>
            <p>
                សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
            </p>
        </div>

        <div class="translate" id="japanese">
            <label onclick="english()"><i class="fa-solid fa-arrow-right-arrow-left"></i><a>Japanese</a></label><br>
            japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
            japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
            japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
            japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
        </div>
    </div><br>

    <div class="contan-two">
        <div class="photo">
            <img src="photo/what's-phumasia2.jpg" alt="" width="100%" height="100%">
        </div>

        <div class="know-more-paragraph">
            <div class="translate" id="english1">
                <p>
                    wrating somethings wrating somethings wrating somethings
                    wrating somethings wrating somethings
                    wrating somethings wrating somethings wrating somethings
                    wrating somethings wrating somethings
                    wrating somethings wrating somethings wrating somethings
                    wrating somethings wrating somethings
                </p>
            </div>

            <div class="translate" id="khmer1">
                <p>
                    សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                </p>
            </div>

            <div class="translate" id="japanese1">
                japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
            </div>
        </div>
    </div>
</div>

<div class="contan3">
    <div class="cards">
        <div class="card1">
            <div class="photo">
                <img src="photo/what's-phumasia3.png" alt="">
            </div>
            <div class="know-more-paragraph">
                <div class="translate" id="english2">
                    <h6>Tigle OF Pictures</h6>
                    <p>
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                    </p>
                </div>

                <div class="translate" id="khmer2">
                    <h6>ចំណង់ជើង</h6>
                    <p>
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    </p>
                </div>

                <div class="translate" id="japanese2">
                    <h6>Tigle OF Pictures</h6>
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="photo">
                <img src="photo/what's-phumasia4.png" alt="">
            </div>
            <div class="know-more-paragraph">
                <div class="translate" id="english3">
                    <h6>Tigle OF Pictures</h6>
                    <p>
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                    </p>
                </div>

                <div class="translate" id="khmer3">
                    <h6>ចំណង់ជើង</h6>
                    <p>
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    </p>
                </div>

                <div class="translate" id="japanese3">
                    <h6>Tigle OF Pictures</h6>
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="photo">
                <img src="photo/what's-phumasia5.png" alt="">
            </div>
            <div class="know-more-paragraph">
                <div class="translate" id="english4">
                    <h6>Tigle OF Pictures</h6>
                    <p>
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                    </p>
                </div>

                <div class="translate" id="khmer4">
                    <h6>ចំណង់ជើង</h6>
                    <p>
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    </p>
                </div>

                <div class="translate" id="japanese4">
                    <h6>Tigle OF Pictures</h6>
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="photo">
                <img src="photo/what's-phumasia6.png" alt="">
            </div>
            <div class="know-more-paragraph">
                <div class="translate" id="english5">
                    <h6>Tigle OF Pictures</h6>
                    <p>
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                        wrating somethings wrating somethings wrating somethings
                        wrating somethings wrating somethings
                    </p>
                </div>

                <div class="translate" id="khmer5">
                    <h6>ចំណង់ជើង</h6>
                    <p>
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                        សរសេជាភាសាខ្មែរ​សរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរសរសេជាភាសាខ្មែរ
                    </p>
                </div>

                <div class="translate" id="japanese5">
                    <h6>Tigle OF Pictures</h6>
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                    japanes writing japanes writing japanes writing japanes writing japanes writing japanes writing
                </div>
            </div>
        </div>
    </div>
</div>
<!----ending know More section---->


<!----------------------->
<!--phumasia introduction-->
<!----------------------->
<div class="phumasiap-intro">
    <h1>What's Phum Asia?</h1>
    <p align="center" style="font-size: 1.2rem; line-height:30px;">
        Phum Asia is established in 2015 for creating works in communities<br> – agriculture business & local
        entrepreneurship<br>
        Here is dedicated to providing its students with an education<br> that combines learning and working in
        actual fields.<br>
        Located in Kompong Thom, Cambodia.
</div>


<section class="new bd-grid reveal active" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="600">
    <div class="new-contianer" id="news" style="scroll-behavior: smoot;">
        <div class="section-content" style="padding-top: 2rem;">
            <div class="title">
                <h1>News</h1>
                <p align="center" style="font-size: 1.2rem; line-height:30px;">Here's the 3 latest news from Phum
                    Asia</p>
            </div>
            <div class="news-item">
                <?php
                $query="SELECT * FROM users";               // SQL query to fetch all table data
                $view_users= mysqli_query($conn,$query);    // sending the query to the database

                //  displaying all the data retrieved from the database using while loop
                while($row= mysqli_fetch_assoc($view_users)) {
                    $id = $row['id'];                
                    $user = $row['username'];        
                    $email = $row['email'];         
                    $pass = $row['password'];
                    $image = $row['image'];   
                    $address = $row['address'];       
                ?>

                <div class="card">
                    <div class="img-setion">
                        <img src="photo/<?php echo $image; ?>" alt="">
                    </div>

                    <div class="article">
                        <h3><?php echo $user; ?></h3>
                        <p>
                            <?php echo $email; ?>
                            <br>Adrress: <?php echo $address; ?>
                        </p>
                    </div>

                    <div class="block-view">
                        <a href="" class="button">Read More</a>
                    </div>

                    <div class="posted-date">
                        <p><?php echo $pass; ?></p>
                    </div>
                </div>

                <?php
                }
                ?>

 
            </div>
        </div>
    </div>
</section>
<!---ending news block -->

<!------ Starting welcome------>

<!------ ending welcome------>


<!----our activity------------------------------------>
<section class="ouractibity bd-grid reveal active" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="600">
    <div class="ouractibity-contianer-section" style="margin-top: 2rem;">

        <div class="title-section">
            <h1>Our Activity</h1>
        </div>
        <div class="ouractivity-item-section">

            <div class="ouractivity-list-section">
                <div class="photo-section">
                    <img src="photo/cover/agriculture-cover.png" alt="" class="downdouractivity">

                    <div class="acticle-section">
                        <h4>Acricletur</h4>
                        <p>
                            We have been committed to environmentally friendly agriculture from 2014.
                            We have 45 ha of cashew nuts farm called “SCY (Sambor Community of Youth)”,
                            which is located near Sambor Prei Kuk, registered as World Heritage in 2017.
                            <a href="" id="seemore">See More...</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="ouractivity-list-section">
                <div class="photo-section">
                    <img src="photo/cover/tradiiton.png" alt="" class="dace">

                    <div class="acticle-section">
                        <h4>tradiiton</h4>
                        <p>
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            <a href="" id="seemore">See More...</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ouractivity-list-section">
                <div class="photo-section">
                    <img src="photo/cover/unterprinure.jpg" alt="">

                    <div class="acticle-section">
                        <h4>entrepreneuship</h4>
                        <p>
                            Entrepreneur -Learning through working
                            Students in Phum Asia live and work together in here. Not only cashew nuts work, but
                            also they learn many kinds of field like IT, tourism, agri-business, accounting,
                            restaurant business and so on.

                            <a href="" id="seemore">See More...</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="ouractivity-list-section">
                <a href="Experience.html">
                    <div class="photo-section">
                        <a><img src="photo/cover/dance-cover.png" alt="" id="dace"></a>
                        <div class="acticle-section">
                            <h4>khmer dace</h4>
                            <p>
                                Touring the neighborhood of our community, you can
                                enjoy various lifestyles and cultural scenes rooted in Cambodia.
                                Here you'll find our tour plans. Please get in touch with us to
                                have your journey made.
                                <a href="" id="seemore">See More...</a>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="ouractivity-list-section">
                <div class="photo-section">
                    <img src="photo/cover/restaurant-cover.png" alt="" class="Restaurant">

                    <div class="acticle-section">
                        <h4>Restaurant</h4>
                        <p>
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            <a href="" id="seemore">See More...</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ouractivity-list-section">
                <div class="photo-section">
                    <img src="photo/cover/experience-cover.png" alt="">

                    <div class="acticle-section">
                        <h4>Experince Airbnb</h4>
                        <p>
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                            sort paragraph sort paragraphsort paragraph
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!----ending activity------------------------------------>


<!--------------------startin how to Access------------------------------->
<sectinon class="howtoaccess" data-aos="fade-up" data-aos-duration="2000">
    <h1>How To Access</h1>
    <div class="access-contianer">
        <div class="acc-paragraph">
            <div class="infor bus">
                <p><a href="" class="button-acc">Bus</a></p>
                <p>form Phonom Penh or Sheam Reap<br><span>BUS reservation: <a
                            href="https://bookmebus.com/">https://bookmebus.com</a></span><br>
                    <span style="font-size: 1.4rem; color: red; padding-bottom: 10px;">Caution</span><br>
                    Be Sure to Tell The bus Driver where to get off.
                </p>
            </div>
            <div class="infor Time">
                <p><a href="" class="button-acc">Time</a></p>
                <p style="text-align: left; font-weight: 700;">2-3 hour</p>
            </div>
            <div class="infor Pickup" style="grid-template-columns: 150px auto;">

                <div>
                    <a class="button-acc" style="font-size: 1.1rem; padding: 5px 0 ;">Pickup service</a>
                </div>
                <div>
                    <p>our pickup services Run from 08:00~18:00, if you<br>
                        require this services, please book in advance with your bus's arrive time,<br><br>
                        <span style=" border-radius: 50%; background-color: red; 
						color: white; padding: 10px;" id="place">Place</span> Arunras Restaurant or Stung Sen Restaurant
                    </p>
                </div>
            </div>
            <p>※If you have questions about booking bus or picking you up, please kindly let us know.</p>

        </div>
        <div class="acc-map">
            <p><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456739.3490346423!2d104.83300601170178!3d12.763370449256161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310e72df9fdd6201%3A0xa8dde295e3ea23cd!2sPhum%20Asia!5e0!3m2!1skm!2skh!4v1643787872123!5m2!1skm!2skh"
                    width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
    </div>
</sectinon>
<!--------------------ending Access------------------------------->

<!--facebook embed -->
<section class="embed bd-grid reveal active" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
    <div class="embed-facebook">
        <div class="fb-page" data-tabs="timeline,events,messages" data-href="https://www.facebook.com/CWBCambodia/"
            data-width="280" data-hide-cover="false"></div>

    </div>

</section>
<!--facebook embed -->

<!------------------------------------------- Starting Foodter section------------------------------------------>
<?php include('footer.php'); ?> 