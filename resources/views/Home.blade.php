<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .filterDiv {
        float: left;
        padding-top: 20px;
        margin: 2px;
        display: none;
    }

    .show {
        display: block;
    }

    .btn {
        color: black !important;
        border-radius: none;
    }

    .btn:hover {
        background: white;
        color: #bd079b !important;
    }

    .btn.active {
        border: none;
        background-color: white;
        color: #bd079b !important;
    }
    </style>
    <style>
    .btnfilter {
        width: 175px !important;
        color: #bd079b !important;
        background: #fff !important;
    }

    .dropbtn {
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .btnfilter:hover .dropbtn:focus {
        background-color: #bd079b;
        color: white;
    }

    #myInput {
        box-sizing: border-box;
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 20px 12px 45px;
        border: none;
        border-bottom: 1px solid #ddd;
    }

    #myInput:focus {
        outline: 3px solid #ddd;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
    </style>
</head>

<body>


    <div>
        @include('header')
    </div>


    <section class="Banner-home-wp">
        <div class="banner-hmbg-img">
            <span class="hghghg"></span>
            <img src="images/banner-bg.gif" />
        </div>
        <div class="banner-home-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner-hm-contant">
                            <h1>
                                Explore Real Estate <span>in India</span>
                            </h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since.
                            </p>
                            <div id="myBtnContainer">
                                <button class="btn active" onclick="filterSelection('BUY')"> BUY</button>
                                <button class="btn" onclick="filterSelection('RENT')"> RENT</button>
                                <button class="btn" onclick="filterSelection('PG')"> PG</button>
                                <button class="btn" onclick="filterSelection('COMMERCIAL')"> COMMERCIAL</button>
                                <button class="btn" onclick="filterSelection('HOSTEL')"> HOSTEL</button>
                            </div>
                            <div class="container">
                                <div class="filterDiv BUY">
                                    <div class="input-search-hm">
                                        <div class="hm-search-input">
                                            <form action="/search" method="GET">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myLocation()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/location-icon.svg" />Location
                                                            </button>
                                                            <div id="myDropdownLocation" class="dropdown-content">
                                                                <input type="text" placeholder="Search.." id="myInput"
                                                                    onkeyup="filterFunctionLocation()">
                                                                @foreach($dataLocation as $location)
                                                                <a href="#{{ $location->location }}"
                                                                    onclick="selectDropdown(this, 'location')">{{ $location->location }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myProperty()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/home-icon.svg" />Property Type
                                                            </button>
                                                            <div id="myDropdownProperty" class="dropdown-content">
                                                                <a href="#Single-Family-Homes"
                                                                    onclick="selectDropdown(this, 'property')">Single-Family
                                                                    Homes</a>
                                                                <a href="#Apartments">Apartments</a>
                                                                <a href="#Condominiums">Condominiums</a>
                                                                <a href="#Townhouses">Townhouses</a>
                                                                <a href="#Duplexes">Duplexes</a>
                                                                <a href="#Hotels">Hotels</a>
                                                                <a href="#Restaurants">Restaurants</a>
                                                                <a href="#Farms">Farms</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myBudget()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg" src="images/rupee-icon.svg" />Budget
                                                                Range
                                                            </button>
                                                            <div id="myDropdownBudget" class="dropdown-content">
                                                                @foreach($dataBudget as $Budget)
                                                                <a href="#{{ $Budget->id }}"
                                                                    onclick="selectDropdown(this, 'budget')">{{ $Budget->min }}
                                                                    - {{ $Budget->max }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="submit" class="searchbtn-bannerhm">
                                                            <img src="images/search-icon2.svg" />
                                                            Search
                                                        </button>
                                                    </li>
                                                </ul>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv RENT">
                                <div class="input-search-hm">
                                        <div class="hm-search-input">
                                            <form action="/search" method="GET">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myLocation()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/location-icon.svg" />Location
                                                            </button>
                                                            <div id="myDropdownLocation" class="dropdown-content">
                                                                <input type="text" placeholder="Search.." id="myInput"
                                                                    onkeyup="filterFunctionLocation()">
                                                                @foreach($dataLocation as $location)
                                                                <a href="#{{ $location->location }}"
                                                                    onclick="selectDropdown(this, 'location')">{{ $location->location }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myProperty()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/home-icon.svg" />Property Type
                                                            </button>
                                                            <div id="myDropdownProperty" class="dropdown-content">
                                                                <a href="#Single-Family-Homes"
                                                                    onclick="selectDropdown(this, 'property')">Single-Family
                                                                    Homes</a>
                                                                <a href="#Apartments">Apartments</a>
                                                                <a href="#Condominiums">Condominiums</a>
                                                                <a href="#Townhouses">Townhouses</a>
                                                                <a href="#Duplexes">Duplexes</a>
                                                                <a href="#Hotels">Hotels</a>
                                                                <a href="#Restaurants">Restaurants</a>
                                                                <a href="#Farms">Farms</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myBudget()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg" src="images/rupee-icon.svg" />Budget
                                                                Range
                                                            </button>
                                                            <div id="myDropdownBudget" class="dropdown-content">
                                                                @foreach($dataBudget as $Budget)
                                                                <a href="#{{ $Budget->id }}"
                                                                    onclick="selectDropdown(this, 'budget')">{{ $Budget->min }}
                                                                    - {{ $Budget->max }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="submit" class="searchbtn-bannerhm">
                                                            <img src="images/search-icon2.svg" />
                                                            Search
                                                        </button>
                                                    </li>
                                                </ul>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv PG">
                                <div class="input-search-hm">
                                        <div class="hm-search-input">
                                            <form action="/search" method="GET">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myLocation()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/location-icon.svg" />Location
                                                            </button>
                                                            <div id="myDropdownLocation" class="dropdown-content">
                                                                <input type="text" placeholder="Search.." id="myInput"
                                                                    onkeyup="filterFunctionLocation()">
                                                                @foreach($dataLocation as $location)
                                                                <a href="#{{ $location->location }}"
                                                                    onclick="selectDropdown(this, 'location')">{{ $location->location }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myProperty()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/home-icon.svg" />Property Type
                                                            </button>
                                                            <div id="myDropdownProperty" class="dropdown-content">
                                                                <a href="#Single-Family-Homes"
                                                                    onclick="selectDropdown(this, 'property')">Single-Family
                                                                    Homes</a>
                                                                <a href="#Apartments">Apartments</a>
                                                                <a href="#Condominiums">Condominiums</a>
                                                                <a href="#Townhouses">Townhouses</a>
                                                                <a href="#Duplexes">Duplexes</a>
                                                                <a href="#Hotels">Hotels</a>
                                                                <a href="#Restaurants">Restaurants</a>
                                                                <a href="#Farms">Farms</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myBudget()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg" src="images/rupee-icon.svg" />Budget
                                                                Range
                                                            </button>
                                                            <div id="myDropdownBudget" class="dropdown-content">
                                                                @foreach($dataBudget as $Budget)
                                                                <a href="#{{ $Budget->id }}"
                                                                    onclick="selectDropdown(this, 'budget')">{{ $Budget->min }}
                                                                    - {{ $Budget->max }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="submit" class="searchbtn-bannerhm">
                                                            <img src="images/search-icon2.svg" />
                                                            Search
                                                        </button>
                                                    </li>
                                                </ul>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv COMMERCIAL">
                                <div class="input-search-hm">
                                        <div class="hm-search-input">
                                            <form action="/search" method="GET">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myLocation()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/location-icon.svg" />Location
                                                            </button>
                                                            <div id="myDropdownLocation" class="dropdown-content">
                                                                <input type="text" placeholder="Search.." id="myInput"
                                                                    onkeyup="filterFunctionLocation()">
                                                                @foreach($dataLocation as $location)
                                                                <a href="#{{ $location->location }}"
                                                                    onclick="selectDropdown(this, 'location')">{{ $location->location }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myProperty()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/home-icon.svg" />Property Type
                                                            </button>
                                                            <div id="myDropdownProperty" class="dropdown-content">
                                                                <a href="#Single-Family-Homes"
                                                                    onclick="selectDropdown(this, 'property')">Single-Family
                                                                    Homes</a>
                                                                <a href="#Apartments">Apartments</a>
                                                                <a href="#Condominiums">Condominiums</a>
                                                                <a href="#Townhouses">Townhouses</a>
                                                                <a href="#Duplexes">Duplexes</a>
                                                                <a href="#Hotels">Hotels</a>
                                                                <a href="#Restaurants">Restaurants</a>
                                                                <a href="#Farms">Farms</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myBudget()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg" src="images/rupee-icon.svg" />Budget
                                                                Range
                                                            </button>
                                                            <div id="myDropdownBudget" class="dropdown-content">
                                                                @foreach($dataBudget as $Budget)
                                                                <a href="#{{ $Budget->id }}"
                                                                    onclick="selectDropdown(this, 'budget')">{{ $Budget->min }}
                                                                    - {{ $Budget->max }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="submit" class="searchbtn-bannerhm">
                                                            <img src="images/search-icon2.svg" />
                                                            Search
                                                        </button>
                                                    </li>
                                                </ul>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv HOSTEL">
                                <div class="input-search-hm">
                                        <div class="hm-search-input">
                                            <form action="/search" method="GET">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myLocation()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/location-icon.svg" />Location
                                                            </button>
                                                            <div id="myDropdownLocation" class="dropdown-content">
                                                                <input type="text" placeholder="Search.." id="myInput"
                                                                    onkeyup="filterFunctionLocation()">
                                                                @foreach($dataLocation as $location)
                                                                <a href="#{{ $location->location }}"
                                                                    onclick="selectDropdown(this, 'location')">{{ $location->location }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myProperty()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg"
                                                                    src="images/home-icon.svg" />Property Type
                                                            </button>
                                                            <div id="myDropdownProperty" class="dropdown-content">
                                                                <a href="#Single-Family-Homes"
                                                                    onclick="selectDropdown(this, 'property')">Single-Family
                                                                    Homes</a>
                                                                <a href="#Apartments">Apartments</a>
                                                                <a href="#Condominiums">Condominiums</a>
                                                                <a href="#Townhouses">Townhouses</a>
                                                                <a href="#Duplexes">Duplexes</a>
                                                                <a href="#Hotels">Hotels</a>
                                                                <a href="#Restaurants">Restaurants</a>
                                                                <a href="#Farms">Farms</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown">
                                                            <button type="button" onclick="myBudget()"
                                                                class="dropbtn btnfilter">
                                                                <img class="locimg" src="images/rupee-icon.svg" />Budget
                                                                Range
                                                            </button>
                                                            <div id="myDropdownBudget" class="dropdown-content">
                                                                @foreach($dataBudget as $Budget)
                                                                <a href="#{{ $Budget->id }}"
                                                                    onclick="selectDropdown(this, 'budget')">{{ $Budget->min }}
                                                                    - {{ $Budget->max }}</a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="submit" class="searchbtn-bannerhm">
                                                            <img src="images/search-icon2.svg" />
                                                            Search
                                                        </button>
                                                    </li>
                                                </ul>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="properties-hm-wp">
        <div class="properties-hm-bg"></div>
        <div class="container">
            <div class="properties-hm-sec">
                <div class="properties-head-hm">
                    <h4>Properties for you</h4>
                    <p>Curated Collection</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="properties-rightgif">
                            <img src="images/gif-BGA.gif" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn">
                                                <h5>
                                                    4176 <span>+</span>
                                                </h5>
                                                <p>Properties for Sale</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn">
                                                <h5>
                                                    1600 <span>+</span>
                                                </h5>
                                                <p>Properties for Sale</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn">
                                                <h5>
                                                    1560 <span>+</span>
                                                </h5>
                                                <p>Properties for Sale</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Home Search Officer</h5>
                                                <button>TRY NOW!FREE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Luxury Properties in Indore</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Luxury Apartments/Flats in Indore</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Affordable Villas/Houses in Indore</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Ready to Move Flats in</h5>
                                                <button>TRY NOW!FREE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Budget Apartments/Flats in Indore</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn">
                                                <h5>1600 <span>+</span></h5>
                                                <p>Properties for Sale</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn">
                                                <h5>1560 <span>+</span></h5>
                                                <p>Properties for Sale</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="properties-hm-boxcmn properties-privat">
                                                <h5>Home Search Officer</h5>
                                                <button>TRY NOW!FREE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="add-hm-section">
        <div class="container">
            <div class="add-hm-sec">
                <div class="row">
                    <div class="col-md-7">
                        <div class="addhm-rightcon">
                            <h5>Need Assistance? Your wish is our command.</h5>
                            <h2>
                                We'll help you <span>find your right property</span>
                            </h2>
                            <button type="button" class="gg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Submit Your Requirement
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialogreq">
                                    <div class="modal-content modal-contentreq">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <buttoon type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></buttoon>
                                        </div>
                                        <div class="modal-body">
                                            <div class="requirement-modal-con">
                                                <div class="requirement-con-one">
                                                    <h4>
                                                        Edit and save your requirements to view
                                                        properties matching your needs
                                                    </h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="req-one-leftcon">
                                                                <ul>
                                                                    <li class="req-linone">
                                                                        <h5>Property Type</h5>
                                                                    </li>
                                                                    <li>Residential</li>
                                                                    <li>Commercial</li>
                                                                    <li>PG</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="req-one-rightcon">
                                                                <ul>
                                                                    <li class="req-linone">
                                                                        <h5>I am looking to</h5>
                                                                    </li>
                                                                    <li>Buy</li>
                                                                    <li>Rent</li>
                                                                    <li class="form-select-req">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option selected>Select City</option>
                                                                            <option value="1">Jamshedpur</option>
                                                                            <option value="2">Delhi NCR</option>
                                                                            <option value="3">
                                                                                Greater Noida
                                                                            </option>
                                                                            <option value="4">Ghaziabad</option>
                                                                            <option value="5">Noida</option>
                                                                            <option value="6">Gurgaon</option>
                                                                            <option value="7">New Delhi</option>
                                                                            <option value="8">Hyderabad</option>
                                                                            <option value="9">Neemrana</option>
                                                                            <option value="10">Ajmer</option>
                                                                            <option value="11">Kota</option>
                                                                            <option value="12">Bilaspur</option>
                                                                            <option value="13">Jodhpur</option>
                                                                            <option value="14">Jodhpur</option>
                                                                            <option value="15">Jabalpur</option>
                                                                            <option value="16">Rajkot</option>
                                                                            <option value="17">Aurangabad</option>
                                                                            <option value="18">Ranchi</option>
                                                                            <option value="19">Patna</option>
                                                                            <option value="20">Nashik</option>
                                                                            <option value="21">Nagpur</option>
                                                                            <option value="22">Vadodara</option>
                                                                            <option value="23">Bhopal</option>
                                                                            <option value="24">Indore</option>
                                                                            <option value="25">Jaipur</option>
                                                                            <option value="26">Ahmedabad</option>
                                                                            <option value="27">Surat</option>
                                                                            <option value="28">Bhilai</option>
                                                                            <option value="29">Durg</option>
                                                                            <option value="30">Chandigarh</option>
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="requirementone-searchi">
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">
                                                                    Email Location
                                                                </label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp" />
                                                                <div id="emailHelp" class="form-text">We'll never share
                                                                    your email with anyone else.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="requirement-con-two">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h5>Property Type</h5>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <ul>
                                                                <li>Apartment</li>
                                                                <li>Villa / House</li>
                                                                <li>Builder Floor</li>
                                                                <li>Row House</li>
                                                                <li>Farm House</li>
                                                                <li>Service Apartment</li>
                                                                <li>Studio Apartment</li>
                                                                <li>Residential Plot</li>
                                                                <li>Penthouse Apartment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="requirement-con-three">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h5>Bedrooms </h5>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <ul>
                                                                <li>1 BHK</li>
                                                                <li>2 BHK</li>
                                                                <li>3 BHK</li>
                                                                <li>4 BHK</li>
                                                                <li>5 BHK</li>
                                                                <li>6 BHK</li>
                                                                <li>7 BHK</li>
                                                                <li>8 BHK</li>
                                                                <li>9 BHK</li>
                                                                <li>10 BHK</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="requirement-con-four">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="requirement-four-one">
                                                                <h5>Budget Range</h5>
                                                                <ul>
                                                                    <li>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option selected>₹ 5 Lakhs</option>
                                                                            <option value="1">₹ 5 Lakhs</option>
                                                                            <option value="2">₹ 10 Lakhs</option>
                                                                            <option value="4">₹ 15 Lakhs</option>
                                                                            <option value="5">₹ 20 Lakhs</option>
                                                                            <option value="6">₹ 25 Lakhs</option>
                                                                            <option value="7">₹ 30 Lakhs</option>
                                                                            <option value="8">₹ 35 Lakhs</option>
                                                                            <option value="9">₹ 40 Lakhs</option>
                                                                            <option value="10">₹ 45 Lakhs</option>
                                                                            <option value="11">₹ 50 Lakhs</option>
                                                                            <option value="12">₹ 55 Lakhs</option>
                                                                            <option value="13">₹ 60 Lakhs</option>
                                                                            <option value="14">₹ 65 Lakhs</option>
                                                                            <option value="15">₹ 70 Lakhs</option>
                                                                            <option value="16">₹ 75 Lakhs</option>
                                                                            <option value="17">₹ 80 Lakhs</option>
                                                                            <option value="18">₹ 85 Lakhs</option>
                                                                            <option value="19">₹ 90 Lakhs</option>
                                                                            <option value="20">₹ 95 Lakhs</option>
                                                                            <option value="21">₹ 1 Cr</option>
                                                                            <option value="22">₹ 1.20 Cr</option>
                                                                            <option value="23">₹ 1.40 Cr</option>
                                                                            <option value="24">₹ 1.60 Cr</option>
                                                                            <option value="25">₹ 1.80 Cr</option>
                                                                            <option value="26">₹ 2 Cr</option>
                                                                            <option value="27">₹ 2.2 Cr</option>
                                                                            <option value="28">₹ 2.4 Cr</option>
                                                                            <option value="29">₹ 2.5 Cr</option>
                                                                        </select>
                                                                    </li>
                                                                    <li>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option selected>₹ 5 Lakhs</option>
                                                                            <option value="1">₹ 5 Lakhs</option>
                                                                            <option value="2">₹ 10 Lakhs</option>
                                                                            <option value="4">₹ 15 Lakhs</option>
                                                                            <option value="5">₹ 20 Lakhs</option>
                                                                            <option value="6">₹ 25 Lakhs</option>
                                                                            <option value="7">₹ 30 Lakhs</option>
                                                                            <option value="8">₹ 35 Lakhs</option>
                                                                            <option value="9">₹ 40 Lakhs</option>
                                                                            <option value="10">₹ 45 Lakhs</option>
                                                                            <option value="11">₹ 50 Lakhs</option>
                                                                            <option value="12">₹ 55 Lakhs</option>
                                                                            <option value="13">₹ 60 Lakhs</option>
                                                                            <option value="14">₹ 65 Lakhs</option>
                                                                            <option value="15">₹ 70 Lakhs</option>
                                                                            <option value="16">₹ 75 Lakhs</option>
                                                                            <option value="17">₹ 80 Lakhs</option>
                                                                            <option value="18">₹ 85 Lakhs</option>
                                                                            <option value="19">₹ 90 Lakhs</option>
                                                                            <option value="20">₹ 95 Lakhs</option>
                                                                            <option value="21">₹ 1 Cr</option>
                                                                            <option value="22">₹ 1.05 Cr</option>
                                                                            <option value="23">₹ 1.1 Cr</option>
                                                                            <option value="24">₹ 1.15 Cr</option>
                                                                            <option value="25">₹ 1.2 Cr</option>
                                                                            <option value="26">₹ 1.25 Cr</option>
                                                                            <option value="27">₹ 1.3 Cr</option>
                                                                            <option value="28">₹ 1.35 Cr</option>
                                                                            <option value="29">₹ 1.4 Cr</option>
                                                                            <option value="30">₹ 1.45 Cr</option>
                                                                            <option value="31">₹ 1.5 Cr</option>
                                                                            <option value="32">₹ 1.55 Cr</option>
                                                                            <option value="33">₹ 1.6 Cr</option>
                                                                            <option value="34">₹ 1.65 Cr</option>
                                                                            <option value="35">₹ 1.7 Cr</option>
                                                                            <option value="21">₹ 1.75 Cr</option>
                                                                            <option value="21">₹ 1.8 Cr</option>
                                                                            <option value="21">₹ 1.85 Cr</option>
                                                                            <option value="21">₹ 1.9 Cr</option>
                                                                            <option value="21">₹ 1.95 Cr</option>
                                                                            <option value="21">₹ 2.05 Cr</option>
                                                                            <option value="21">₹ 2.1 Cr</option>
                                                                            <option value="21">₹ 2.15 Cr</option>
                                                                            <option value="21">₹ 2.2 Cr</option>
                                                                            <option value="21">₹ 2.25 Cr</option>
                                                                            <option value="21">₹ 2.3 Cr</option>
                                                                            <option value="21">₹ 2.35 Cr</option>
                                                                            <option value="21">₹ 2.4 Cr</option>
                                                                            <option value="21">₹ 2.45 Cr</option>
                                                                            <option value="21">
                                                                                ₹ 25000000+
                                                                            </option>
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="requirement-four-two">
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">
                                                                        Name
                                                                    </label>
                                                                    <input type="name" class="form-control"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp" />
                                                                    <div id="emailHelp" class="form-text">We'll never
                                                                        share your email with anyone else.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="requirement-four-three">
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">
                                                                        Email
                                                                    </label>
                                                                    <input type="email" class="form-control"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp" />
                                                                    <div id="emailHelp" class="form-text">We'll never
                                                                        share your email with anyone else.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="requirement-four-two">
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">
                                                                        Mobile No.
                                                                    </label>
                                                                    <input type="mobile" class="form-control"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>in less than 1 minute</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="addhm-leftcon">
                            <img src="images/add-home.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="citiesTop-hm-wp">
        <div class="container">
            <div class="citiesTop-hm-sec">
                <div class="citiesTop-head">
                    <h4>Top Cities</h4>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div id="topcitieshm" class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="topCities-cmn-boxhm">
                                        <div class="row cmnctyBG">
                                            <div class="col-md-5">
                                                <div class="cmnctyBG-img">
                                                    <img src="images/topCITbg.svg" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="topCities-cmnrightBG">
                                                    <h6>Jaipur</h6>
                                                    <li>
                                                        <p>200+</p>
                                                        <span>For Buy</span>
                                                    </li>
                                                    <li class="topCities-boxli-two">
                                                        <p>90+</p>
                                                        <span>For Rent</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="topCities-cmn-boxhm">
                                        <div class="row cmnctyBG">
                                            <div class="col-md-5">
                                                <div class="cmnctyBG-img">
                                                    <img src="images/topCITbg2.svg" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="topCities-cmnrightBG">
                                                    <h6>Ahmedabad</h6>
                                                    <li>
                                                        <p>140+</p>
                                                        <span>For Buy</span>
                                                    </li>
                                                    <li class="topCities-boxli-two">
                                                        <p>40+</p>
                                                        <span>For Rent</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="topCities-cmn-boxhm">
                                        <div class="row cmnctyBG">
                                            <div class="col-md-5">
                                                <div class="cmnctyBG-img">
                                                    <img src="images/topCITbg3.svg" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="topCities-cmnrightBG">
                                                    <h6>Indore</h6>
                                                    <li>
                                                        <p>160+</p>
                                                        <span>For Buy</span>
                                                    </li>
                                                    <li class="topCities-boxli-two">
                                                        <p>70+</p>
                                                        <span>For Rent</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="topCities-cmn-boxhm">
                                        <div class="row cmnctyBG">
                                            <div class="col-md-5">
                                                <div class="cmnctyBG-img">
                                                    <img src="images/topCITbg4.svg" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="topCities-cmnrightBG">
                                                    <h6>Bhopal</h6>
                                                    <li>
                                                        <p>160+</p>
                                                        <span>For Buy</span>
                                                    </li>
                                                    <li class="topCities-boxli-two">
                                                        <p>90+</p>
                                                        <span>For Rent</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="topCities-cmn-boxhm">
                                        <div class="row cmnctyBG">
                                            <div class="col-md-5">
                                                <div class="cmnctyBG-img">
                                                    <img src="images/topCITbg5.svg" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="topCities-cmnrightBG">
                                                    <h6>Raipur</h6>
                                                    <li>
                                                        <p>200+</p>
                                                        <span>For Buy</span>
                                                    </li>
                                                    <li class="topCities-boxli-two">
                                                        <p>70+</p>
                                                        <span>For Rent</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="topCities-cmn-boxhm">
                                        <div class="row cmnctyBG">
                                            <div class="col-md-5">
                                                <div class="cmnctyBG-img">
                                                    <img src="images/topCITbg6.svg" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="topCities-cmnrightBG">
                                                    <h6>Nagpur</h6>
                                                    <li>
                                                        <p>30+</p>
                                                        <span>For Buy</span>
                                                    </li>
                                                    <li class="topCities-boxli-two">
                                                        <p>7+</p>
                                                        <span>For Rent</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev cities-slider-btn" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next cities-slider-btn" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="simplifying-hm-wp">
        <div class="container">
            <div class="simplifying-bg-hm">
                <img src="images/simplifying-hm-bg.jpg" />
            </div>
            <div class="simplifying-hm-sec">
                <h4>Simplifying your Home Search</h4>
                <p>
                    To own a home for living or for investment is the dream of
                    everyone, but to find the right home require a lot of research and
                    hard work. Key components require to start your home search
                    journey are budget, locality, property type, amenities, and a lot
                    more.
                    <br />
                    Homeonline has become one of the most popular online digital
                    marketplaces connecting several property buyers and sellers for
                    residential property listings in both sale and rent.
                    <br />
                    We at Homeonline.com have a variety of Singlex, Duplex & Triplex
                    as well as Furnished & Semi Furnished properties listing that we
                    are displaying here, gives you an excellent overview of all
                    properties available in the area you are considering.
                </p>
                <button>Reed More</button>
                <div class="reacting-hm-box">
                    <ul>
                        <li class="reacting-li-border">
                            <h5>400+</h5>
                            <p>Sale</p>
                        </li>
                        <li class="reacting-li-border">
                            <h5>1600+</h5>
                            <p>Rent</p>
                        </li>
                        <li>
                            <h5>1560+</h5>
                            <p>New Projects</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div>
        @include('footer')
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="header.js"></script>
    <script src="footer.js"></script>
    <script src="secBG/header.js"></script>
    <script src="secBG/footer.js"></script>

    <script>
    filterSelection("BUY")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "BUY") c = "BUY";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    </script>
    <script>
    function myLocation() {
        document.getElementById("myDropdownLocation").classList.toggle("show");
    }

    function filterFunctionLocation() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdownLocation");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }

    function myProperty() {
        document.getElementById("myDropdownProperty").classList.toggle("show");
    }

    function myBudget() {
        document.getElementById("myDropdownBudget").classList.toggle("show");
    }
    </script>
    <script>
    function redirectToSearch() {
        const locationDropdown = document.getElementById('myDropdownLocation');
        const propertyDropdown = document.getElementById('myDropdownProperty');
        const budgetDropdown = document.getElementById('myDropdownBudget');

        const selectedLocation = locationDropdown.querySelector('a.active').getAttribute('href').substring(1);
        const selectedProperty = propertyDropdown.querySelector('a.active').getAttribute('href').substring(1);
        const selectedBudget = budgetDropdown.querySelector('a.active').getAttribute('href').substring(1);

        const searchURL = `/search?location=${selectedLocation}&property=${selectedProperty}&budget=${selectedBudget}`;
        window.location.href = searchURL;
    }
    </script>
    <script>
    document.querySelector('.searchbtn-bannerhm').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        redirectToSearch();
    });
    </script>

</body>

</html>