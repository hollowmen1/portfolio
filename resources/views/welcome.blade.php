@if($crash)
<h1>You are fucked.....! <br> Please contact Rafif</h1>
@else
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Adeel Asghar | SEO Content Writer | Copywriter | Ad Writer</title>
    <meta name="description"
        content="Hire Adeel Asghar, an expert Content Writer, Copywriter, and On-Page SEO expert for your next project. Reach to the maximum potential of your content marketing and gain higher traffic and leads.">
    <meta name="keywords" property="og:title"
        content="Adeel Asghar, SEO Content Writer, Copywriter in Pakistan, On-page and Off-Page SEO Expert in pakistan, Keyword Research, Sales Ads, Email Ads, Guess Posts, Competitor Analysis, Web Audit, WordPress Development, hire content writer">
    <meta property="og:description"
        content=" Adeel Asghar, an expert Content Writer, Copywriter, and On-Page SEO expert for your next project. Reach to the maximum potential of your content marketing and gain higher traffic and leads.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- bootstrap -->
    {{--
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <!-- plugin -->

    <!-- plugin -->
    {{--
    <link rel="stylesheet" href="{{asset('assets/css/plugin.css')}}"> --}}
    <link rel="stylesheet preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5W6SLEYM7M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5W6SLEYM7M');
    </script>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9JYN8TB3ZT">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9JYN8TB3ZT');
</script>
<style>
    .single-service img {
        width: 150px;
        margin: 0px;
    }
</style>
</head>

<body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- preloader area end -->
    <!-- Menu toggle Icon Start -->
    <div class="toggle-icon">
        <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Menu toggle Icon End -->
    <!-- Main Website wrapper start -->
    <div id="main">
        <!--Main-Menu Area Start-->
        @include('layouts.topbar')
        <!--Main-Menu Area Start-->

        <!--Hero Area Start-->
        <section class="home section-bg active" id="home">
            <div class="h-100vh d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main-profile-image">
                                <img src="{{ asset('storage/' . $profile->image) }}" alt="Adeel">
                            </div>
                        </div>
                        <div class="col-lg-6  align-self-center">
                            <div class="hero-box text-left">
                                <span class="greeting">HELLO</span>
                                <h1 class="name h2">
                                    I'm <span>Adeel Asghar</span> <span class="d-none">Full-Stack Web Developer, Laravel,
                                        VueJs and React JS Developer</span>
                                </h1>

                                <h3 class="d-none">
                                    Laravel, VueJs and React JS Developer I can Build Complex Websites within no time.
                                </h3>

                                <h4 class="header_title"> <span style="color: #4c84ff;">I Do</span> <span class="typed"></span></h4>
                                <p class="short-info">
                                    {{$profile->description}}
                                </p>
                                <h2 class="d-none">
                                </h2>
                                <a id="g-p-f-h" class="pagelink mybtn mybtn-bg" href="#portfolio"><span><i
                                            class="fas fa-briefcase"></i>Portfolio</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Hero Area End-->

        <!-- About Area Start -->
        <section id="about" class="about-area section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="s-h-title">
                                About <span>Me</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-box">
                            <div class="row">
                                <div class="col-lg-7 d-flex align-self-center">
                                    <div class="about-content">
                                        <ul class="info-list">
                                            <li>
                                                <span class="title">First Name : </span>
                                                <span class="value">Adeel</span>
                                            </li>
                                            <li>
                                                <span class="title">Last Name : </span>
                                                <span class="value">Asghar</span>
                                            </li>
                                            <li>
                                                <span class="title">Birthdate : </span>
                                                <span class="value">02 October 1998</span>
                                            </li>
                                            <li>
                                                <span class="title">Residence : </span>
                                                <span class="value">PAKISTAN</span>
                                            </li>
                                            <li>
                                                <span class="title">Langages : </span>
                                                <span class="value">English</span>
                                            </li>
                                            <li>
                                                <span class="title">Phone : </span>
                                                <span class="value">+923359557747</span>
                                            </li>
                                            <li>
                                                <span class="title">Email : </span>
                                                <span class="value" style="">adeelasghar.cw@gmail.com</span>
                                            </li>
                                            <li>
                                                <span class="title">Freelance : </span><span
                                                    class="value">Available</span>
                                            </li>
                                            <li>
                                                <span class="title">Experience : </span><span class="value">4
                                                    years</span>
                                            </li>
                                            <li>
                                                <span class="title">Skype : </span><span class="value">adeel.khan3151</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex align-self-center">
                                    <div class="about-content">
                                        <div class="my-acivment-list">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-acivment one">
                                                        <div class="top-area">
                                                            <div class="icon">
                                                                <i class="far fa-heart"></i>
                                                            </div>
                                                            <div class="number">
                                                                <span class="n-counter">200</span><span
                                                                    class="plus">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="content">

                                                            <h6 class="title">
                                                                Happy Clients
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-acivment two">
                                                        <div class="top-area">
                                                            <div class="icon">
                                                                <i class="fas fa-briefcase"></i>
                                                            </div>
                                                            <div class="number">
                                                                <span class="n-counter">300</span><span
                                                                    class="plus">+</span>
                                                            </div>
                                                        </div>
                                                        <div class="content">

                                                            <h6 class="title">
                                                                Project Done
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-i-d">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="s-h-title">
                                What I <span>Do</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row service-area-wrapper">
                    @foreach($skills as $skill)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service service-modal ">
                            <img loading="lazy" src="{{ asset('storage/' . $skill->image) }}" alt="SEO Optimization">
                            <h6 class="title">{{ $skill->title }}</h6>
                            <p>{{ $skill->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row w-i-d">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="s-h-title">
                                <span>My Tools</span> Of Choice
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-review">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Google_ad.png')}}" alt="Google Ad">
                                            <p>Google AdWord</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Page_Speed.png')}}" alt="Google Insight">
                                            <p>Google Insight</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Google_trend.png')}}" alt="Google Trend">
                                            <p>Google Trend</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Grammarly.png')}}" alt="Grammarly">
                                            <p>Grammarly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Ubersuggest.png')}}" alt="UberSuggest">
                                            <p>UberSuggest</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Moz.png')}}" alt="MOZ">
                                            <p>MOZ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Semrush.png')}}" alt="Semrush">
                                            <p>Semrush</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Screaming.png')}}" alt="SFrog">
                                            <p>Screaming Frog</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/ahref.png')}}" alt="ahref">
                                            <p>Ahref</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Turnitin.png')}}" alt="Turnitin">
                                            <p>Turnitin</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/Wordtune.png')}}" alt="Wordtune">
                                            <p>Wordtune</p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/SpamZilla.png')}}" alt="SpamZilla">
                                            <p>SpamZilla</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="reviewr">
                                        <div class="img">
                                            <img loading="lazy" src="{{asset('assets/images/SpamZilla.png')}}" alt="SpamZilla">
                                            <p>SEOQuake</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="single-review">-->
                    <!--        <div class="reviewr">-->
                    <!--            <div class="img">-->
                    <!--                <img loading="lazy" src="{{asset('assets/images/rev2.jpg')}}" alt="Alen Doe">-->
                    <!--            </div>-->
                    <!--            <div class="content">-->
                    <!--                <h4 class="name">-->
                    <!--                    Alen Doe-->
                    <!--                </h4>-->
                    <!--                <p>-->
                    <!--                    CEO of Apple-->
                    <!--                </p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="stars">-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--        </div>-->
                    <!--        <div class="content">-->
                    <!--            <p>-->
                    <!--                Believed attentive assisted picture sharpness to I to she waved the are and slide-->
                    <!--                understand the that-->
                    <!--                set task. The you due back.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="single-review">-->
                    <!--        <div class="reviewr">-->
                    <!--            <div class="img">-->
                    <!--                <img loading="lazy" src="{{asset('assets/images/rev3.jpg')}}" alt="Zachary">-->
                    <!--            </div>-->
                    <!--            <div class="content">-->
                    <!--                <h4 class="name">-->
                    <!--                    Zachary-->
                    <!--                </h4>-->
                    <!--                <p>-->
                    <!--                    CTO at IdealDevs-->
                    <!--                </p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="stars">-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--        </div>-->
                    <!--        <div class="content">-->
                    <!--            <p>-->
                    <!--                Believed attentive assisted picture sharpness to I to she waved the are and slide-->
                    <!--                understand the that-->
                    <!--                set task. The you due back.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="single-review">-->
                    <!--        <div class="reviewr">-->
                    <!--            <div class="img">-->
                    <!--                <img loading="lazy" src="{{asset('assets/images/rev1.jpg')}}" alt="Nathaniel">-->
                    <!--            </div>-->
                    <!--            <div class="content">-->
                    <!--                <h4 class="name">-->
                    <!--                    Nathaniel-->
                    <!--                </h4>-->
                    <!--                <p>-->
                    <!--                    COO at IdealDevs-->
                    <!--                </p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="stars">-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--        </div>-->
                    <!--        <div class="content">-->
                    <!--            <p>-->
                    <!--                Believed attentive assisted picture sharpness to I to she waved the are and slide-->
                    <!--                understand the that-->
                    <!--                set task. The you due back.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="single-review">-->
                    <!--        <div class="reviewr">-->
                    <!--            <div class="img">-->
                    <!--                <img loading="lazy" src="{{asset('assets/images/rev2.jpg')}}" alt="Harrison">-->
                    <!--            </div>-->
                    <!--            <div class="content">-->
                    <!--                <h4 class="name">-->
                    <!--                    Harrison-->
                    <!--                </h4>-->
                    <!--                <p>-->
                    <!--                    DH at IdealDevs-->
                    <!--                </p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="stars">-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--        </div>-->
                    <!--        <div class="content">-->
                    <!--            <p>-->
                    <!--                Believed attentive assisted picture sharpness to I to she waved the are and slide-->
                    <!--                understand the that-->
                    <!--                set task. The you due back.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="single-review">-->
                    <!--        <div class="reviewr">-->
                    <!--            <div class="img">-->
                    <!--                <img loading="lazy" src="{{asset('assets/images/rev3.jpg')}}" alt="Jameson">-->
                    <!--            </div>-->
                    <!--            <div class="content">-->
                    <!--                <h4 class="name">-->
                    <!--                    Jameson-->
                    <!--                </h4>-->
                    <!--                <p>-->
                    <!--                    CEO at IdealDevs-->
                    <!--                </p>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="stars">-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--            <i class="fas fa-star"></i>-->
                    <!--        </div>-->
                    <!--        <div class="content">-->
                    <!--            <p>-->
                    <!--                Believed attentive assisted picture sharpness to I to she waved the are and slide-->
                    <!--                understand the that-->
                    <!--                set task. The you due back.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

        </section>
        <!-- About Area End -->

        <!-- Resume Area Start -->
        <section id="resume" class="about-area section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="section-heading">
                            <h2 class="s-h-title">
                                My <span>Resume</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-box">
                            <div class="row justify-content-center"> 
                                <p>Check Out My Entire Details On One Page!</p>
                                <div class="col-lg-12 d-flex justify-content-around">
                                    <div class="about-content">
                                        <a href="{{asset('assets/Adeel_Asghar_Resume.pdf')}}" rel="canonical" class="mybtn mybtn-bg"
                                            download>
                                            <span><i class="fas fa-download"></i>Download My Resume</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="eduandex" class="eduandex">
                <!--<div class="container">-->

                <!--    <div class="row skill-area" id="statisticsSection">-->
                <!--        <div class="col-lg-6 skill-area-line">-->
                <!--            <div class="skill-box">-->
                <!--                <h4 class="title">-->
                <!--                    Coding Skills-->
                <!--                </h4>-->
                <!--                <div class="skill-list">-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">CSS</h2>-->
                <!--                            <span>95%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="80" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 95%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">HTML</h2>-->
                <!--                            <span>98%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="95" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 98%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">PHP</h2>-->
                <!--                            <span>92%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="75" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 92%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">JS</h2>-->
                <!--                            <span>95%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="90" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 95%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">ReactJs</h2>-->
                <!--                            <h3 class="d-none">Full-Stack Web Developer</h3>-->
                <!--                            <span>85%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="90" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 85%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">Laravel</h2>-->
                <!--                            <span>95%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="90" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 95%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <h2 class="h6">VueJs</h2>-->
                <!--                            <span>85%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="90" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 85%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->


                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 skill-area-line">-->
                <!--            <div class="skill-box">-->
                <!--                <h4 class="title">-->
                <!--                    Language Skills-->
                <!--                </h4>-->
                <!--                <div class="skill-list">-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <span>Hindi</span>-->
                <!--                            <span>99%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="92" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 99%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <span>Urdu</span>-->
                <!--                            <span>99%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="92" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 99%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <span>Arabic</span>-->
                <!--                            <span>60%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="88" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 60%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <span>Spanish</span>-->
                <!--                            <span>40%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="80" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 40%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <span>English</span>-->
                <!--                            <span>99%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="99" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 99%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="label">-->
                <!--                            <span>German</span>-->
                <!--                            <span>40%</span>-->
                <!--                        </div>-->
                <!--                        <div class="progress">-->
                <!--                            <div class="progress-bar progress-bar-striped progress-bar-animated"-->
                <!--                                role="progressbar" aria-valuenow="99" aria-valuemin="0"-->
                <!--                                aria-valuemax="100" style="width: 40%"></div>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 skill-area-circle">-->
                <!--            <div class="skill-box">-->
                <!--                <h4 class="title">-->
                <!--                    Professional Skills-->
                <!--                </h4>-->
                <!--                <div class="skill-list">-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="progress-circle position" data-percent="90" data-duration="1000"-->
                <!--                            data-color="#e9ecef, 304CFD"></div>-->
                <!--                        <div class="label mt-1 d-block text-center">-->
                <!--                            <span>Web Design</span>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="progress-circle position" data-percent="96" data-duration="1000"-->
                <!--                            data-color="#e9ecef, 304CFD"></div>-->
                <!--                        <div class="label mt-1 d-block text-center">-->
                <!--                            <span>Web Devlopment</span>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="progress-circle position" data-percent="80" data-duration="1000"-->
                <!--                            data-color="#e9ecef, 304CFD"></div>-->
                <!--                        <div class="label mt-1 d-block text-center">-->
                <!--                            <span>Graphic Design</span>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="single-skill">-->
                <!--                        <div class="progress-circle position" data-percent="80" data-duration="1000"-->
                <!--                            data-color="#e9ecef, 304CFD"></div>-->
                <!--                        <div class="label mt-1 d-block text-center">-->
                <!--                            <span>SEO</span>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-6 skill-area-circle">-->
                <!--            <div class="skill-box">-->
                <!--                <h4 class="title">-->
                <!--                    Basic Knowledge-->
                <!--                </h4>-->
                <!--                <div class="skill-list">-->
                <!--                    <ul class="single-list-ul">-->
                <!--                        <li>-->
                <!--                            <p>Search engine marketing</p>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <p>iOS and android apps</p>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <p>Spreadsheets (Excel, Google Spreadsheets, etc.)</p>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <p>Software testing</p>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <p>Presentation software (PowerPoint, Keynote)</p>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <p>Office suites (Microsoft Office, G Suite)</p>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <p>SQA</p>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="row">-->
                <!--        <div class="col-lg-6">-->
                <!--            <div class="edu-box">-->
                <!--                <h2 class="title">Education</h2>-->
                <!--                <div class="row">-->
                <!--                    <div class="col-12">-->
                <!--                        <div class="education-list">-->
                <!--                            <div class="single-education">-->
                <!--                                <h4 class="collage-name">-->
                <!--                                    National University of Modern Languages-->
                <!--                                </h4>-->
                <!--                                <p class="degree">Software Engeering<span class="year">2017 --->
                <!--                                        2021</span>-->
                <!--                                </p>-->
                <!--                                <div class="description">-->
                <!--                                    <p>-->
                <!--                                        The National University of Modern Languages is a public research-->
                <!--                                        university with-->
                <!--                                        campuses in Pakistan and China.-->
                <!--                                    </p>-->
                <!--                                </div>-->
                <!--                            </div>-->


                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->

                <!--        <div class="col-lg-6">-->
                <!--            <div class="edu-box">-->
                <!--                <h2 class="title">Experience</h2>-->
                <!--                <div class="row">-->
                <!--                    <div class="col-12">-->
                <!--                        <div class="education-list">-->
                <!--                            <div class="single-education">-->
                <!--                                <h4 class="collage-name">-->
                <!--                                    Red cubez-->
                <!--                                </h4>-->
                <!--                                <p class="degree">Software Engineer-->
                <!--                                </p>-->
                <!--                                <div class="description">-->
                <!--                                    <p>-->
                <!--                                        RedCubez provides web development and SaaS solutions. It create-->
                <!--                                        stunning websites and offer flexible SaaS products to boost your-->
                <!--                                        online presence and streamline your business processes.-->
                <!--                                    </p>-->
                <!--                                </div>-->
                <!--                            </div>-->


                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </section>
        <!-- Resume Area End -->

        <!-- Portfolio Area Start -->
        <section id="portfolio" class="project-gallery section-padding  section-bg mt-5">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="s-h-title">
                                My <span>Portfolio</span>
                            </h2>
                            <h4 class="header_title"> I've <span class="typed_portfolio"></span></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-gallery-filter d-flex justify-content-center">
                            <ul class="project-gallery-menu d-inline-block">
                                @foreach($categories as $category)
                                    <li class="filter active" data-filter=".{{ $category->id }}">{{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row ">
                            @foreach($posts as $post)
                                <div class="mix col-md-6 col-lg-4 {{ $post->category_id }} cat-1 ">
                                    <a href="{{ $post->link }}" target="_blank">
                                        <div class="gallery-item-content pp">
                                            <div class="item-thumbnail">
                                                <img loading="lazy" src="{{ asset('storage/' . $post->image) }}"
                                                    class="portfolio" alt="BNBPK Web">
                                                <div class="content-overlay">
                                                    <div class="content">
                                                        <h4 class="project-title">
                                                            {{ $post->title }}
                                                        </h4>
                                                    </div>
                                                </div>
                                                <p class="mt-2">{{ $post->title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Portfolio Area End -->

        <!-- Blog List  Area Start -->

        <!-- Blog List  Area End -->

        <!-- Contact Us Area Start -->
        <section class="contact contact-info-area section-padding  section-bg" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="s-h-title">
                                Contact <span>Me</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6">
                        <!-- Single Info -->
                        <a href="tel:+923359557747">
                            <div class="single-info">
                                <div class="info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Phone Number:</h5>
                                    <p>+923359557747</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="mailto:adeelasghar.cw@gmail.com">
                            <!-- Single Info -->
                            <div class="single-info">

                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-contentr">
                                    <h5>Email Address:</h5>
                                    <p>adeelasghar.cw@gmail.com</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @include('layouts.alerts')
                <div class="row cAndm justify-content-center">
                    <div class="col-md-8">
                        <div class="home-page-form">
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="{{route('send.email')}}">
                                    @csrf
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa fa-user-o"></i>
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                        placeholder="Name*" required="required"
                                                        data-error="Name is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa fa-envelope-o"></i>
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="Email*" required="required"
                                                        data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa fa-question-circle-o"></i>
                                                    <input id="form_subject" type="text" name="subject"
                                                        class="form-control" placeholder="Subject"
                                                        data-error="Subject is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <i class="fa fa-comment-o"></i>
                                                    <textarea id="form_message" name="message" class="form-control"
                                                        placeholder="Message*" rows="7" required="required"
                                                        data-error="Please,leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="mybtn mybtn-bg"><span>Send
                                                        Message</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form> <!-- End Contact From -->

                                <div class="social-link text-center">
                                    <ul class="wrap">
                                        <!--<li class="wow fadeInUp">-->
                                        <!--    <a href="https://www.facebook.com/aadilsafi" target="_blank"><i-->
                                        <!--            class="fab fa-facebook-f"></i></a>-->
                                        <!--</li>-->

                                        <li class="wow fadeInUp">
                                            <a href="https://www.linkedin.com/in/adeel-asghar-034516287/" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <!--<li class="wow fadeInUp">-->
                                        <!--    <a href="https://www.instagram.com/aadilsafi/" target="_blank"><i-->
                                        <!--            class="fab fa-instagram"></i></a>-->
                                        <!--</li>-->
                                        <li class="wow fadeInUp">
                                            <a href="https://www.upwork.com/freelancers/~01ab22363ec55ffa09" target="_blank"><i
                                                    class="fa fa-laptop"></i></a>
                                        </li>
                                        <!--<li class="wow fadeInUp">-->
                                        <!--    <a href="https://www.fiverr.com/aadilsafi" target="_blank"><i-->
                                        <!--            class="fa fa-f">F</i></a>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!--/.row-->
            </div>
        </section>
        <!-- Contact Us Area End -->
    </div>
    <!-- Main Website wrapper End -->

    <!-- Blog Modal Start-->

    <!-- Blog Modal End-->

    <!-- Main jquery and all jquery plugin hear -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    {{-- <script src="{{asset('assets/js/jquery.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    {{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    {{-- <script src="{{asset('assets/js/mixitup.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="{{asset('assets/js/typed.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        if("{{$errors->any()}}" || "{{(session()->has('success'))}}" || "{{(session()->has('danger'))}}"){
                var nthChild = 6;
                $(".my-navbar .mynav-item").removeClass("active");
                $(".mynav-item #contact-top").addClass("active");
                $("#main > section.active").removeClass("active");
                $("#main > section:nth-child(" + nthChild + ")").addClass("active");
        }
    </script>
    <script src="{{asset('assets/js/slider.js')}}"></script>
</body>

</html>
@endif
