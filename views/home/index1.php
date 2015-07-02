<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?php echo $title; ?> </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
    <div id="page-wrap">
        <div id="header">
            <h1 id="logo"><a href="#">Origin Blog</a></h1>
        </div><!-- end header -->
        <div id="top-bar" class="group">
            <ul id="menu-page-menu" >
                <li><a href="/titi">Trang chủ</a></li>
                <li><a href="index.php?controller=home&action=gioi_thieu">Giới thiệu </a>
                <li><a href="#">Liên hệ </a>
                <li><a href="#">Tuyển dụng</a>
                <li><a href="#">Bản đồ</a>
                <li><a href="#">FAQs &raquo;</a>
                    <ul>
                        <li><a href="#">Home Page</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Forum</a></li>    
                    </ul>
                </li>
                <li><a href="#">Forum &raquo;</a>
                    <ul>
                        <li><a href="#">Home Page</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Forum</a></li>    
                    </ul>
                </li> 
                <li><a href="#">Contact &raquo;</a>
                    <ul>
                        <li><a href="#">Home Page</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Forum</a></li>    
                    </ul>
                </li>   
            </ul>
             <div id="searchBox">
                <form id="search-from" action="" method="get">
                    <input  type="text" name="s" id="s" value=""/>
                    <input  type="submit" name="btnSubmit" id="btnSubmit" value="Search"/>
                </form>
            </div><!-- google search goes here -->
        </div><!-- end top bar -->

        <div id="page-info">
            <div id="featured">
                <div id="accordion">
                    <dl class="easy-accordion">
                        <dt style="width: 230px; top: 225px; margin-left: -20px; left: 0px;" class="">First slide<span class="slide-number" style="bottom: 0px;">01</span></dt>
                        <dd class="" style="left: 46px; width: 470px; height: 193px; display: none;"><h2>This is the first slide</h2><p><img alt="Alt text to go here" src="assets/images/post-images/img1.png">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, enim.<br><a class="more" href="#">Read more</a></p></dd>
                        <dt style="width: 230px; top: 225px; margin-left: -20px; left: 46px;" class="">Second slide<span class="slide-number" style="bottom: 0px;">02</span></dt>
                        <dd style="width: 470px; height: 193px; left: 92px; display: none;" class=""><h2>Here is the second slide</h2><p><img alt="Alt text to go here" src="assets/images/post-images/img2.png">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, enim.<br><a class="more" href="#">Read more</a></p></dd>
                        <dt style="width: 230px; top: 225px; margin-left: -20px; left: 92px;" class="">One more slide<span class="slide-number" style="bottom: 0px;">03</span></dt>
                        <dd style="width: 470px; height: 193px; left: 138px; display: none;" class=""><h2>One more slide to go here</h2><p><img alt="Alt text to go here" src="assets/images/post-images/img3.png">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, enim.<br><a class="more" href="#">Read more</a></p></dd>
                        <dt style="width: 230px; top: 225px; margin-left: -20px; left: 138px;" class="">Another slide<span class="slide-number" style="bottom: 0px;">04</span></dt>
                        <dd style="width: 470px; height: 193px; left: 184px; display: none;" class=""><h2>Another slide to go here</h2><p><img alt="Alt text to go here" src="assets/images/post-images/img4.png">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, enim.<br><a class="more" href="#">Read more</a></p></dd>
                        <dt style="width: 230px; top: 225px; margin-left: -20px; left: 184px;" class="no-more-active">Wow one more<span class="slide-number" style="bottom: 0px;">05</span></dt>
                        <dd style="width: 470px; height: 193px; left: 230px; display: none;" class="no-more-active"><h2>Unbilievable one more slide here</h2><p><img alt="Alt text to go here" src="assets/images/post-images/img5.png">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, enim.<br><a class="more" href="#">Read more</a></p></dd>
                        <dt style="width: 230px; top: 225px; margin-left: -20px; left: 230px;" class="active">Last one<span class="slide-number" style="bottom: 0px;">06</span></dt>
                        <dd style="width: 470px; height: 193px; left: 276px; display: block;" class="active"><h2>This is definitely the last one</h2><p><img alt="Alt text to go here" src="assets/images/post-images/img6.png">Cum sociis natoque penatibus et magnis dis post-images montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, enim.<br><a class="more" href="#">Read more</a></p></dd>
                    </dl>
                </div>
            </div><!-- end featured -->
            <div id="facebook" style="width:200px;">
                <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=958581624187165";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            
        </div><!-- end page-info -->
        <div id="content-wrap">
            <div id="first-sidebar">
                <div class="widget">
                    <h2>Site Naviagtion</h2>
                    <ul id="menu-categories-menu">
                        <li><a href="#">Home Page</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Forum</a></li>    
                    </ul>
                    
                </div>
                <div class="widget">
                    <h2>RSS Feeds</h2>
                    <p class="date">August 20, 2015</p>
                    <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    </p>
                </div>
            </div><!-- end first sidebar -->
            <div id="main-content">
                <h2><a href="#">Videos</a></h2>
                <div class="post">
                    <!-- hinh ben trai co link -->
                    <a href="#"><img src="assets/images/post-images/post.jpg" alt="post image"/></a>
                    <h3><a href="#">Lorem</a></h3>
                    <p>Pellent asdasd as d asd a d sad as dsa dsa d a das da s
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    </p>
                    <p class="meta-data">By: Demon Warlock | On: August 20, 2015</p>
                    <a class="comment-link" href="#">6</a>
                    <a class="more-link" href="#">Continue reading ...</a>
                </div><!-- end post -->
                <h2><a href="#">PHP Videos</a></h2>
                <div class="post">
                    <!-- hinh ben trai co link -->
                    <a href="#"><img src="assets/images/post-images/post.jpg" alt="post image"/></a>
                    <h3><a href="#">Lorem</a></h3>
                    <p>Pellent asdasd as d asd a d sad as dsa dsa d a das da s
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                        Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    </p>
                    <p class="meta-data">By: Demon Warlock | On: August 20, 2015</p>
                    <a class="comment-link" href="#">6</a>
                    <a class="more-link" href="#">Continue reading ...</a>
                </div><!-- end post -->
                <h2><a href="#">JQuery</a></h2>
                <div class="post">
                    <!-- hinh ben trai co link -->
                    <a href="#"><img src="assets/images/post-images/post.jpg" alt="post image"/></a>
                    <h3><a href="#">Lorem</a></h3>
                    <p>Pellent asdasd as d asd a d sad as dsa dsa d a das da s</p>
                    <p class="meta-data">By: Demon Warlock | On: August 20, 2015</p>
                    <a class="comment-link" href="#">6</a>
                    <a class="more-link" href="#">Continue reading ...</a>
                </div><!-- end post -->
            </div><!-- end main content sidebar -->
            <div id="second-sidebar">
                <ul class="tabs">
                    <li><a href="#random" class="active">Random</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#popular">Popular</a></li>
                </ul>
                    <div class="tab_container">
                        <div id="random" class="tab_content">
                            <ul>
                            <li><a href="#">HTML ABC</a></li>
                            <li><a href="#">HTML As</a></li>
                            <li><a href="#">HTML ABC</a></li>
                            <li><a href="#">HTML As</a></li>
                            <li><a href="#">HTML As</a></li>
                            </ul>
                        </div>
                        <div id="news" class="tab_content">
                            <ul>
                            <li><a href="#">HTML ABC</a></li>
                            <li><a href="#">HTML As</a></li>
                            <li><a href="#">HTML ABC</a></li>
                            <li><a href="#">HTML As</a></li>
                            <li><a href="#">HTML As</a></li>
                            </ul>
                        </div>
                        <div id="popular" class="tab_content">
                            <ul>
                            <li><a href="#">HTML ABC</a></li>
                            <li><a href="#">HTML As</a></li>
                            <li><a href="#">HTML ABC</a></li>
                            <li><a href="#">HTML As</a></li>
                            <li><a href="#">HTML As</a></li>
                            </ul>
                        </div>
                        
                    </div> <!-- end tab container -->
                    <div class="widget">
                        <h2>Discusion</h2>
                        <li>
                            <strong><a href="#">Lorem ipsum</a></strong>
                            <p>absdbasbdasds sa d ad asdsa d as </p>
                        </li>
                        <li>
                            <strong><a href="#">Lorem ipsum</a></strong>
                            <p>absdbasbdasds sa d ad asdsa d as </p>
                        </li>
                        <li>
                            <strong><a href="#">Lorem ipsum</a></strong>
                            <p>absdbasbdasds sa d ad asdsa d as </p>
                        </li>
                    </div><!-- end widget -->
            </div><!-- end second sidebar -->
        </div><!-- end content wrap -->
    </div><!-- end page-wrap -->
    <div id="footer">
        <p>Do you care about footer ? ME NEITHER!!!</p>
        <img src="assets/images/meme.jpg">
    </div><!-- footer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/easyAccordion.js"></script><!-- slider -->
<script type="text/javascript" src="assets/js/utility.js"></script><!-- slider -->
<script type="text/javascript" src="assets/js/main-nav.js">
</script><!-- làm hiển thị menu đẹp hơn -->
<script type="text/javascript" src="assets/js/tab-nav.js">
</script><!-- làm hiển thị menu đẹp hơn -->
</body>
</html>