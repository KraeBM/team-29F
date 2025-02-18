    <!--

    _______________________________________   Created and designed the Homepage of the webiste by @AnthonyResuello (Anthony Resuello) _______________________________________________

    - Homepage served as the main template of the overall design of the website (colors and styling).
    - Designed Using Fimga (Link in the Team doucmentation called (website prototype).


    @noramknarf (Francis Moran) - various minor bugfixes
-->
<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                @yield('title', 'Master layout')
                </title>
            <link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">


            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
        </head>

        <body>
            <!--             Header                      -->

            <header>

                <section class="nav-header">


                    <a href="" class="logo"> <img
                            src="{{ asset('assets/images/Screenshot_2023-11-16_030651.png') }}" alt=""></a>
                    <input type="checkbox" id="check">
                    <label for="check" class="menu-icon">
                        <i class="bx bx-menu" id="menu"></i>
                        <i class="bx bx-x" id="close"></i>
                    </label>
                    <nav class="navbar">
                        <a href="{{ route('index') }}">Home</a>
                        <a href="{{route('productspage.id', ['id' => 1])}}">Products</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('contactUs') }}">Contact Us</a>
                        

                        <!--        Fixed the heading so that the login and register is included in the header           -->


                        {{-- 
                            /*
                            Login, register and dashboard 
                            mady by @AbuIsNotHer3 @BravoBoy2 == Abubakarsiddik Mohammed.

                            Desgined by @AnthonyResuello
                            */
                            
                            --}}
                        @if (Route::has('login'))

                            @auth
                                <a href="{{ url('home') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i
                                        class="bx bx-user"></i> Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        @endif

                        <!--<a href="#" class="login-text"><i class="bx bx-user"></i> Log in</a>  !-->
                        <a href="{{route('basket')}}" class="cart-icon"><i class="bx bx-shopping-bag"></i> Basket</a>
                        <!--Just for the record, idk what I'm doing with this ^ so feel free to clean it up -->
                    </nav>
                <!--- End of Section  --> </section>
                
            <!--         Hero Section         -->
            <section id="hero">
                <div class="container">
                    @yield('content')
                    <div class="hero-info">

                        <h1>Explore Top-Quality Gaming Gear</h1>
                        <p class="hero-text">
                            Immerse yourself in the world of gaming with Valhalla's collection of top-notch gaming
                            laptops.
                            Unleash the power, speed, and precision you need for an unparalleled gaming experience.
                            Explore our curated selection and elevate your gaming journey to new heights.
                        </p>
                        </p>
                        <a href="{{route('productspage.id', ['id' => 1])}}" class="view-laptops-btn">View Products</a>
                    </div>
                </div>


                <!-- Brands Section -->
                <div class="brands-section">
                    <div class="brand-images">
                        <img src="{{ asset('assets/images/AMD-Logo.png') }}" alt="Brand 1">
                        <img src="{{ asset('assets/images/MSI-Logo-2019.png') }}" alt="Brand 2">
                        <img src="{{ asset('assets/images/nvidia logo.png') }}" alt="Brand 3">
                        <img src="{{ asset('assets/images/Razer-Logo (1).png') }}" alt="Brand 4">
                    </div>
                </div>
        </header>
                

          <!-- Best seller prodcuts-->
          <section class= "main">

      <!-- Services Section -->
     <section class="our-product-section">
                  <div id="product-container">
                    <div class="box-card">
                        <div class = "info">
                            <h1 class="section-heading">High-Performance Gaming Laptops</h1>
                            <p>Our high-performance gaming laptops are packed with the latest hardware,
                                including powerful processors, dedicated graphics cards, and high-refresh-rate displays.
                            </p>
                            <p>They can handle even the most demanding games with ease, and they're also great for other
                                graphics-intensive tasks
                                like video editing, 3D modelling and game development.</p>
                            <a href="{{route('productspage.id' ,['id' =>1]) }}" class="view-laptops-btn">View Products</a>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/asus-rog-launched-two-new-high-end.jpg') }}"
                                alt="laptop 3">
                        </div>
                    </div>
                </div>
                </div>
            </section>

            
   

          
            <section id="best-seller-sction">
            
                    <h1 class = "title-categories">Product Categories</h1>
                    <div class="title-line-categories"></div> 
                    <div id="category-container">
                    
                            <div class="Category-1">
                          
                                <img src="{{ asset('assets/images/AOC_27G2_PV_-FRONT-large.png') }}" alt="laptop1"> 
                                
                                <div class = "Category-1-bottom">
                         
                                 <a href="{{route('productspage.id' ,['id' =>1]) }}" class="monitor-btn">
                                    <h1>Laptop</h1>
                                 </a>
                                </div>  
                         
                            </div>
                          
                            <div class="Category-1">
                                <img src="{{ asset('assets/images/webprim_apexpro_tkl.png__1200x627_crop-fit_optimize_subsampling-2.png') }}" alt="laptop1"> 
                                <div class = "Category-1-bottom">
                                <a href="{{route('productspage.id' ,['id' =>1]) }}" class="monitor-btn">
                                    <h1>Keyboard</h1></a>
                                </div>  
                         
                            </div>
                       
                            <div class="Category-1">
                                <img src="{{ asset('assets/images/pro-headset-gallery-1.png') }}" alt="laptop1"> 
                                <div class = "Category-1-bottom">
                                <a href="{{route('productspage.id' ,['id' =>1]) }}" class="monitor-btn">
                                    <h1>Headset</h1></a>
                                </div>  
                         
                            </div>
                       
                            <div class="Category-1">
                                <img src="{{ asset('assets/images/a60b39dbd9168b865d64254d7d860d20.png') }}" alt="laptop1"> 
                                <div class = "Category-1-bottom">
                                <a href="{{route('productspage.id' ,['id' =>1]) }}" class="monitor-btn">
                                    <h1>Mouse</h1></a>
                                
                                </div>  
                         
                            </div>
                       
                            <div class="Category-1">
                                <img src="{{ asset('assets/images/h732.png') }}" alt="laptop1"> 
                                <div class = "Category-1-bottom">
                                <a href="{{route('productspage.id' ,['id' =>1]) }}" class="monitor-btn">
                                    <h1>Laptop</h1></a>
                                </div>  
                         
                        
                       
                     
                    </div>
            </section>



                <!-- Our Product Section-->
            <section class= "main">

                <section id="best-seller-sction">
                    <div class="big-card">
                        <h1 class = "title-products">Best Sellers</h1>
                        <div class="title-line-products"></div> <!-- Add this line -->
                        <div id="laptop-container">
                            <!-- @say3dd - Code for displaying "Our Laptops" section -->
                            @foreach ($laptops as $laptop)
                                <div class="laptop">
                                    <div class="specs-container">
                                        <img src="{{ asset($laptop->image_path) }}" alt="laptop">
                                        <h1>{{ $laptop->laptop_name }}</h1>
                                        <p>Processor: {{ $laptop->processor }}</p>
                                        <p>RAM: {{ $laptop->RAM }}GB</p>
                                        <p>Graphics: {{ $laptop->GPU }}</p>
                                        <h3>£{{ $laptop->price }}</h3>
                                    </div>
                                    <form action='{{route('product.getInfo')}}' method='post'>
                                        @csrf
                                        <input type="hidden" name="laptopData" value={{$laptop->product_id}}>
                                        <button class="buy-product"> Add to Basket </button>
                                    </form>
                                </div>
                            @endforeach
                    </div>
                </section>
                    <footer>
                        @include('footer')
                    </footer>
                    </section>
        </body>
        </html>   
