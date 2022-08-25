@extends('layout.app')

@section('content')
    <section class="comic-section">
        {{-- blue div --}}
        <div class="blue-div"></div>
        {{-- Top --}}
        <div class="s-container">

            {{-- Comic Thumb --}}
            <div class="img-tag">
                <img src="{{ $current_comic['thumb'] }}" alt="thumb">
            </div>

            <h1>ACTION COMIC #1000: THE DELUXE EDITION</h1>
            {{-- Top section --}}
            <div class="main-comic-top">
                
                {{-- Left-side --}}
                <div class="left-side">
                    <div class="price-banner">
                        <div class="col">
                            <div class="price">
                                <span class="green">
                                    U.S. Price
                                </span>
                                <span>$19.99</span>
                            </div>
                            <span class="green">
                                AVAILABLE
                            </span>
                        </div>
    
                        <div class="s">
                            <a href="#"><span>Check Availability</span></a>
                            <span>&#9660</span>
                        </div>
                    </div>
    
                    <div class="description">
                        <p>{{ $current_comic['description'] }}</p>
                    </div>
                </div>

                {{-- Right-side --}}
                <div class="right-side">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <div class="main-comic-bottom">
            <div class="s-container">
               
                {{-- CONTENT --}}
               <div class="bottom-content">
                    <div class="column">
                        <h3>Talent</h3>
                        <ul>
                            <li>
                                <span>Art by:</span>
                                <div class="artists">
                                    @foreach ($current_comic['artists'] as $artist)
                                        <a href="#">{{ $artist }}</a>
            
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <span>Written by:</span>
                                <div class="writers">
                                    @foreach ($current_comic['writers'] as $writer)
                                        <a href="#">{{ $writer }}</a>
            
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="column">
                        <h3>Specs</h3>
                        <ul>
                            <li>
                                <span>Series:</span>
                                <a href="#">ACTION COMICS</a>
                            </li>
                            <li>
                                <span>U.S. Price:</span>
                                <span>$19.99</span>
                            </li>
                            <li>
                                <span>On Sale Date:</span>
                                <span>Oct 02 2018</span>
                            </li>
                        </ul>
                    </div>
               </div>
            </div>

            {{-- INFOBANNER --}} 
            <div class="icon-banner">
                <div class="s-container">
                    <div class="icons-content">
                        <div class="icon">
                            <span>DIGITAL COMICS</span>
                            <a href="#">
                                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics">
                            </a>
                        </div>
            
                        <div class="icon">
                            <span>DC MERCHANDISE</span>
                            <a href="#">
                                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="merchandise comics">
                            </a>
                        </div>
            
                        <div class="icon">
                            <span>SUBSCRIPTION</span>
                            <a href="#">
                                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="subscription comics">
                            </a>
                        </div>
            
                        <div class="icon">
                            <span>COMIC SHOP LOCATOR</span>
                            <a href="#">
                                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="shop locator">
                            </a>
                        </div>
                        
                        <div class="icon">
                            <span>DC POWER VISA</span>
                            <a href="#">
                                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc visa">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        

    </section>
@endsection