<!DOCTYPE html>
<html>

<head>
    <title>TimeTrove - Luxury Watch </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="free, luxury watches, one page template">
    <meta name="description" content="Free Luxury Watch One Page Website Template">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/Frontend/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/Frontend/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Mirza:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true" tabindex="0">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <title>Search</title>
            <path fill="currentColor"
                d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8z" />
            <path fill="currentColor" d="m9 17l8-5l-8-5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
            <path
                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-empty" viewBox="0 0 16 16">
            <path
                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="wishlist" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m12.1 18.55l-.1.1l-.11-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04 1 3.57 2.36h1.86C13.46 6 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05M16.5 3c-1.74 0-3.41.81-4.5 2.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5c0 3.77 3.4 6.86 8.55 11.53L12 21.35l1.45-1.32C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 12.998H5v-2h14z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="mail" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M3 7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z" />
                <path d="m3 7l9 6l9-6" />
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002ZM7 8.48H3V21h4V8.48Zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M12.244 4c.534.003 1.87.016 3.29.073l.504.022c1.429.067 2.857.183 3.566.38c.945.266 1.687 1.04 1.938 2.022c.4 1.56.45 4.602.456 5.339l.001.152v.174c-.007.737-.057 3.78-.457 5.339c-.254.985-.997 1.76-1.938 2.022c-.709.197-2.137.313-3.566.38l-.504.023c-1.42.056-2.756.07-3.29.072l-.235.001h-.255c-1.13-.007-5.856-.058-7.36-.476c-.944-.266-1.687-1.04-1.938-2.022c-.4-1.56-.45-4.602-.456-5.339v-.326c.006-.737.056-3.78.456-5.339c.254-.985.997-1.76 1.939-2.021c1.503-.419 6.23-.47 7.36-.476h.489ZM9.999 8.5v7l6-3.5l-6-3.5Z" />
        </symbol>
    </svg>
   @include('header')
    <ul class="waypoints list-unstyled position-fixed">
        <li class="waypoints1">
            <a href="#intro"></a>
        </li>
        <li class="waypoints2">
            <a href="#about-us"></a>
        </li>
        <li class="waypoints3">
            <a href="#video-player"></a>
        </li>
        <li class="waypoints4">
            <a href="#testimonials"></a>
        </li>
        <li class="waypoints4">
            <a href="#featured-products"></a>
        </li>
        <li class="waypoints5">
            <a href="#faqs"></a>
        </li>
        <li class="waypoints5">
            <a href="#product-detail"></a>
        </li>
        <li class="waypoints5">
            <a href="#footer"></a>
        </li>
    </ul>
    <section id="intro"
        style="background-image: url({{ config('app.url') }}/Frontend/images/banner-image1.jpg); background-repeat: no-repeat; background-position: center; width: 100%; height: 1021px;">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="banner-content py-lg-12">
                        <h1 class="display-1 pb-4">Perfect <span class="text-primary">Watch</span> for perfect people.
                        </h1>
                        <p>Discover captivating stories, expand your knowledge, and embark on new adventures.</p>
                        <a href="#featured-products" id="order-now-btn"
                            class="btn btn-lg btn-outline-dark btn-bg-light text-uppercase mt-3 rounded-pill fw-bold">Order
                            now! </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us"
        style="background-image: url({{ config('app.url') }}/Frontend/images/pattern-bg.png); background-repeat: no-repeat; background-position: center; width: 100%; height: auto;">
        <div class="container-lg">
            <div class="row align-items-center py-lg-9">
                <div class="col-lg-6">
                    <div class="display-header">
                        <h2 class="display-4 m-0 pb-4">Product Overview</h2>
                        <p>Welcome to the elegant world of Reddy. Our watches blend exquisite craftsmanship with
                            timeless design, making them the perfect accessory for any occasion. Each timepiece is
                            meticulously handcrafted to ensure superior quality and precision. Explore our collection
                            and discover the artistry that defines us. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="detail">
                        <ul>
                            <li>
                                <strong>Premium Materials:</strong> Crafted with the finest materials, our watches
                                feature high-quality stainless steel cases and scratch-resistant sapphire crystal,
                                ensuring durability and longevity.
                            </li>
                            <li>
                                <strong>Precision Timekeeping:</strong> Our watches are equipped with precise quartz
                                movements or automatic movements, guaranteeing accurate timekeeping for the modern
                                individual.
                            </li>
                            <li>
                                <strong>Elegant Design:</strong> The sleek and minimalist design of our watches exudes
                                sophistication and class. From the slim profile to the carefully crafted dials, every
                                detail is meticulously designed to make a statement.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="video-player" class="video bg-gray-8 py-lg-8">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <div class="display-header text-light">
                        <h2 class="display-2 text-light mt-0">Video Promo</h2>
                        <p>Condimentum amet quam venenatis nulla sed sem lacus cursus sit. Sed nulla felis aliquet
                            elementum egestas suspendisse nisl faucibus nulla aliquet est ac dictum auctor. </p>
                    </div>
                </div>
                <div class="video-content position-relative mt-5">
                    <div class="video-bg">
                        <img src="{{ config('app.url') }}/Frontend/images/video-item.jpg" alt="video"
                            class="img-fluid">
                    </div>
                    <div class="video-player">
                        <a class='youtube play-btn position-absolute d-flex justify-content-center align-items-center'
                            href="https://www.youtube.com/embed/2-iXtcRv5Ts">
                            <svg class="play text-light" width="120" height="120">
                                <use xlink:href="#play"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="py-lg-7">
        <div class="container-lg">
            <div class="section-header mt-0 text-center">
                <h2 class="display-2">Our Customer’s Reviews</h2>
            </div>
            <div class="d-flex flex-wrap">
                <div class="swiper review-swiper position-relative mb-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide border p-5">
                            <div class="review-item">
                                <blockquote class="fs-5">"I've owned several luxury watches, but my Reddy watch
                                    stands out from the rest. The craftsmanship is impeccable, and the attention to
                                    detail is truly remarkable. It's a timeless piece that never fails to garner
                                    compliments. I'm proud to be a Reddy watch owner." </blockquote>
                                <div class="author-detail d-flex justify-content-between align-items-center">
                                    <div class="name fw-bold">David T - Feb 22, 2023</div>
                                    <div class="rating d-flex">
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide border p-5">
                            <div class="review-item">
                                <blockquote class="fs-5">"I've been wearing my Reddy watch for over a year now, and
                                    I'm extremely impressed with its performance. Not only does it look stunning, but it
                                    also keeps time flawlessly. The quality and reliability of this watch are unmatched.
                                    It's become an essential part of my everyday style." </blockquote>
                                <div class="author-detail d-flex justify-content-between align-items-center">
                                    <div class="name fw-bold">Emma Turner - April 5, 2023</div>
                                    <div class="rating d-flex">
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide border p-5">
                            <div class="review-item">
                                <blockquote class="fs-5">"As a watch collector, I appreciate watches that blend
                                    elegance with functionality. My Reddy watch does exactly that. The design is sleek
                                    and sophisticated, and the automatic movement keeps perfect time. I've received
                                    numerous compliments on its unique design" </blockquote>
                                <div class="author-detail d-flex justify-content-between align-items-center">
                                    <div class="name fw-bold">Emily Bennett - April 18, 2023</div>
                                    <div class="rating d-flex">
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide border p-5">
                            <div class="review-item">
                                <blockquote class="fs-5">"I've owned several luxury watches, but my Reddy watch
                                    stands out from the rest. The craftsmanship is impeccable, and the attention to
                                    detail is truly remarkable. It's a timeless piece that never fails to garner
                                    compliments. I'm proud to be a Reddy watch owner." </blockquote>
                                <div class="author-detail d-flex justify-content-between align-items-center">
                                    <div class="name fw-bold">David T - May 22, 2023</div>
                                    <div class="rating d-flex">
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                        <svg class="star-fill svg-yellow" width="15" height="15">
                                            <use xlink:href="#star-fill"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination position-absolute"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="featured-products" class="bg-gray-1 py-lg-6">
        <div class="container-lg">
            <div class="display-header text-center">
                <h2 class="display-2">Features of Watch</h2>
            </div>
            <div class="product-content">
                <div class="row">
                  @foreach ($getWatch as $item)
                      <div class="col-lg-4 col-md-6 mb-5">
                        <div class="product-card">
                            <div class="image-holder position-relative">
                                <a href="#">
                                    <img src="{{asset('TimeTrove/watch/'.$item->photo_path)}}"
                                        alt="product-item" class="img-fluid">
                                </a>
                                <div class="cart-concern">
                                    <div class="cart-button position-absolute">
                                        <a href="{{url('/_user/add_to_cart/'.$item->id)}}" class="btn btn-normal bg-white"
                                            data-bs-target="#modallong">
                                            <svg class="cart" width="20" height="20">
                                                <use xlink:href="#cart"></use>
                                            </svg>
                                        </a>
                                        <button type="button" class="btn btn-normal bg-white">
                                            <svg class="wishlist" width="20" height="20">
                                                <use xlink:href="#wishlist"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <h3 class="card-title fs-3 mb-2 mt-2">
                                    <a href="single-product.html">{{$item->title}}</a>
                                </h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section id="faqs" class="py-lg-10">
        <div class="container-lg">
            <div class="row align-items-center">
                <h2 class="display-4 fw-600 mt-0 text-center">FAQs Section</h2>
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header m-0" id="headingOne">
                                <button class="accordion-button fs-3 fw-medium bg-transparent px-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Are your watches water-resistant?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Yes, all our watches are water-resistant up to 50 meters.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-heade m-0" id="headingTwo">
                                <button class="accordion-button fs-3 fw-medium bg-transparent px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">How long is the warranty
                                    period?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">A full warranty may be active for just a limited time after
                                    the item is purchased, perhaps 60 or 90 days, or it may cover the product "for life"
                                    (the same goes for limited warranties). </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header m-0" id="headingThree">
                                <button class="accordion-button fs-3 fw-medium bg-transparent px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">Can I replace the watch
                                    strap?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">If you have watch strap, you can replace your Watch with an
                                    incident of accidental damage.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product-detail" class="single-product bg-gray-8 py-lg-8">
        <div class="container-lg">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="image-holder">
                        <img src="{{ config('app.url') }}/Frontend/images/product-large-1.jpg" alt="product-large"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info">
                        <div class="display-header text-light">
                            <h2 itemprop="name" class="product-title text-light">Order Your Choice</h2>
                            <p>Experience the elegance of Reddy on your wrist. Place your order today and enjoy free
                                worldwide shipping.</p>
                        </div>
                        <div class="product-action mt-4">
                            <div class="detail-list mt-3">
                                <ul class="text-light list-unstyled">
                                    <li class="pb-3">
                                        <strong>Watch Model:</strong>
                                        <a href="#" class="text-light">Reddy Watch</a>
                                    </li>
                                    <li class="pb-3">
                                        <strong>Price:</strong>
                                        <a href="#" class="text-light">$2000.00</a>
                                    </li>
                                    <li class="color-product-options pb-3">
                                        <div class="color-toggle d-flex" data-option-index="0">
                                            <div class="item-title">
                                                <strong>Choose Strap Color:</strong>
                                            </div>
                                            <div class="color-item ms-2" data-val="Cement" title="Cement">
                                                <span class="color-inner d-block rounded-pill"
                                                    style="background-color: #ABA194"></span>
                                            </div>
                                            <div class="color-item ms-2" data-val="Reddish Brown"
                                                title="Reddish Brown">
                                                <span class="color-inner d-block rounded-pill"
                                                    style="background-color: #812013"></span>
                                            </div>
                                            <div class="color-item ms-2" data-val="Woody Brown" title="Woody Brown">
                                                <span class="color-inner d-block rounded-pill"
                                                    style="background-color: #4A3937"></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-quantity">
                                <div class="input-group product-qty me-3 border rounded-2" style="max-width: 130px;">
                                    <span class="input-group-btn bg-gray-2">
                                        <button type="button" class="quantity-left-minus btn btn-number"
                                            data-type="minus" data-field="">
                                            <svg width="16" height="16">
                                                <use xlink:href="#minus"></use>
                                            </svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity"
                                        class="form-control input-number text-center bg-gray-1" value="1"
                                        min="1" max="100">
                                    <span class="input-group-btn bg-gray-2">
                                        <button type="button" class="quantity-right-plus btn btn-number"
                                            data-type="plus" data-field="">
                                            <svg width="16" height="16">
                                                <use xlink:href="#plus"></use>
                                            </svg>
                                        </button>
                                    </span>
                                </div>
                                <button type="submit" name="add" id="add-to-cart"
                                    class="btn btn-lg btn-outline-dark btn-bg-light text-uppercase mt-5 rounded-pill fw-bold">Order
                                    Now </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="py-lg-10">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 me-5">
                    <div class="display-header">
                        <h2 class="display-2">Get In Touch</h2>
                    </div>
                    <form class="needs-validation"  action="{{url('/contact')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <label for="firstName" class="form-label" name='name'>Your name</label>
                                <input type="text" class="form-control bg-gray-1 fst-italic rounded-0"
                                    id="firstName" placeholder="Write your name here" value="" required=""  name ="name">
                                <div class="invalid-feedback"> Valid full name is required. </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label" name='email'>Your email</label>
                                <input type="email" class="form-control bg-gray-1 fst-italic rounded-0"
                                    id="email" placeholder="Write your email here" name ="email">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label" name='message'>Your message</label>
                                <textarea type="email" class="form-control bg-gray-1 fst-italic rounded-0" id="email"
                                    placeholder="Write message" name ="message"></textarea>
                                <div class="invalid-feedback"> Please put a some words here. </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg mt-5 rounded-pill text-uppercase" type="submit">Send
                    </button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="display-header">
                            <h2 class="display-2">Stay Connected</h2>
                        </div>
                        <div class="contact-item">
                            <svg class="mail svg-gray" width="18" height="18">
                                <use xlink:href="#mail"></use>
                            </svg>
                            <a href="mailto:Youremail@example.com">diptosaha.ndc@gmail.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="display-header">
                            <h2 class="display-2">Social info</h2>
                            <div class="social-links">
                                <ul class="list-unstyled d-flex flex-wrap gap-3">
                                    <li>
                                        <a href="https://www.facebook.com" target="_blank" >
                                            <svg width="25" height="25" viewBox="0 0 24 24"
                                                class="svg-gray-3">
                                                <use xlink:href="#facebook"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com" target="_blank" >
                                            <svg width="25" height="25" viewBox="0 0 24 24"
                                                class="svg-gray-3">
                                                <use xlink:href="#twitter"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com" target="_blank" >
                                            <svg width="25" height="25" viewBox="0 0 24 24"
                                                class="svg-gray-3">
                                                <use xlink:href="#youtube"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com" target="_blank">
                                            <svg width="25" height="25" viewBox="0 0 24 24"
                                                class="svg-gray-3">
                                                <use xlink:href="#linkedin"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <<a href="https://www.instagram.com" target="_blank">
                                            <svg width="25" height="25" viewBox="0 0 24 24"
                                                class="svg-gray-3">
                                                <use xlink:href="#instagram"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom text-center bg-gray-1 py-5">
        <p>©  Designed By <a href="https://templatesjungle.com/">Dipto Saha</a>
        </p>
    </div>
    <script src="{{ config('app.url') }}/Frontend/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ config('app.url') }}/Frontend/js/plugins.js"></script>
    <script src="{{ config('app.url') }}/Frontend/js/script.js"></script>

    <script>
        document.getElementById('add-to-cart').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default form submission
            document.getElementById('featured-products').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

    <script>
        document.getElementById('order-now-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action
            document.getElementById('featured-products').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>

</html>
