<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProSaledetail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>


    <div>
        @include('header')
    </div>



    <section class="salederails-menustwo-wp">
        <div class="container">
            <div class="salederails-menustwo-sec">
                <div class="row">
                    <div class="col-md-9">
                        <div class="saledet-menus-s">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="sal-det-ulli">
                                        <ul>
                                            <li>
                                                <a href="/ProSaledetail#overview">Overview</a>
                                            </li>
                                            <li>
                                                <a href="/">Description</a>
                                            </li>
                                            <li>
                                                <a href="/">Locality</a>
                                            </li>
                                            <li>
                                                <a href="/">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="saledet-vidcall-btn">
                                        <a>Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="salederails-wrappertop">
        <div class="container">
            <div class="salederails-sectop">
                <div class="salederails-leftcon">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="salederailsleft-img">
                                <img src="{{ asset('images/bg-slider-2.jpg') }}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="saleright-con">
                                <h4>{{ $post->title }}</h4>
                                <strong>₹ {{ $post->selling_price }}</strong>



                                <p><img src="images/location-icon.svg"> {{ $post->location }}</p>
                                <span class="succspan"><img src="images/success-icon.svg" />HSO Verified Owner</span>
                                <p type="button" class="share-dropdawn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="images/share-icon.svg">
                                </p>


                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Share this property
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="share-ulli-modal">
                                                    <li><img src="{{ asset('images/facebook-icon2.svg') }}"></li>
                                                    <li><img src="{{ asset('images/linkedin-icon.svg') }}"></li>
                                                    <li><img src="{{ asset('images/twitter-icon2.svg') }}"></li>
                                                    <li><img src="{{ asset('images/pinterest-icon.svg') }}"></li>
                                                    <li><img src="{{ asset('images/email-icon.svg') }}"></li>
                                                </ul>
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
    </section>

    <section class="salederails-cmnboxwp">
        <div class="container">
            <div class="salederails-cmnbox-sec">
                <div class="row">
                    <div class="col-md-9">
                        <div id="overview" class="overview-boxwp">
                            <h4 class="ov-pro-ab-cmn">Overview</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Sale Status</h6>
                                    <strong>{{ $post->sale_status }}</strong>
                                </div>
                                <div class="col-md-8 plot-areaoverview">
                                    <h6>Plot Area</h6>
                                    <ul>
                                        <li><strong>{{ $post->plot_area }}</strong></li>
                                        <li>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Sq.ft</option>
                                                <option value="1">Sq.yd</option>
                                                <option value="2">Sq.m</option>
                                                <option value="3">Acre</option>
                                                <option value="4">Hectare</option>
                                                <option value="5">Cents</option>
                                                <option value="6">Marla</option>
                                                <option value="7">Kanal</option>
                                                <option value="8">Guntha</option>
                                                <option value="9">Grounds</option>
                                                <option value="10">Gaj</option>
                                            </select>
                                        </li>
                                        <p>(74.32 sq.m)</p>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="propertyID" class="property-detail-wp">
                            <h4 class="ov-pro-ab-cmn">Property Detail</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Boundary Wall</h6>
                                    <strong>{{ $post->boundary_wall }}</strong>
                                    <h6 class="propertyID-h6">Ownership Type</h6>
                                    <strong>{{ $post->ownership_type }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <h6>Main Enterance Facing</h6>
                                    <strong>{{ $post->main_entrance_facing }}</strong>
                                    <h6 class="propertyID-h6">Water Supply</h6>
                                    <strong>{{ $post->water_supply }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <h6>Number of open sides</h6>
                                    <strong>{{ $post->no_of_open_sides }}</strong>
                                    <h6 class="propertyID-h6">Width of road facing property</h6>
                                    <strong>{{ $post->width_of_road_facing_property }}</strong>
                                </div>
                            </div>
                        </div>

                        <div class="property-desbox">
                            <h4 class="ov-pro-ab-cmn">Property Description</h4>
                            <p>{{ $post->description }}</p>
                        </div>

                        <div class="about-ratibad-boxwp">
                            <h4 class="ov-pro-ab-cmn">About Ratibad</h4>
                            <div class="average-boxab">
                                <h5>₹ {{ $post->avg_psf }}/-</h5>
                                <p>Average PSF</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
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
    <script src="secBG/header.js"></script>
    <script src="secBG/footer.js"></script>


</body>

</html>