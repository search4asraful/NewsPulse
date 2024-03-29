@extends('frontend.master')
@section('content')

<main>
    <!-- banner-area -->
    <section class="tgbanner__area">
        <div class="container">
            <div class="tgbanner__grid">
                <div class="tgbanner__post big-post">
                    <div class="tgbanner__thumb tgImage__hover">
                        <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog01.jpg" alt="img"></a>
                    </div>
                    <div class="tgbanner__content">
                        <ul class="tgbanner__content-meta list-wrap">
                            <li class="category"><a href="blog.html">technology</a></li>
                            <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                            <li>nov 21, 2022</li>
                        </ul>
                        <h2 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h2>
                    </div>
                </div>
                <div class="tgbanner__side-post">
                    <div class="tgbanner__post small-post">
                        <div class="tgbanner__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog02.jpg" alt="img"></a>
                        </div>
                        <div class="tgbanner__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">multiverse</a></li>
                            </ul>
                            <h2 class="title tgcommon__hover"><a href="blog-details.html">Together these universes comprise everything that exists</a></h2>
                        </div>
                    </div>
                    <div class="tgbanner__post small-post">
                        <div class="tgbanner__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog03.jpg" alt="img"></a>
                        </div>
                        <div class="tgbanner__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                            </ul>
                            <h2 class="title tgcommon__hover"><a href="blog-details.html">Bubble universes or baby black hole universes may exist...</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- trending-area -->
    <section class="trending-post-area section__hover-line pt-25">
        <div class="container">
            <div class="section__title-wrap mb-40">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <div class="section__title">
                            <span class="section__sub-title">Popular Posts</span>
                            <h3 class="section__main-title">Trending News</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">More Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trending__slider">
                <div class="swiper-container trending-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog04.jpg" alt="img"></a>
                                    <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">Gaming</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.0k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                        <li><i class="fal fa-share-alt"></i> 29</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog05.jpg" alt="img"></a>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">tech</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.0k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 115</a></li>
                                        <li><i class="fal fa-share-alt"></i> 19</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog06.jpg" alt="img"></a>
                                    <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">movie</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.2k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 110</a></li>
                                        <li><i class="fal fa-share-alt"></i> 16</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog07.jpg" alt="img"></a>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">sports</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 42</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trending__post">
                                <div class="trending__post-thumb tgImage__hover">
                                    <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                    <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog08.jpg" alt="img"></a>
                                </div>
                                <div class="trending__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">sports</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    </ul>
                                    <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of potentially diverse</a></h4>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending-area-end -->

    <!-- featured-area -->
    <section class="featured-post-area section__hover-line pt-75">
        <div class="container">
            <div class="section__title-wrap mb-40">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <div class="section__title">
                            <span class="section__sub-title">Featured</span>
                            <h3 class="section__main-title">Editor Choice</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">More Featured Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="featured__post">
                        <div class="featured__thumb" data-background="{{ asset('/frontend/') }}/assets/img/blog/blog08.jpg">01</div>
                        <div class="featured__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">nature</a></li>
                                <li><span class="by">By</span> <a href="blog.html">Yokolili L.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of
                            potentially diverse</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="featured__post">
                        <div class="featured__thumb" data-background="{{ asset('/frontend/') }}/assets/img/blog/blog09.jpg">02</div>
                        <div class="featured__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">seo</a></li>
                                <li><span class="by">By</span> <a href="blog.html">limonda a.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Experimentally accessible by a connected community</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="featured__post">
                        <div class="featured__thumb" data-background="{{ asset('/frontend/') }}/assets/img/blog/blog10.jpg">03</div>
                        <div class="featured__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">human</a></li>
                                <li><span class="by">By</span> <a href="blog.html">ukolili l.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Stanford physicists Andrei
                            Linde In a new study</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="featured__post">
                        <div class="featured__thumb" data-background="{{ asset('/frontend/') }}/assets/img/blog/blog11.jpg">04</div>
                        <div class="featured__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                                <li><span class="by">By</span> <a href="blog.html">Pablo M.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Observable universes each of which would comprise</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="featured__post">
                        <div class="featured__thumb" data-background="{{ asset('/frontend/') }}/assets/img/blog/blog12.jpg">05</div>
                        <div class="featured__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">gaming</a></li>
                                <li><span class="by">By</span> <a href="blog.html">hilix x.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Of observers the observable
                            known universe</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="featured__post">
                        <div class="featured__thumb" data-background="{{ asset('/frontend/') }}/assets/img/blog/blog13.jpg">06</div>
                        <div class="featured__content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">medical</a></li>
                                <li><span class="by">By</span> <a href="blog.html">hilix x.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Accessible to telescopes, is
                            about 90 billion years</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured-area-end -->

    <!-- advertisement-area -->
    <div class="advertisement pt-45 pb-80">
        <div class="container">
            <div class="col-12">
                <div class="advertisement__image text-center">
                    <a href="#"><img src="{{ asset('/frontend/') }}/assets/img/others/advertisement.png" alt="advertisement"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- advertisement-area-end -->

    <!-- Video-post-area -->
    <section class="video-post-area section__hover-line white-bg pt-75 pb-80">
        <div class="container">
            <div class="section__title-wrap mb-40">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <div class="section__title">
                            <span class="section__sub-title">Video</span>
                            <h3 class="section__main-title">Recent Video Post</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">More Video Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="video__post-item big-post">
                        <div class="video__post-thumb">
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog14.jpg" alt="img"></a>
                            <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                <li>nov 21, 2022</li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="video__post-item side-post">
                        <div class="video__post-thumb tgImage__hover">
                            <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog15.jpg" alt="img"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">medical</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">Stanford physicists Andrei
                            Linde In a new study</a></h3>
                        </div>
                    </div>
                    <div class="video__post-item side-post">
                        <div class="video__post-thumb tgImage__hover">
                            <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog16.jpg" alt="img"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">medical</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">Accessible to telescopes, is about 90 billion years</a></h3>
                        </div>
                    </div>
                    <div class="video__post-item side-post">
                        <div class="video__post-thumb tgImage__hover">
                            <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog17.jpg" alt="img"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">medical</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">Observable universes each of which would comprise</a></h3>
                        </div>
                    </div>
                    <div class="video__post-item side-post">
                        <div class="video__post-thumb tgImage__hover">
                            <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog18.jpg" alt="img"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">medical</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally accessible by a connected community</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video-post-area-end -->

    <!-- hand-picked-area -->
    <section class="hand-picked-area black-bg fix section__hover-line pt-75 pb-80">
        <div class="container">
            <div class="section__title-wrap section__title-white mb-40">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <div class="section__title">
                            <span class="section__sub-title">hand-picked</span>
                            <h3 class="section__main-title">More to Watch</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">Hand-Picked Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trending__slider dark-post-slider">
            <div class="swiper-container handpicked-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog19.jpg" alt="img"></a>
                                <span class="is_trend"><i class="fas fa-bolt"></i></span>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">Gaming</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog20.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">tech</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 115</a></li>
                                    <li><i class="fal fa-share-alt"></i> 19</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog21.jpg" alt="img"></a>
                                <span class="is_trend"><i class="fas fa-bolt"></i></span>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">movie</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.2k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 110</a></li>
                                    <li><i class="fal fa-share-alt"></i> 16</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog22.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">sports</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.5k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 42</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog23.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">sports</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of potentially diverse</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.5k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 32</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog24.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">sports</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.5k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 32</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hand-picked-area-end -->

    <!-- stories-post-area -->
    <section class="stories-post-area section__hover-line pt-75 pb-40">
        <div class="container">
            <div class="section__title-wrap mb-40">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <div class="section__title">
                            <span class="section__sub-title">Stories</span>
                            <h3 class="section__main-title">Popular Stories</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section__read-more text-start text-sm-end">
                            <a href="blog.html">Stories Post <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gutters-40">
                <div class="col-md-6">
                    <div class="stories-post__item">
                        <div class="stories-post__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog25.jpg" alt="img"></a>
                        </div>
                        <div class="stories-post__content video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                <li>nov 21, 2022</li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the multiple universes.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="stories-post__item">
                        <div class="stories-post__thumb tgImage__hover">
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog26.jpg" alt="img"></a>
                        </div>
                        <div class="stories-post__content video__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">technology</a></li>
                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                <li>nov 22, 2022</li>
                            </ul>
                            <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally accessible by a connection to the multiple communities</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog27.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">Gaming</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.5k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 32</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog28.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">tech</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.5k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 32</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog29.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">movie</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.2k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 26</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="trending__post stories-small-post__item">
                        <div class="trending__post-thumb tgImage__hover">
                            <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                            <a href="blog-details.html"><img src="{{ asset('/frontend/') }}/assets/img/blog/blog30.jpg" alt="img"></a>
                        </div>
                        <div class="trending__post-content">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog.html">sports</a></li>
                                <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                            </ul>
                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                            <ul class="post__activity list-wrap">
                                <li><i class="fal fa-signal"></i> 1.2k</li>
                                <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                <li><i class="fal fa-share-alt"></i> 26</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stories-post-area-end -->

    <!-- newsletter-area -->
    @include('frontend.includes.newsletter')
    <!-- newsletter-area-end -->
</main>

@endsection