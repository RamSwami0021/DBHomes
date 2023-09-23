<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectSale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div>
        @include('header')
    </div>




    <section class="projectSale-headertwo-wp">
        <div class="container">
            <div class="projectSale-headertwo-sec mt-5 pt-5">
                <ul>
                    <li class="search-input-project">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                                aria-describedby="basic-addon2" />
                            <span class="input-group-text search-imgpro" id="basic-addon1">
                                <img src="images/search-icon.svg" />
                            </span>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-property">
                        <div class="nav-link dropdown-toggle probutbhkmore" href="/" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Property Type
                        </div>
                        <ol class="dropdown-menu property-ol">
                            <li class="cmnli-prop">
                                <ul class="property-ol-ul2">
                                    <li>
                                        <div class="form-check check-input-property">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" checked onClick={residentialOn} />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Residential
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check check-input-property">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" onClick={commercialOn} />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Commercial
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="residential-ulli">
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Apartment
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Villa / individual house
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Builder floor
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Row house
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Farm house
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="residential-ulli">
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Service apartment
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Studio apartment
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Residential plot
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" />
                                                Penthouse apartment
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="row">
                    <div class="col-sm-6">
                      <ul class="residential-ulli">
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Office space
                        </li>
                        <br></br>
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Shop
                        </li>
                        <br></br>
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Warehouse
                        </li>
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Commercial{" "}
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="residential-ulli">
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Agricultural land
                        </li>
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Hotel/resorts
                        </li>
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Industrial land
                        </li>
                        <li>
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckChecked"
                          />
                          Showroom
                        </li>
                      </ul>
                    </div>
                  </div> -->
                                <hr />
                                <button class="cmn-btnprojectSale">Apply</button>
                            </li>
                        </ol>
                    </li>

                    <li class="rupee-drop-project">
                        <div class="dropdown">
                            <button class="dropdown-toggle probutbhkmore" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Budget
                            </button>
                            <ul class="dropdown-menu dropdown-menu-project">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="budget-price-oneul">
                                                <li>
                                                    <span>Min</span>
                                                </li>
                                                <li>₹ 5 Lakhs </li>
                                                <li>₹ 10 Lakhs</li>
                                                <li>₹ 15 Lakhs</li>
                                                <li>₹ 10 Lakhs</li>
                                                <li>₹ 25 Lakhs</li>
                                                <li>₹ 30 Lakhs</li>
                                                <li>₹ 35 Lakhs</li>
                                                <li>₹ 40 Lakhs</li>
                                                <li>₹ 45 Lakhs</li>
                                                <li>₹ 50 Lakhs</li>
                                                <li>₹ 55 Lakhs</li>
                                                <li>₹ 60 Lakhs</li>
                                                <li>₹ 65 Lakhs</li>
                                                <li>₹ 70 Lakhs</li>
                                                <li>₹ 75 Lakhs</li>
                                                <li>₹ 80 Lakhs</li>
                                                <li>₹ 85 Lakhs</li>
                                                <li>₹ 90 Lakhs</li>
                                                <li>₹ 95 Lakhs</li>
                                                <li>₹ 1 Cr</li>
                                                <li>₹ 1.20 Cr</li>
                                                <li>₹ 1.40 Cr</li>
                                                <li>₹ 1.60 Cr</li>
                                                <li>₹ 1.80 Cr</li>
                                                <li>₹ 2 Cr</li>
                                                <li>₹ 2.2 Cr</li>
                                                <li>₹ 2.4 Cr</li>
                                                <li>₹ 2.5 Cr+</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="budget-price-twoul">
                                                <li>
                                                    <span>Max</span>
                                                </li>
                                                <li>₹ 5 Lakhs</li>
                                                <li>₹ 10 Lakhs</li>
                                                <li>₹ 15 Lakhs</li>
                                                <li>₹ 10 Lakhs</li>
                                                <li>₹ 25 Lakhs</li>
                                                <li>₹ 30 Lakhs</li>
                                                <li>₹ 35 Lakhs</li>
                                                <li>₹ 40 Lakhs</li>
                                                <li>₹ 45 Lakhs</li>
                                                <li>₹ 50 Lakhs</li>
                                                <li>₹ 55 Lakhs</li>
                                                <li>₹ 60 Lakhs</li>
                                                <li>₹ 65 Lakhs</li>
                                                <li>₹ 70 Lakhs</li>
                                                <li>₹ 75 Lakhs</li>
                                                <li>₹ 80 Lakhs</li>
                                                <li>₹ 85 Lakhs</li>
                                                <li>₹ 90 Lakhs</li>
                                                <li>₹ 95 Lakhs</li>
                                                <li>₹ 1 Cr</li>
                                                <li>₹ 1.20 Cr</li>
                                                <li>₹ 1.40 Cr</li>
                                                <li>₹ 1.60 Cr</li>
                                                <li>₹ 1.80 Cr</li>
                                                <li>₹ 2 Cr</li>
                                                <li>₹ 2.2 Cr</li>
                                                <li>₹ 2.4 Cr</li>
                                                <li>₹ 2.5 Cr+</li>
                                            </ul>
                                        </div>
                                        <button class="cmn-btnprojectSale btnprojectSale-cmn">
                                            Apply
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="bkh-ulli">
                        <div class="dropdown">
                            <button class="dropdown-toggle probutbhkmore" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                BHK
                            </button>
                            <ul class="dropdown-menu bhkulli">
                                <!-- {/* <li>1RK/BHK</li>
                <li>2 BHK</li>
                <li>3 BHK</li>
                <li>4 BHK</li>
                <li>5 BHK</li>
                <li>6 BHK</li>
                <li>7 BHK</li>
                <li>8 BHK</li>
                <li>9 BHK</li>
                <li>10 BHK</li> */} -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="residential-ulli">
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                1RK/BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                2 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                3 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                4 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                5 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                6 BHK
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="residential-ulli">
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                7 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                8 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                9 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                10 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                11 BHK
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                12 BHK
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br />
                                <button class="cmn-btnprojectSale btnprojectSale-cmn">
                                    Apply
                                </button>
                            </ul>
                        </div>
                    </li>

                    <li class="filters-drop-project probutbhkmore">
                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            More Filters
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content modal-contentfilters">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-2 col-md-2">
                                                <div class="filters-prmodal-left">
                                                    <ul>
                                                        <li class="filters-prmli-active">
                                                            <a href="#possession">Possession Status</a>
                                                        </li>
                                                        <li>
                                                            <a href="#salestatus">Sale Status</a>
                                                        </li>
                                                        <li>
                                                            <a href="#bathrooms">Bathrooms</a>
                                                        </li>
                                                        <li>
                                                            <a href="#posted">Posted By</a>
                                                        </li>
                                                        <li>
                                                            <a href="#area">Area</a>
                                                        </li>
                                                        <li>
                                                            <a href="#ageofproperty">Age of Property</a>
                                                        </li>
                                                        <li>
                                                            <a href="#entrancefacing">Entrance Facing</a>
                                                        </li>
                                                        <li>
                                                            <a href="#amenities">Amenities</a>
                                                        </li>
                                                        <li>
                                                            <a href="#withphotos">With Photos</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-md-10">
                                                <div class="filters-prmodal-right">
                                                    <ul id="possession" class="possession-ulli">
                                                        <h6>Possession Status</h6>
                                                        <li>Any</li>
                                                        <li>Ready to move</li>
                                                        <li>Upcoming</li>
                                                        <li>Under Construction</li>
                                                    </ul>
                                                    <ul id="salestatus" class="salestatus-ulli">
                                                        <h6>Sale Status</h6>
                                                        <li>Any</li>
                                                        <li>New</li>
                                                        <li>Resale</li>
                                                    </ul>
                                                    <ul id="bathrooms" class="bathrooms-ulli">
                                                        <h6>Bathrooms</h6>
                                                        <li>1</li>
                                                        <li>2</li>
                                                        <li>3</li>
                                                        <li>4</li>
                                                        <li>5</li>
                                                        <li>6</li>
                                                        <li>7</li>
                                                        <li>8</li>
                                                        <li>9</li>
                                                        <li>10</li>
                                                    </ul>
                                                    <ul id="posted" class="posted-ulli">
                                                        <h6>Posted</h6>
                                                        <li>Owner</li>
                                                        <li>Builder</li>
                                                        <li>Agent</li>
                                                    </ul>
                                                    <ul id="area" class="area-ulli">
                                                        <h6>Area</h6>
                                                        <li class="area-one-drop">
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>
                                                                    Min Area
                                                                    <img src="images/dropdown-icon.svg" />
                                                                </option>
                                                                <option value="1">500 Sqft</option>
                                                                <option value="2">1000 Sqft</option>
                                                                <option value="3">2000 Sqft</option>
                                                                <option value="4">3000 Sqft</option>
                                                                <option value="5">4000 Sqft</option>
                                                                <option value="6">5000 Sqft</option>
                                                            </select>

                                                        </li>
                                                        <li class="area-one-drop">
                                                            <div class="dropdown">
                                                                <button class="dropbtn">
                                                                    Min Area
                                                                    <img src="images/images/dropdown-icon.svg" />
                                                                </button>
                                                                <div class="dropdown-content">
                                                                    <a>Max Area</a>
                                                                    <a>500 Sqft</a>
                                                                    <a>1000 Sqft</a>
                                                                    <a>2000 Sqft</a>
                                                                    <a>3000 Sqft</a>
                                                                    <a>4000 Sqft</a>
                                                                    <a>5000 Sqft</a>
                                                                    <a>10000 Sqft</a>
                                                                    <a>100000 Sqft</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul id="ageofproperty" class="ageofproperty-ulli">
                                                        <h6>Age Of Property</h6>
                                                        <li>Any</li>
                                                        <li>New Construction</li>
                                                        <li>Less than 5 Years</li>
                                                        <li>5-10 Years</li>
                                                        <li>10-15 Years</li>
                                                        <li>15-20 Years</li>
                                                        <li>Above 20 Years</li>
                                                    </ul>
                                                    <ul id="entrancefacing" class="entrancefacing-ulli">
                                                        <h6>Entrance Facing</h6>
                                                        <li>Any</li>
                                                        <li>North</li>
                                                        <li>East</li>
                                                        <li>West</li>
                                                        <li>South</li>
                                                        <li>North-East</li>
                                                        <li>South-East</li>
                                                        <li>North-West</li>
                                                        <li>South-West</li>
                                                    </ul>
                                                    <ul id="amenities" class="amenities-ulli">
                                                        <h6>Amenities</h6>
                                                        <li>Security</li>
                                                        <li>Reserved Parking</li>
                                                        <li>Visitor Parking</li>
                                                        <li>Gymnasium</li>
                                                        <li>Lift</li>
                                                        <li>Power Back Up</li>
                                                        <li>Vaastu Compliant</li>
                                                        <li>Club House</li>
                                                        <li>Swimming Pool</li>
                                                        <li>Landscape - Flower Garden</li>
                                                        <li>Worship</li>
                                                        <li>24 Hours Water Supply</li>
                                                        <li>Guest Accommodation</li>
                                                        <li>Kids Play Area</li>
                                                        <li>Kids Play Area</li>
                                                        <li>CCTV</li>
                                                    </ul>
                                                    <ul id="withphotos" class="withphotos-ulli">
                                                        <h6>With Photos</h6>
                                                        <li>Show Properties with Photos Only</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer modal-footer-filters">
                                        <button type="button" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="submit-filters">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="clearall-project">
                        <span>Cleae All</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="allproperty-wrapper">
        <div class="container">
            <div class="allproperty-sec">
                <div class="allproperty-menusulli">
                    <ul>
                        <li>
                            Properties
                        </li>
                        <li>
                            Projects
                        </li>
                        <li>
                            Agents
                        </li>
                    </ul>
                </div>
                <div class="properties-con-onclick">
                    <h1></h1>
                </div>
                <!-- 
          <div>
            <h5>Agents </h5>
          </div>
          <div>
            <h5>Projects </h5>
          </div> -->

                @foreach($posts as $post)
<div class="properties-wrapper">
    <div class="properties-sec">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="properties-leftcon">
                    <a href="{{ route('ProjectSaleDetails', ['id' => $post->id]) }}">
                        <img src="images/home-imgs.avif" />
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="properties-rightcon">
                <a href="{{ route('ProjectSaleDetails', ['id' => $post->id]) }}">
                    <h5>{{ $post->title }}</h5>
                    </a>
                    <ul>
                        <li>
                            <h6>Plot area</h6>
                            <span>{{ $post->plot_area }}</span>
                        </li>
                        <li class="entnor-ulli">
                            <h6>Enterance</h6>
                            <span>{{ $post->main_entrance_facing }}</span>
                        </li>
                        <li class="entnor-ulli">
                            <h6>Water Supply</h6>
                            <span>{{ $post->water_supply }}</span>
                        </li>
                        <li class="entnor-ulli">
                            <h6>Boundary Wall</h6>
                            <span>{{ $post->boundary_wall }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="properties-towright">
                    <h5>₹ 49 Lac</h5>
                    <ul>
                        <li class="schedule-li">
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Schedule Site Visit
                            </button>
                            <!-- Rest of your HTML content -->
                        </li>
                        <li class="schedule-li schedule-litwo">
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdropp">
                                Contact Owner
                            </button>
                            <!-- Rest of your HTML content -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


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