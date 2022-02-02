<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--metatextblock--><title>Мальчики каталог</title>
    <link rel="canonical" href="veshelovks-m.html">
    <!--/metatextblock-->

    <link rel="shortcut icon" href="{{asset('imgs/common/__.ico')}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{asset('imgs/common/3.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('imgs/common/3.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('imgs/common/3.png')}}">
    <link rel="apple-touch-startup-image" href="{{asset('imgs/common/3.png')}}">

    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="{{asset('imgs/common/3.png')}}">
    <!-- Assets -->

    <link rel="stylesheet" href="{{ asset('js/bootstrap/5.0.2/css/bootstrap.min.css')}}">

    <style>
        .t-body{
            /*min-height: 900px;*/
            min-height: 100vh;
            background-color: {{$body_bgc}};
        }
    </style>
</head>
<body>
<div class="t-body" style="margin:0;">

    <style>

        section[class="Items"]{

        }
        section[class="Items"] .itemLine{
            display: flex;
        }
        section[class="Items"] .itemLine .catalogItem{
            display: flex;
            /*justify-content: center;*/
        }
        section[class="Items"] .itemLine .catalogItem .img{
            width: 270px;
            height: 270px;
            background-repeat: no-repeat;
            background-size: 270px 270px;
            position: relative;
            display: flex;
        }
        section[class="Items"] .itemLine .catalogItem .img .caption{
            position: absolute;
            top: 75%;
            left: calc(52% - 62px);
            color: #fff;
            font-weight: bold;
            display: flex;
            z-index: 2;
        }
        section[class="Items"] .itemLine .catalogItem .img .caption .year{
            font-size: 44px;
        }
        section[class="Items"] .itemLine .catalogItem .img .caption .title{
            font-size: 19px;
            padding-top: 26px;
            padding-left: 7px;
        }
        section[class="Items"] .itemLine .catalogItem .img .bottom_bgc_theme{
            width: 100%;
            height: 75px;
            align-self: end;
            opacity: 0.1;
        }

        .mainFooter{
            color: #fff;
        }


        .first_text{
            font-size: 21px;
            font-family: 'Georgia', serif;
            line-height: 1.5;
            font-weight: 400;
            color: #000;
        }
        .caption_text{
            font-size: 17px;
            font-family: 'Georgia', serif;
            line-height: 1.5;
            font-weight: 400;
            color: #000;
        }

        /* medias */
        @media (max-width: 575px) {
            .mainHeader{
                flex-direction: column;
            }
            .mainHeader .img{
                align-self: center;
            }
            .mainHeader .texts{
                text-align: center;
            }
            .mainHeader .texts .first_text{
                font-size: 21px;
            }
            .mainHeader .texts .caption_text{
                font-size: 13px;
            }
        }

    </style>

    <header class="mainHeader d-flex justify-content-center pb-3 pt-3">
        <div class="img">
            <a href="/">
                <img class="" src="{{asset('imgs/common/140x_photo.webp')}}">
            </a>
        </div>
        <div class="texts align-self-center m-lg-3">
            <div class="first_text pb-2">Детские вещи из Европы</div>
            <div class="huge_text pb-2">
                <img class="" src="{{asset('imgs/common/240x_photo.webp')}}">
            </div>
            <div class="caption_text">Stok и Second-Luxe / Цена от 30 до 500 руб. </div>
        </div>
    </header>

    <div class="items_container">
        @include('catalog.items.lg')
        @include('catalog.items.md')
        @include('catalog.items.sm')
    </div>

</div>

@include('catalog.parts.footer')

<script src="{{asset('js/bootstrap/5.0.2/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>