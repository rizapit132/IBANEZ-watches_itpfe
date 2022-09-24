 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--=============== ICON ===============--> 
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--=============== CSS ===============-->
         <link rel="stylesheet" href="assets/css/styles.css">
        <!--=============== boostrap ===============-->
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>watches-ITPFE</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                         <a href="#" class="nav__logo">
                    <i class='bx bxs-watch nav__logo-icon'></i> Luxery</a>
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#featured" class="nav__link">Featured</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#new" class="nav__link">New</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class='bx bx-moon change-theme' id="theme-button"></i>

                    <div class="nav__shop" id="cart-shop">
                        <i class='bx bx-shopping-bag' ></i>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== CART ====================-->
        <div class="cart" id="cart">
            <i class='bx bx-x cart__close' id="cart-close"></i>

            <h2 class="cart__title-center">My Cart</h2>

            <div class="cart__container">
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="assets/img/featured1.png" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Jazzmaster</h3>
                        <span class="cart__price">₱10,750</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>
                
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="assets/img/featured3.png" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Rose Gold</h3>
                        <span class="cart__price">₱8,750</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>

                <article class="cart__card">
                    <div class="cart__box">
                        <img src="assets/img/new1.png" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Longines Rose</h3>
                        <span class="cart__price">₱8,750</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>
            </div>

            <div class="cart__prices">
                <span class="cart__prices-item">3 items</span>
                <span class="cart__prices-total">₱28,025</span>
            </div>
        </div>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="assets/img/product2.png" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook  <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter <i class='bx bxl-twitter' ></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram  <i class='bx bxl-instagram' ></i>
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">NEW WATCH <br> COLLECTIONS LUXERY <i class='bx bxs-watch nav__logo-icon'></i></h1>
                        <p class="home__description">
                            Latest arrival of the new imported watches of the Philippines series, 
                            with a modern and resistant design.
                        </p>
                        <span class="home__price">Worth ₱15,990</span>

                        <div class="home__btns">
                            <a href="#" class="button button--gray button--small">
                                Discover
                            </a>

                            <button class="button home__button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section container" id="featured">
                <h2 class="section__title">
                    Featured
                </h2>

                <div class="featured__container grid">
                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="assets/img/featured1.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Jazzmaster</h3>
                            <span class="featured__price">₱10,750</span>
                             <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="assets/img/featured2.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Ingersoll</h3>
                            <span class="featured__price">₱2,550</span>
                             <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="assets/img/new3.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Rose gold</h3>
                            <span class="featured__price">₱5,790</span>
                             <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>

                        <button class="button featured__button">ADD TO CART</button>

                    </article>
                     <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="assets/img/si1.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Perpetual 41</h3>
                            <span class="featured__price">₱8,790</span>
                             <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>

                     <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="assets/img/s2.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Cosmograph</h3>
                            <span class="featured__price">₱11,990</span>
                             <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>

                     <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="assets/img/s3.png" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">DateJust</h3>
                            <span class="featured__price">₱8,990</span>
                             <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>

                        <button class="button featured__button">ADD TO CART</button>
                    </article>
                </div>
            </section>

            <!--==================== STORY ====================-->
            <section class="story section container">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">
                            Luxery Story <i class='bx bxs-watch nav__logo-icon'></i>
                        </h2>
    
                        <h1 class="story__title">
                            Inspirational Watch of <br> this year
                        </h1>
    
                        <p class="story__description">
                            The latest and modern watches of this year, is available in various 
                            presentations in this store, discover them now.
                        </p>
    
                        <a href="#" class="button button--small">Discover</a>
                    </div>

                    <div class="story__images">
                        <img src="assets/img/ki.png" alt="" class="story__img">
                        <div class="story__square"></div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="products section container" id="products">
                <h2 class="section__title">
                    Products
                </h2>

                <div class="products__container grid">
                    <article class="products__card">
                        <img src="assets/img/product1.png" alt="" class="products__img">

                        <h3 class="products__title">Spirit rose</h3>

                        <span class="products__price">₱1,500</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="assets/img/product2.png" alt="" class="products__img">

                        <h3 class="products__title">Khaki pilot</h3>
                        <span class="products__price">₱13,550</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="assets/img/product3.png" alt="" class="products__img">

                        <h3 class="products__title">Jubilee black</h3>
                        <span class="products__price">₱13,470</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                   
                    <article class="products__card">
                        <img src="assets/img/le1.png" alt="" class="products__img">

                        <h3 class="products__title">Fosil me3</h3>
                        <span class="products__price">₱12,850</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                     <article class="products__card">
                        <img src="assets/img/le2.png" alt="" class="products__img">

                        <h3 class="products__title">Lady-DateJust</h3>
                        <span class="products__price">₱10,650</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                     <article class="products__card">
                        <img src="assets/img/le3.png" alt="" class="products__img">

                        <h3 class="products__title">Fosil me3</h3>
                        <span class="products__price">₱8,550</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                     <article class="products__card">
                        <img src="assets/img/le6.png" alt="" class="products__img">

                        <h3 class="products__title">Yaxch-Master</h3>
                        <span class="products__price">₱6,550</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="assets/img/le7.png" alt="" class="products__img">

                        <h3 class="products__title">Duchen</h3>
                        <span class="products__price">₱9,770</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                     <article class="products__card">
                        <img src="assets/img/le8.png" alt="" class="products__img">

                        <h3 class="products__title">DateJust 36</h3>
                        <span class="products__price">₱11,880</span>
                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section container">
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">September 19, 2022</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="assets/img/riz.jpeg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                       <span class="testimonial__perfil-name">Riza Niel Ibanez <i class='bx bxs-watch nav__logo-icon'></i></span>
                                        <span class="testimonial__perfil-detail">Web Developer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">september 19, 2022</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="assets/img/riz.jpeg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Riza Niel Ibanez <i class='bx bxs-watch nav__logo-icon'></i></span>
                                        <span class="testimonial__perfil-detail">Web Developer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">September 19, 2022</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="assets/img/riz.jpeg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Riza Niel Ibanez <i class='bx bxs-watch nav__logo-icon'></i></span>
                                        <span class="testimonial__perfil-detail">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-button-next">
                            <i class='bx bx-right-arrow-alt' ></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class='bx bx-left-arrow-alt' ></i>
                        </div>
                    </div>

                    <div class="testimonial__images">
                        <div class="testimonial__square"></div>
                        <img src="assets/img/two.jpg" alt="" class="testimonial__img">
                    </div>
                </div>
            </section>

            <!--==================== NEW ====================-->
            <section class="new section container" id="new">
                <h2 class="section__title">
                    New Arrivals
                </h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/new1.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Longines rose</h3>
                                    <span class="new__price">₱9,800</span>
                                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/new2.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Jazzmaster</h3>
                                    <span class="new__price">₱11,000</span>
                                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/new3.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Dreyfuss gold</h3>
                                    <span class="new__price">₱7,500</span>
                                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/new4.png" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Portuguese rose</h3>
                                    <span class="new__price">₱11,900</span>
                                         <div class="rating">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star-half-o"></i>
                         <i class="fa fa-star-o"></i>

                        </div>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>                       
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== NEWSLETTER ====================-->
        <div class="row">
            <div class="col-lg-5 col-md-8 mx-auto shadow border bg-purple p-4 rounded">
                <h2 class="text-center fw-bold mb-3">Registration Form</h2>
                <form name="google-sheet">
                    <div id="form_alerts"></div>
                    <div class="form-group mb-3">
                        <label for="First name" class="form-label">First name</label>
                        <input type="text" id="First name" name="First name" class="form-control" placeholder="Enter your First name" required>
                    </div>
                      <div class="form-group mb-3">
                        <label for="Middle name" class="form-label">Middle name</label>
                        <input type="text" id="Middle name" name="Middle name" class="form-control" placeholder="Enter your Middle name" required>
                       </div>
                       <div class="form-group mb-3">
                        <label for="Last name" class="form-label">Last name</label>
                        <input type="text" id="Last name" name="Last name" class="form-control" placeholder="Enter your Last name" required>
                       </div>
                     
                     <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Gender</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-control">
                            <label for="username">Username</label>
                            <input type="text" placeholder="Enter your Username" id="username" />
                            <i class="bi bi-check-circle-fill"></i>
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <small>Error message</small>
                            </div>
                            <div class="form-control">
                            <label for="username">Email</label>
                            <input type="email" placeholder="Enter your Email" id="email" />
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                            </div>
                           <div class="form-control">
                           <label for="username">Password</label>
                           <input type="password" placeholder="Enter your Password" id="password"/>
                           <i class="fas fa-check-circle"></i>
                           <i class="fas fa-exclamation-circle"></i>
                           <small>Error message</small>
                           </div>
                           <div class="form-control">
                           <label for="username">Password Confirm</label>
                           <input type="password" placeholder="Enter your Confirm Password" id="password2"/>
                           <i class="fas fa-check-circle"></i>
                           <i class="fas fa-exclamation-circle"></i>
                           <small>Error message</small>
                           </div>
                          
                        <button class="btn btn-primary me-2" type="submit">Submit!</button>
                        <button class="btn btn-danger" type="reset">Reset!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

                  

                </div>
            </section>
        </main>



        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Luxery Information</h3>

                    <ul class="footer__list">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> rizanielibanez102@gmail.com</li>
                        <li><i class="fa fa-phone-square" aria-hidden="true"></i> 09123598700</li>
                        <li><i class="fa fa-user-circle" aria-hidden="true"></i> 123-456-789</li>
                        <li><i class="fa fa-github-alt" aria-hidden="true"></i> rizapit30</li>
                    </ul>
                </div>
                 <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Blogs</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Website</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">YouTube</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">FaceBook</a>
                        </li>
                    </ul>
                </div>
                 <div class="footer__content">
                    <h3 class="footer__title">Product</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Brand new</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Golden Rose</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Modern Watch</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>
               <div class="footer__content">
                    <h3 class="footer__title">Social</h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook'></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                    </ul>
                </div>
            </div>


            <span class="footer__copy">&#169; Riza Niel Ibanez_ITPFE Luxery<i class='bx bxs-watch nav__logo-icon'></i>. All rigths reserved</span>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
              <!--=============== Boostrap  ===============-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbz2q69AHZtAtsxPrXK9JMXhFqB4h-MrhbUjvQZOVEEU_ZG8nvsNOiDFM5ABLlJDM90/exec'
        const form = document.forms['google-sheet']
        
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => $("#form_alerts").html("<div class='alert alert-success'>Registration Successfully.</div>"))
            .catch(error => $("#form_alerts").html("<div class='alert alert-danger'>Contact message not sent.</div>"))
        })
        
    </script>

<script>
const username = document.getElementById('username');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();
    
    checkInputs();
});

function checkInputs() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    
    if(usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
    } else {
        setSuccessFor(username);
    }
    
    if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }
    
    if(passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    } else {
        setSuccessFor(password);
    }
    
    if(password2Value === '') {
        setErrorFor(password2, 'Password2 cannot be blank');
    } else if(passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords does not match');
    } else{
        setSuccessFor(password2);
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}
    
function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


 </script>


    </body>
</html>