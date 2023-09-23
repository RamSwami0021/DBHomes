<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>DBHomes - Welcome</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('DBHomesUsers/components.nav')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('DBHomesUsers/components.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Form Validation</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Validation
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card p-5">
                                <div class="card-header">
                                    <h4 class="card-title">Bootstrap Validation</h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="POST"
                                        action="{{ route('postUpdate', ['id' => $Post['id']]) }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label" for="title">User Id</label>
                                            <input readonly type="text" id="title" name="user_id" class="form-control"
                                                placeholder="User Id" value="{{ $Post['user_id'] }}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter User Id.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="title">Title</label>
                                            <input type="text" id="title" name="title" class="form-control"
                                                placeholder="Title" value="{{ $Post['title'] }}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter Title.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"
                                                required>{{ $Post['description'] }}</textarea>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter Description.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="selling_price">Selling Price</label>
                                            <input type="text" id="selling_price" name="selling_price"
                                                class="form-control" placeholder="Selling Price"
                                                value="{{ $Post['selling_price'] }}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter Selling Price.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="location">Location</label>
                                            <select class="form-select" id="location" name="location" required>
                                                <option value="">Select Location</option>
                                                <option value="location1">Location 1</option>
                                                <option value="location2">Location 2</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select Location.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Boundary Wall</label>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="boundary_wall"
                                                    name="boundary_wall" value="1"
                                                    {{ $Post['boundary_wall'] == 1 ? 'checked' : '' }} />
                                                <label class="form-check-label" for="boundary_wall">Boundary
                                                    Wall</label>
                                                <div class="invalid-feedback">Please check Boundary Wall.</div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="main_entrance_facing">Main Entrance
                                                Facing</label>
                                            <select class="form-select" id="main_entrance_facing"
                                                name="main_entrance_facing" required>
                                                <option value="">Select Main Entrance Facing</option>
                                                <option value="facing1">Facing 1</option>
                                                <option value="facing2">Facing 2</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select Main Entrance Facing.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="no_of_open_sides">No. of Open Sides</label>
                                            <input type="text" id="no_of_open_sides" name="no_of_open_sides"
                                                class="form-control" placeholder="No. of Open Sides"
                                                value="{{ $Post['no_of_open_sides'] }}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter No. of Open Sides.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="ownership_type">Ownership Type</label>
                                            <select class="form-select" id="ownership_type" name="ownership_type"
                                                required>
                                                <option value="">Select Ownership Type</option>
                                                <option value="ownership_type1">Ownership Type 1</option>
                                                <option value="ownership_type2">Ownership Type 2</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select Ownership Type.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="water_supply">Water Supply</label>
                                            <select class="form-select" id="water_supply" name="water_supply" required>
                                                <option value="">Select Water Supply</option>
                                                <option value="water_supply1">Water Supply 1</option>
                                                <option value="water_supply2">Water Supply 2</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select Water Supply.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="width_of_road_facing_property">Width of Road
                                                Facing Property</label>
                                            <input type="text" id="width_of_road_facing_property"
                                                name="width_of_road_facing_property" class="form-control"
                                                placeholder="Width of Road Facing Property"
                                                value="{{ $Post['width_of_road_facing_property'] }}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter Width of Road Facing Property.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="avg_psf">Avg PSF</label>
                                            <input type="text" id="avg_psf" name="avg_psf" class="form-control"
                                                placeholder="Avg PSF" value="{{ $Post['avg_psf'] }}" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter Avg PSF.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="img">Image</label>
                                            <input type="file" id="img" name="img" class="form-control"
                                                accept="image/*" />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select an image.</div>
                                        </div>

                                        <!-- Image Preview -->
                                        @if ($Post['img'])
                                        <div class="mb-3">
                                            <label class="form-label">Current Image</label>
                                            <img src="{{ Storage::url($Post['img']) }}" alt="Current Image"
                                                class="img-thumbnail">
                                        </div>
                                        @endif



                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
                <!-- /Validation -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('DBHomesUsers/components.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/form-validation.js"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    </script>
</body>
<!-- END: Body-->

</html>