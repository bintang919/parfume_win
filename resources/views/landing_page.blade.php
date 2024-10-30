<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/f3316db237.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        header .logo img {
            max-height: 60px;
        }
        header .search-bar {
            flex-grow: 1;
            margin-left: 60%;
            position: relative;
        }
        header .search-bar input {
            width: 60%;
            padding: 10px 20px;
            border-radius: 25px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        /* Hero Section with Slick Carousel */
        .hero {
            position: relative;
            background-color: #f8f8f8;
            padding: 40px 0;
            text-align: center;
        }
        .hero-slider {
            width: 80%;
            margin: 0 auto;
        }
        .hero-slide {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px;
        }
        .hero-slide img {
            width: 100%;
            height: auto;
        }
        .hero-slide .text {
            text-align: left;
            padding-left: 20px;
        }
        .hero-slide h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }
        .hero-slide p {
            font-size: 18px;
            margin-top: 10px;
        }
        .slick-dots {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
        }
        .slick-prev, .slick-next {
            top: 50%;
            z-index: 1;
        }
        .not{
            display: none;
        }
        /* Products Section */
        .products {
            padding: 60px 5%;
        }
        .products h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: auto auto auto;
            flex-wrap: wrap;
            gap: 8px;
            /* justify-content: space-between; */
        }
        .product-item {
            display: flex;
            border: 1px solid #333333;
            padding: 20px;
            margin-bottom: 30px;
            text-align: left;
            background-color: #fff;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .product-item img {
            max-width: 100px;
            margin-bottom: 15px;
        }
        .product-item h1 {
            margin-left: 18px;
            font-size: 18px;
            margin-bottom: 10px;
            margin-top: -15px;
        }
        .product-item p {
            font-size: 16px;
            color: #333;
            margin-left: 20px;
            font-weight: bold;
        }
        .shop-links {
            display: flex;
            justify-content: center;
        }
        .shop-links a {
            display: inline-block;
            padding: 8px 15px;
            margin: 0 5px;
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .shop-links .shopee { background-color: #FF5722; }
        .shop-links .tokopedia { background-color: #2FBF50; }
        .shop-links .tiktok { background-color: #000; }
        
        /* Alphabet Section */
        .alphabet-section {
            text-align: center;
            padding: 40px;
            background-color: #f8f8f8;
        }
        .alphabet-section span {
            display: inline-block;
            font-size: 20px;
            margin: 10px;
            cursor: pointer;
        }
        .alphabet-section span:hover {
            color: #888;
        }

        /* Footer Section */
        .footer {
            text-align: center;
            padding: 40px;
            background-color: #fff;
        }
        .footer .whatsapp-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: #25D366;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }
        .footer .whatsapp-button:hover {
            background-color: #20b358;
        }
        #loadMore {
            width: 500px;
            color: #707070;
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px;
            transition: .3s;
            text-decoration: none;
            font-size: 36px;
        }
        #loadMore:hover {
            color: #111111;
            background-color: #fff;
            text-decoration: none;
        }
        .noContent {
            color: #000 !important;
            background-color: transparent !important;
            pointer-events: none;
        }
        /* hover */
        .list-category {
            text-align: left;
        }
        .list-category a:first-child {
            text-decoration: none;
            color: #000000;
            padding: 1px;
            font-size: 38px;
        }

        .flexible-table {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            border-collapse: separate; /* Menghilangkan jarak antara border tabel */
            border-spacing: -1000px;
            color: #707070;
        }

        .flexible-table td {
            border: 0px solid black; /* Menambahkan border pada sel */
            padding: 0px; /* Memberikan padding pada sel */
            height: 22px;
        }

        .space-table {
            font-size: 64px;
            color: #333;
        }
        .alphabet {
            text-decoration: none; 
            color: #707070;
        } 
        .search-bar {
            flex-grow: 1;
            margin-left: 60%;
            position: relative;
        }

        .search-bar input[type="text"] {
            width: 60%;
            padding: 10px 20px;
            border-radius: 25px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .search-bar .fa-search {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888; /* Warna ikon */
            cursor: pointer;
        }
        .slick-prev:before, .slick-next:before {
            color: #000000 !important;
        }
        .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
        z-index: 1000;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
        from {opacity: 0;} 
        to {opacity: 1;}
        }

        @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
        }
        .modal-open {
        overflow: hidden;
        }

        .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
        }

        .modal {
        position: fixed;
        top: 210px;
        left: 610px;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
        }

        .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
        }

        .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        -webkit-transform: translate(0, -50px);
        transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            -webkit-transition: none;
            transition: none;
        }
        }

        .modal.show .modal-dialog {
        -webkit-transform: none;
        transform: none;
        }

        .modal-dialog-scrollable {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        max-height: calc(100% - 1rem);
        }

        .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden;
        }

        .modal-dialog-scrollable .modal-header,
        .modal-dialog-scrollable .modal-footer {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        }

        .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
        }

        .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - 1rem);
        }

        .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: "";
        }

        .modal-dialog-centered.modal-dialog-scrollable {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100%;
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none;
        }

        .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none;
        }

        .modal-content {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-clip: padding-box;
        outline: 0;
        }

        .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000;
        }

        .modal-backdrop.fade {
        opacity: 0;
        }

        .modal-backdrop.show {
        opacity: 0.5;
        }

        .modal-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
        }

        .modal-header .close {
        padding: 1rem 1rem;
        margin: -1rem -1rem -1rem auto;
        }

        .alphabet {
        text-decoration: none; 
        color: black; 
        cursor: pointer;
        }
        .alphabet.active {
            color: gray;
        }

    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="img/logo.jpg" alt="Perfume Store Logo"  style="max-width: 170px; max-height: 143px;">
    </div>
    <div class="search-bar">
        <input type="text" placeholder="    Search for a perfume by name or brand">
        <i class="fas fa-search"></i>
    </div>
</header>

<!-- Hero Section with Carousel -->
<section class="hero">
    <div class="hero-slider">
        @foreach ($banner as $bn)
            <div class="hero-slide">
                <img src="{{ asset('storage/' . $dt->loc) }}" alt="{{ $dt->desc }}">
            </div>
        @endforeach
    </div>
</section>

<section class="products">
    <h2>ALL BRANDS</h2>
    <div class="product-grid">
        @foreach ($product as $key => $dt)
            <div class="not">
                <div class="product-item">
                    <div class="imagine">
                        <img src="{{ asset('storage/' . $dt->product_image) }}"  style="max-width: 100px; max-height: 143px;" alt="{{ $dt->product_name }}">
                    </div>
                    <div>
                        <a  onclick="openModal();currentSlide({{ $key+1 }})" style="cursor: pointer;"><p>{{ $dt->Category->categories_name }}</p>
                        <h1 style="font-size: 34px;">{{ $dt->product_name }}</h1></a>
                    <p style="font-size: 13px;">SHOP NOW AT :</p>
                    <div class="shop-links">
                        <a href="{{ $dt->url_shopee }}" target="_blank"><img src="{{ asset('asset/ICON SHOPEE.png') }}" style="margin-top: 5px;"></a>
                        <a href="{{ $dt->url_tokopedia }}" target="_blank"><img src="{{ asset('asset/ICON TOKOPEDIA.png') }}"></a>
                        <a href="{{ $dt->url_tiktok }}" target="_blank"><img src="{{ asset('asset/ICON TIKTOK SHOP.png') }}"></a>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="mySlides" onclick="closeModal()">
                <img src="img/Abercrombie & Fitch Firts Instinct men-02.png" style="width:30%">
                </img>
                </div>
                <div class="mySlides" onclick="closeModal()">
                    <img src="img/Annasui Romantica-01.png" style="width:30%">
                    </img>
                    </div>
                    <div class="mySlides" onclick="closeModal()">
                <img src="img/Abercrombie & Fitch Firts Instinct men-02.png" style="width:30%">
               </img>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="loadMore">LOAD MORE FRAGRANCES</a>
    
</section>

<section class="alphabet-section">
    <!-- Menampilkan huruf alfabet sebagai tombol -->
    <div>
        <table class="flexible-table" style="text-align: left; font-weight: bold; font-size: 30px;">
            <tr>
                @foreach (range('A', 'Z') as $letter)
                    <td><a href="javascript:void(0)" class="alphabet" onclick="filterByLetter('{{ $letter }}', this)">{{ $letter }}</a></td>
                @endforeach
            </tr>
        </table>
    </div>

    <!-- Menampilkan daftar kategori -->
    <div class="list-category">
        <table class="flexible-table">
            @foreach ($categories as $letter => $items)
                <tr class="category-row" data-letter="{{ $letter }}">
                    <td rowspan="2" class="space-table">{{ $letter }}</td>
                    @foreach ($items as $category)
                        <td style="vertical-align: bottom;">{{ $category->categories_name }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
</section>


<footer class="footer">
    <a href="https://wa.me/1234567890"><img src="{{ asset('asset/ICON WHATSAPP.png') }}" style="max-width: 200px;"></a>
</footer>

<!-- Slick Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.hero-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 1500,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>'
        });
    });
    
</script>
<script>
    function filterByLetter(letter, element) {
        // Filter rows
        var rows = document.querySelectorAll('.category-row');
        rows.forEach(function(row) {
            if (row.getAttribute('data-letter') === letter) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        // Highlight active letter
        var alphabets = document.querySelectorAll('.alphabet');
        alphabets.forEach(function(alphabet) {
            alphabet.classList.remove('active');
        });
        element.classList.add('active');
    }
</script>
<script>
    $(document).ready(function(){
  $(".not").slice(0, 9).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".not:hidden").slice(0, 9).slideDown();
    if($(".not:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})

</script>
<script>
     function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

</body>
</html>
