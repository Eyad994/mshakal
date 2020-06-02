<footer>
    <div id="footer" class="container">

        <div class="row">
            <div class="footer-blocks">
                <div class="col-sm-3 column footerleft">
                    <div id="cztestimonialcmsblock">
                        <div class="testimonial_container container">
                            <h5>What They say</h5>
                            <div class="testimonial_wrapper">
                                <div class="testimonial-area">
                                    <ul id="testimonial-carousel" class="cz-carousel product_list">
                                        <li class="slider-item">
                                            <div class="testimonial-item">
                                                <div class="product_inner_cms">
                                                    <div class="des">Majority have suffered alteration in aome from, by injected humor or randomized words.</div>
                                                </div>
                                                <div class="item cms_face">
                                                    <div class="title">
                                                        <div class="name"><a href="#">Mr. Mack Jeckno</a></div>
                                                        <span class="subheading">Webdesigner</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="slider-item">
                                            <div class="testimonial-item">
                                                <div class="product_inner_cms">
                                                    <div class="des">Majority have suffered alteration in aome from, by injected humor or randomized words.</div>
                                                </div>
                                                <div class="item cms_face">
                                                    <div class="title">
                                                        <div class="name"><a href="#">luies charls</a></div>
                                                        <span class="subheading">Webdesigner</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="slider-item">
                                            <div class="testimonial-item">
                                                <div class="product_inner_cms">
                                                    <div class="des">Majority have suffered alteration in aome from, by injected humor or randomized words.</div>
                                                </div>
                                                <div class="item cms_face">
                                                    <div class="title">
                                                        <div class="name"><a href="#">jecob goeckno</a></div>
                                                        <span class="subheading">Webdesigner</span></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3 column">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
                        <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
                        <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                        <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                        <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
                    </ul>
                </div>


                <div class="col-sm-3 column">
                    <h5>My Account</h5>
                    <ul class="list-unstyled">
                        <li><a href="indexe223.html?route=account/account">My Account</a></li>
                        <li><a href="indexe223.html?route=account/order">Order History</a></li>
                        <li><a href="indexe223.html?route=account/wishlist">Wish List</a></li>
                        <li><a href="indexe223.html?route=account/newsletter">Newsletter</a></li>
                        <li><a href="index71ba.html?route=account/return/add">Returns</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 footer-newsletter">
                    <script>
                        function subscribe()
                        {
                            var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                            var email = $('#txtemail').val();
                            if(email != "")
                            {
                                if(!emailpattern.test(email))
                                {
                                    $('.text-danger').remove();
                                    var str = '<span class="error">Invalid Email</span>';
                                    $('#txtemail').after('<div class="text-danger">Invalid Email</div>');

                                    return false;
                                }
                                else
                                {
                                    $.ajax({
                                        url: 'index.php?route=extension/module/newsletters/news',
                                        type: 'post',
                                        data: 'email=' + $('#txtemail').val(),
                                        dataType: 'json',


                                        success: function(json) {

                                            $('.text-danger').remove();
                                            $('#txtemail').after('<div class="text-danger">' + json.message + '</div>');

                                        }

                                    });
                                    return false;
                                }
                            }
                            else
                            {
                                $('.text-danger').remove();
                                $('#txtemail').after('<div class="text-danger">Email Is Require</div>');
                                $(email).focus();

                                return false;
                            }
                        }
                    </script>
                    <div class="newsletter">
                        <h5 class="news-title">Subscribe Now</h5>
                        <div class="newsletter-message">
                            Join us for get latest updates
                        </div>
                        <div class="newsright">
                            <form action="#" method="post">
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-firstname">Email</label>
                                    <div class="input-news">
                                        <input type="email" name="txtemail" id="txtemail" value="" placeholder="Enter Your Email Address" class="form-control input-lg"  />
                                    </div>
                                    <div class="subscribe-btn">
                                        <button type="submit" class="btn btn-default btn-lg" onclick="return subscribe();">OK</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="czfootercmsblock" class="footer-cms-block column">
                        <h5>Store information</h5>
                        <ul id="footerlogo">
                            <li class="footer-address"><i class="fa fa-map-marker"></i><span>FoodBox - Online Food Store<br>United States</span></li>
                            <li class="footer-mobile"><i class="fa fa-phone"></i><span>000-000-0000</span></li>
                            <li class="footer-fax"><i class="fa fa-fax"></i><span>123456</span></li>
                            <li class="footer-email"><i class="fa fa-envelope-o"></i><span>sales@yourompany.com</span></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div id="bottom-footer" class="bottomfooter">
        <div class="container">
            <div class="row">


                <div class="social-block">
                    <h5 class="block-social-title title"><span>Follow Us</span></h5>
                    <ul>
                        <li class="facebook"><a href="#"><span>Facebook</span></a></li>
                        <li class="twitter"><a href="#"><span>Twitter</span></a></li>
                        <li class="youtube"><a href="#"><span>YouTube</span></a></li>
                        <li class="googleplus"><a href="#"><span>Google +</span></a></li>
                        <li class="instagram"><a href="#"><span>Instagram</span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <p id="powered" class="powered">Powerd By Eyad Jaabo <a href="#">Mshakal Store </a>&copy; 2020</p>
    </div>
</footer>