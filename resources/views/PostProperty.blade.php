<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostProperty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>

input#flexRadioDefault1 {
  border-radius: 0.25em !important;
}

input#flexRadioDefault2 {
  border-radius: 0.25em !important;
}

.modulPOst {
    margin: 12px 0 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e9e9e9;
}

button.btnbandBG {
    color: #000;
    background: #e4e4e4;
}

div#BoxHigT input {
    cursor: pointer;
}

div#BoxHigT label {
    font-size: 14px;
}

        #HightPagTwo {
           display: none;
        }

        #HightPagThree {
            display: none;
        }

        #HightPagFour {
            display: none;
        }
        
        #HightPagFive {
            display: none;
        }

        #CompletedID {
            display: none;
        }

        #DatepickerID {
            display: none;
        }


    </style>

</head>
<body>

    <div>
    @include('header')
    </div>


<section class="post-pro-wp">
    <div class="container">
      <div class="post-pro-sec">
        <div class="postyopro-headtop">
          <div class="row">
            <div class="col-md-6 postyoprohe-leftcon">
              <h4>Post Your Property</h4>
              <p>For Sale, Rent, PG in just 3 quick steps</p>
            </div>
            <div class="col-md-6 postyoprohe-rightcon">
              <ul>
                <li>
                  <p>PROPERTY COMPLETENESS SCORE</p>
                </li>
                <li>
                  <img src="images/question-icon.svg">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="basic-post-wp">
<div class="container">
    <div class="basic-post-sec">
        <div id="HightPagOne">
        <h4>Basic info</h4>
        <div class="row">
            <div class="col-md-5 basic-post-leftcon">
            <div class="basicpost-leftbox1 basicpost-cmnbox">
                <h5>You are</h5>
                <button class="activbtn">Owner</button>
            </div>
            <div class="basicpost-leftbox3 basicpost-cmnbox">
                <h5>
                City where property is located *
                <span>Type & Select</span>
                </h5>
                

                <select
                class="cmn-selectpropos form-select"
                aria-label="Default select example"
                >
                <option selected>
                    <h5>Popular Cities</h5>
                </option>
                <option value="1">Ahmedabad</option>
                <option value="2">Bhilai</option>
                <option value="3">Bhopal</option>
                <option value="4">Chandigarh</option>
                <option value="5">Gandhinagar</option>
                <option value="6">Greater Noida</option>
                <option value="7">Gurgaon</option>
                <option value="8">Hoshangabad</option>
                <option value="9">Indore</option>
                <option value="10">Jabalpur</option>
                <option value="11">Jaipur</option>
                <option value="12">Jamshedpur</option>
                <option value="13">Ludhiana</option>
                <option value="14">Nagpur</option>
                <option value="15">Nashik</option>
                <option value="16">Noida</option>
                <option value="17">Patna</option>
                <option value="18">Raipur</option>
                <option value="19">Rajkot</option>
                <option value="20">Shimla</option>
                <option value="21">Surat</option>
                <option value="22">Vadodara</option>
                <option value="22">
                    <h5>Other Cities</h5>
                </option>
                <option value="23">Ahmednagar</option>
                <option value="24">Ajmer</option>
                <option value="25">Akola</option>
                <option value="26">Alwar</option>
                <option value="27">Amritsar</option>
                <option value="28">Aurangabad</option>
                <option value="29">Banswara</option>
                <option value="30">Barmer</option>
                <option value="31">Bathinda</option>
                <option value="32">Bharatpur</option>
                <option value="33">Bhavnagar</option>
                <option value="34">Bhilwara</option>
                <option value="35">Bhiwadi</option>
                <option value="36">Bhuj</option>
                <option value="37">Bikaner</option>
                <option value="38">Bilaspur</option>
                <option value="39">Dhanbad</option>
                <option value="40">Dhar</option>
                <option value="41">Durg</option>
                <option value="42">Faridabad</option>
                <option value="43">Gangapur City</option>
                <option value="44">Gaya</option>
                <option value="45">Ghaziabad</option>
                <option value="46">Gwalior</option>
                <option value="47">Hisar</option>
                <option value="48">Hyderabad</option>
                <option value="49">Jalandhar</option>
                <option value="50">Jalgaon</option>
                <option value="51">Jhunjhunu</option>
                <option value="52">Jodhpur</option>
                <option value="53">Karnal</option>
                <option value="54">Khandwa</option>
                <option value="55">Kota</option>
                <option value="56">Mehsana</option>
                <option value="57">Mohali</option>
                <option value="58">Mumbai</option>
                <option value="59">Muzaffarpur</option>
                <option value="60">Nagaur</option>
                <option value="61">Neemrana</option>
                <option value="62">New Delhi</option>
                <option value="63">Pali</option>
                <option value="64">Panchkula</option>
                <option value="65">Panipat</option>
                <option value="66">Raigarh</option>
                <option value="67">Ranchi</option>
                <option value="68">Ratlam</option>
                <option value="69">Rewari</option>
                <option value="70">Rohtak</option>
                <option value="71">Sagar</option>
                <option value="72">Sikar</option>
                <option value="73">Solapur</option>
                <option value="74">Sri Ganganagar</option>
                <option value="75">Udaipur</option>
                <option value="76">Ujjain</option>
                <option value="77">Vapi</option>
                </select>
            </div>
            <div class="basicpost-leftbox2 basicpost-cmnbox">
                <h5>Property type</h5>
                <button class="activbtn">Rent</button>
            </div>
            </div>
            <div class="col-md-7 basic-post-rightcon">
            <div class="basicpost-leftbox4 basicpost-cmnbox">
                <h5>Property</h5>
                <ul>
                <li>
                    <button onClick={BasicOn} id="Basicp1">
                    Residential Properties
                    </button>
                </li>
                <li>
                    <button onClick={BasicOn2} id="Basicp2">
                    Commercial Properties
                    </button>
                </li>
                <li>
                    <button onClick={BasicOn3} id="Basicp3">
                    PG Properties
                    </button>
                </li>
                </ul>
            </div>
            <div class="basicpost-leftbox5 basicpost-cmnbox">
                <h5>Property Type</h5>
                <ul>
                <li>
                    <button>VILLA HOUSE</button>
                </li>
                <li>
                    <button>APARTMENT</button>
                </li>
                <li>
                    <button>BUILDER FLOOR</button>
                </li>
                <li>
                    <button>ROW HOUSE</button>
                </li>
                <li>
                    <button>SERVICE APARTMENT</button>
                </li>
                <li>
                    <button>STUDIO APARTMENT</button>
                </li>
                <li>
                    <button>PENTHOUSE APARTMENT</button>
                </li>
                <li>
                    <button>FLATS</button>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <button onclick="ChangONcl()" class="nextbtnbasic-pos">
            <ul>
                <li>Let's start Posting</li>
                <li>
                <img src="images/next-IconTwo.svg">
                </li>
            </ul>
            </button>
        </div>

        <div id="HightPagTwo">
            <div>
                <div>
                    <div class="basic-postwo">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="basic-postwoid-left">
                                    <div class="input-group mb-3">
                                        <div class="add_grp_image_div margin_bottom">
                                            <img src="images/gallery-Icon.svg" class="add_grp_image">
                                            <input type="file" class="filetype" id="group_image">
                                            <span class="small_font to_middle">Add group image</span>
                                            <img id="target">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                                <div class="basic-postwoid-right">
                                    <h5>Let us upload for you.</h5>
                                    <ul>
                                        <li>
                                            <img src="images/whatsapp-Icpon.svg" tital="">
                                            <span>WhatsApp photos on</span>
                                            <h6>(+91) 7224850913</h6>
                                        </li>
                                        <li>
                                            <img src="images/email-2.svg">
                                            <span>Email photos to</span>
                                            <h6>info@homeonline.com</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="basic2-btns">
                            <button onclick="backBGT()">back</button>
                            <button class="basic2btn-skip" onclick="BGSkip()">Skip &amp; Continue
                                <img src="images/next-IconTwo.svg">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            

        <div id="HightPagThree">
        <div>
            <div class="property-basic3-wp">
                <div class="row"><div class="col-md-6">
                    <div class="property-basic3left">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Enter Locality</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Enter Address</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="property-basic3right">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Enter Project Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Landmark Near</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="basic3cmnBtn" class="basic2-btns">
                    <button onclick="backS()">back</button>
                    <button class="skipBG" onclick="BGSaveOn()">Save &amp; Next<img src="images/next-IconTwo.svg">
                    </button>
                </div>
            </div>
        </div>
        
        </div>

        <div id="HightPagFour">
            <div class="configuration-sec">
                <div class="row">
                    <div class="col-md-4">
                        <div class="configuration-leftcon">
                            <label for="basic-url" class="form-label">
                                <strong>Configuration (Bedrooms)</strong>
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <op
                                tion value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="basic-url" class="form-label">
                            <strong>Number of Bathrooms</strong>
                        </label>
                        <select class="form-select" aria-label="Default select example">
                            <option>Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="basic-url" class="form-label">
                            <strong>Number of Bathrooms</strong>
                        </label>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link">Balcony</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">6</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">7</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="configuration-right">
                        <h5>Area</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="basic-url" class="form-label">
                                    <strong>Choose Unit Type</strong>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option>sq.ft</option>
                                    <option value="1">sq.yd</option>
                                    <option value="2">sq.m</option>
                                    <option value="3">acre</option>
                                    <option value="4">hectare</option>
                                    <option value="5">cents</option>
                                    <option value="6">marla</option>
                                    <option value="7">kanal</option>
                                    <option value="8">guntha</option>
                                    <option value="9">grounds</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter carpet area" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text">
                                                <div class="dropdown">
                                                    <button class="dropdown-cmnbg" type="button" data-bs-toggle="dropdown" aria-expanded="false">Carpet area</button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <span class="dropdown-item">
                                                                <strong class="strongBg">Carpet Area</strong>= Floor that can be carpeted
                                                            </span>
                                                                <br>
                                                                <img src="images/area-carpetBG.jpg">
                                                            
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter built up area" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text">
                                                <div class="dropdown">
                                                    <button class="dropdown-cmnbg" type="button" data-bs-toggle="dropdown" aria-expanded="false">Built up area</button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <span class="dropdown-item"><span>
                                                                <strong class="strongBg">Built up Area</strong> = Carpet Area + Walls</span>
                                                                <br>
                                                                <img src="images/areaCarpetTwoBG.jpg">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter super built up area" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text">
                                                <div class="dropdown">
                                                    <button class="dropdown-cmnbg" type="button" data-bs-toggle="dropdown" aria-expanded="false">Super Built up area</button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <span class="dropdown-item">
                                                                <span>
                                                                    <strong class="strongBg">Super built up Area</strong>= Built up + Common Areas
                                                                </span>
                                                                <br>
                                                                <img src="images/areaCarpetThreeBG.jpg">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div class="calculate-PSFbg">
                                    <strong>Calculate PSF based upon</strong>
                                    <ul>
                                        <li id="calculateOneLI">Super Built Up Area</li>
                                        <li id="calculateTwoLI">Built Up Area</li>
                                        <li id="calculateThreeLI">Carpet Area</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricesale-bg">
                    <h5>Price</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="pricesale-left">
                                <label for="basic-url" class="form-label">
                                    <strong>Sale Price</strong>
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                    <input type="text" class="form-control" placeholder="Sale Price" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <ul class="configuration-ulbg">
                                    <li class="configuration-ullibg">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Maintenance charges" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </li>
                                    <li>
                                        <select class="form-select" aria-label="Default select example">
                                            <option>Select Frequency</option>
                                            <option value="1">Select Frequency</option>
                                            <option value="2">Monthly</option>
                                            <option value="3">Quarterly</option>
                                            <option value="4">Half-Yearly</option>
                                            <option value="5">Yearly</option>
                                            <option value="6">One Time</option>
                                            <option value="7">Per Sq. Unit Monthly</option>
                                        </select>
                                    </li>
                                </ul>
                                <br>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Water charges" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pricesale-right">
                                <label for="basic-url" class="form-label">
                                    <strong>Price per sq.ft</strong>
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="input-group-text  spanBg" id="basic-addon2">@example.com</span>
                                </div>
                                <div class="pricesale-chak">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexRadioDefault1" value="">
                                        <label class="form-check-label" for="flexRadioDefault1">Show 'Negotiable' with the price display</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexRadioDefault1" value="">
                                        <label class="form-check-label" for="flexRadioDefault2">Hide price ₹ on property display (Not Recommended)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="con-poss-wpbottom">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="con-poss-left">
                                <div class="construction-bg">
                                    <h5>Construction Status</h5>
                                        <li id="IDconstructionLI" onclick="CompletedONli()">Completed</li>
                                        <li id="IDconstructionLItwo" onclick="ConstructionONLI()">Under Construction</li>
                                    <div class="construction-status"></div>
                                    <div id="CompletedID">
                                        <strong>Possession</strong>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="" checked="">
                                            <label class="form-check-label" for="flexCheckDefault">Ready to move</label>
                                        </div>
                                    </div>
                                    <div id="DatepickerID">
                                        <h6>Datepicker</h6>
                                    </div>
                                </div>
                                <div class="total-floorsbg">
                                    <ul>
                                        <li>
                                            <h5>Total floors in building</h5>
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Total floors in building </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">...</option>
                                                <option value="100">100</option>
                                            </select>
                                        </li>
                                        <li>
                                            <h5>Property on floor</h5>
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Open this select menu</option>
                                                <option value="1">Choose One </option>
                                                <option value="2">All</option>
                                                <option value="3">Lower Basement</option>
                                                <option value="4">Upper Basement</option>
                                                <option value="5">Ground Floor</option>
                                                <option value="6">1 </option>
                                                <option value="7">2</option>
                                                <option value="8">3</option>
                                                <option value="9">4</option>
                                                <option value="10">...</option>
                                                <option value="100">100</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="amenities-selectbg">
                                <h5>Amenities (pick)</h5>
                                <button type="button" class="amenibtn-seltbg" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Amenities</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialogBG">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Amenities</h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Security</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Reserved Parking</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Visitor Parking</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Gymnasium</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Lift</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Waste Disposal</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Power Back Up</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">R O Water System</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Conference Room</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Fire fighting Equipments</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Laundary Service</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Vaastu Compliant</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Intercom</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Club House</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">WiFi</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Rain Water Harvesting</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Swimming Pool</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Landscape - Flower Garden</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Property Staff - Maintenace Staff</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">School</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">ATM</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Worship</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Water Plant</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Bank</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Pipe Gas</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Shopping Center - Retail Shop</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Banquet Hall</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">24 Hours Water Supply</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Aerobic Room</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Amphitheatre</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Barbeque Pit</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Basketball-Tennis Court</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Day care center</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Early Learning Centre - Play Group</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Golf Course</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Guest Accommodation</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Indoor Games Room</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Indoor Squash - badminton Court</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Kids Club</label>
                                                        </div><div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Kids Play Area</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Meditation Center</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Multipurpose Hall</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Paved Compound</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Recreational Pool - Facilities</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Rentable Community Space</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Service - Goods Lift</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Sewage Treatment Plan</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Skating Court</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Strolling Cycling and Jogging Track</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Waiting Lounge</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">CCTV</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Centralized AC</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Canteen</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Shopping Center</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Basement Parking</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">RFID Card Entry</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Gazebo</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Yoga Room</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Pool Side Garden</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Carom</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">Tree House For Children</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""
                                                            ><label class="form-check-label" for="flexCheckDefault">Volleyball court</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="">
                                                            <label class="form-check-label" for="flexCheckDefault">icon-volleyball-court</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer md-bg">
                                                <button class="" type="button" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="donBtn-bg">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="furnishingsta-wpbg"><h5>Furnishing Status</h5>
                                <ul>
                                    <li id="UnfurnishedID">Unfurnished</li>
                                    <li id="SemiID">Semi furnished</li>
                                    <li id="FullyID">Fully furnished</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="property-deswp">
                        <h5>Add Property Description</h5>
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="basic2-btns">
                        <button onclick="HightFIBAC()">back</button>
                        <button class="basic2btn-skip" onclick="HighFiNE()">Skip &amp; Continue<img src="images/next-IconTwo.svg"></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="HightPagFive">
            <div class="thankdet-wp">
                <div class="row">
                  <div class="col-md-6">
                    <div id="hightObox" class="thankdet-left">
                      <div class="x-icon">
                        <img onclick="boxHig()" src="images/x-Icon.svg"/>
                      </div>
                      <h5>
                        <img src="images/gallery-iconbg.svg" />
                        Upload 4+ Images!
                      </h5>
                      <p>
                        Get 3x responses when you post property with photos.
                        <strong>Increases score by 15%.</strong>
                      </p>
                      <button>Upload Now</button>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="BoxHigT" class="thankdet-right">
                      <div class="x-icon">
                        <img onclick="boxHigT()" src="images/x-Icon.svg"/>
                      </div>
                      <h5>Add Additional info</h5>
                      <p>Helps seekers narrow down searches with property filters.<strong>Increases score by 25%.</strong></p>
                      
                      <!-- Button trigger modal -->
                        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModalxx">
                            Add Additional Details
                        </button>
                        
                        <!-- Modal -->
                        <from action="" method="get">
                            <div class="modal fade" id="exampleModalxx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div> -->
                                    <div class="modal-body">
                                        <div class="modulPOst">
                                            <h6>Water Supply</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Municipal water
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Bore water
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            NA
                                                        </label>
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>Power Backup</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Partial
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Full
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            No Backup
                                                        </label>
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>
                                                Entrance facing</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            North
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            East
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            West
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            South
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            North-East
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            South-East
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            North-West
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultA" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            South-West
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>Ownership type</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultB" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Freehold
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultB" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Leasehold
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultB" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Power of Attorney
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultB" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Co-operative Society
                                                        </label>
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>Age of property</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultC" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            New Construction
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultC" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Less than 5 Years
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultC" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            5-10 Years
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultC" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            10-15 Years
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultC" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            15-20 Years
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultC" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Above 20 Years
                                                        </label>
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>Additional Rooms</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultE">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Servant Room
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultE">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Pooja Room
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultE">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Study Room
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultE">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Store Room
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultE">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            None
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>General Flooring</h6>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Marble Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Wooden Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Stone Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Anti skid Tiles
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Laminated Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Granite Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Ceramic - Vitrified Tiles
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Ceramic Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultD" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Vitrified Tiles Flooring
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>Parking Type</h6>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No Parking
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Two Wheeler Open Air
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Two Wheeler Covered
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Four Wheeler Open Air
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Four Wheeler Covered
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Two- Four Wheeler Open Air
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Two-Four Wheeler Covered
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Two Wheeler Open Air - Four Wheeler Covered
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefaultF" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Four Wheeler Open Air - Two Wheeler Covered
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modulPOst">
                                            <h6>Approved By</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            RERA
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Pradhan Mantri Awas Yojna
                                                        </label>
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Bhilai Development Authority
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            NA
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btnbandBG" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="" onclick="subBGbtn()">Submit</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        </from>
                  </div>
                </div>
                <div class="viwe-detselect">
                    <h5>Thank You!</h5>
                    <h6>Your property preview on the result page</h6>
                    <p><strong>You have successfuly listed your property.</strong> Check details below.</p>
                    <div class="box-overla">
                        <a href="ProSaledetail.html">
                            View Details
                        </a>
                    </div>
                    <img src="images/home-imgs.avif">
                </div>
              </div>
        </div>
            

        <div class="presant-basicmn">
        <button id="PresantD">0%</button>
        </div>
    
    </div>
</div>
</section>



<div>
@include('footer')
</div>


  <script>

    function subBGbtn() {
        document.getElementById('PresantD').innerHTML = "85%";
    }

    let ChangPage = "0";

    function ChangONcl() {
            document.getElementById('HightPagOne').style.display= "none";
            document.getElementById('HightPagTwo').style.display= "block";
            document.getElementById('PresantD').innerHTML = "15%";
        }
        //
    function backBGT() {
        document.getElementById('HightPagOne').style.display= "block";
        document.getElementById('HightPagTwo').style.display= "none";   
            document.getElementById('PresantD').innerHTML = "0%";         
    }
     
    function BGSkip() {        
        document.getElementById('HightPagThree').style.display= "block";
        document.getElementById('HightPagTwo').style.display= "none";   
        document.getElementById('PresantD').innerHTML = "30%"; 
    }
    //

    function BGSaveOn() {                
        document.getElementById('HightPagThree').style.display= "none";
        document.getElementById('HightPagFour').style.display= "block";
        document.getElementById('PresantD').innerHTML = "45%"; 
    }

    function backS() {
        document.getElementById('HightPagTwo').style.display= "block";
        document.getElementById('HightPagThree').style.display= "none";   
        document.getElementById('PresantD').innerHTML = "15%";       
    }
    // DatepickerID
    function CompletedONli(){
        document.getElementById('IDconstructionLI').style.background= "#bd079b";
        document.getElementById('IDconstructionLI').style.color= "#fff";
        document.getElementById('IDconstructionLItwo').style.background= "#fff";
        document.getElementById('IDconstructionLItwo').style.color= "#000";
        document.getElementById('CompletedID').style.display= "block";
        document.getElementById('DatepickerID').style.display= "none";
    }

    function ConstructionONLI(){
        document.getElementById('IDconstructionLItwo').style.background= "#bd079b";
        document.getElementById('IDconstructionLItwo').style.color= "#fff";
        document.getElementById('IDconstructionLI').style.background= "#fff";
        document.getElementById('IDconstructionLI').style.color= "#000";
        document.getElementById('CompletedID').style.display= "none";
        document.getElementById('DatepickerID').style.display= "block";
    }

    function HighFiNE() {
        document.getElementById('HightPagFour').style.display= "none";
        document.getElementById('HightPagFive').style.display= "block";   
        document.getElementById('PresantD').innerHTML = "60%";        
    }

    function HightFIBAC() {  
        document.getElementById('HightPagFour').style.display= "none";
        document.getElementById('HightPagThree').style.display= "block";   
        document.getElementById('PresantD').innerHTML = "30%";
    }

    function boxHig() {
        document.getElementById('hightObox').style.display= "none";
    }

    function boxHigT() {
        document.getElementById('BoxHigT').style.display= "none";
    }



  </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="secBG/header.js"></script>
<script src="secBG/footer.js"></script>
    
</body>
</html>

