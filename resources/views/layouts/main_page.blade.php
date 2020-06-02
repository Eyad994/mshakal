<div class="content-top">
    <div class="home-container">
        <div class="main-slider">
            <div id="spinner"></div>
            <div class="swiper-viewport">
                <div id="slideshow0" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center"><a href="#"><img src="image/cache/catalog/main-banner-1-1903x679.jpg" alt="Main Banner1" class="img-responsive" /></a></div>
                        <div class="swiper-slide text-center"><a href="#"><img src="image/cache/catalog/main-banner-2-1903x679.jpg" alt="Main Banner2" class="img-responsive" /></a></div>
                        <div class="swiper-slide text-center"><a href="#"><img src="image/cache/catalog/main-banner-3-1903x679.jpg" alt="Main Banner3" class="img-responsive" /></a></div>
                    </div>

                </div>
                <div class="swiper-pagination slideshow0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript"><!--
            $('#slideshow0').swiper({
                mode: 'horizontal',
                slidesPerView: 1,
                pagination: '.slideshow0',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 0,
                autoplay: 5000,
                autoplayDisableOnInteraction: true,
                loop: true,
                effect: 'fade'
            });
            --></script>

        <script type="text/javascript">
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $("#spinner").fadeOut("slow");
            });
        </script>

    </div>
</div>

<div class="row home_row">

    <div id="content" class="col-sm-12">



        <script type="text/javascript">
            $('#tabs a').tabs();
        </script>
        <div style="height: 40px"></div>
        <div id="czcategorylistblock" class="czcategory_listblock">
            <div class="products-hadding title">Dark Chocolate, Colve, Mint</div>
            <div class="box-heading">Shop By Category</div>
            <div class="czcategory_block container">
                <div class="category_lists">
                    <div class="one-third category-part1">
                        <div class="category-inner">
                            <div class="category category1">
                                <?php $x =1; ?>
                                @foreach($leftCategories as $category)
                                        <a href="/products/{{$category->id}}">
                                            <div class="category-text category-text{{$x}}">
                                                <div class="category-icon icon{{$x}}"></div>
                                                <div class="category-content">
                                                    <div class="main-title">{{ $category->name }}</div>
                                                    <div class="sub-title">computers network connection Many desktop publishing.</div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php $x++ ?>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="one-third category-part2">
                        <div class="category-inner">
                            <div class="category category2"><a href="#" class="banner-anchor"><img src="{{ asset('ehab.jpg') }}{{--image/catalog/category-banner-1.png--}}" alt="cms-banner1" class="banner-image1"></a></div>
                        </div>
                    </div>
                    <div class="one-third category-part3">
                        <div class="category-inner">
                            <div class="category category3">
                                <?php $i =1; ?>
                                @foreach($rightCategories as $category)
                                        <a href="/products/{{$category->id}}">
                                <div class="category-text category-text{{$i}}">
                                    <div class="category-icon icon{{$i}}"></div>
                                    <div class="category-content">
                                        <div class="main-title">{{ $category->name }}</div>
                                        <div class="sub-title">computers network connection Many desktop publishing.</div>
                                    </div>
                                </div>
                                        </a>
                                    <?php $i++ ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="featured_default_width" style="display:none; visibility:hidden"></span>

        <span class="blog_default_width" style="display:none; visibility:hidden"></span>

        <script type="text/javascript"><!--

            $(document).ready(function(){
                $('.blogcarousel').owlCarousel({
                    items: 3,
                    singleItem: false,
                    navigation: false,
                    pagination: false,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall :	[991,2],
                    itemsTablet :	[575,1]
                });
                // Custom Navigation Events
                $(".czblog_next").click(function(){
                    $('.blogcarousel').trigger('owl.next');
                })
                $(".czblog_prev").click(function(){
                    $('.blogcarousel').trigger('owl.prev');
                });
            });
            --></script>
        <span class="module_default_width" style="display:none; visibility:hidden"></span>


    </div>

</div>