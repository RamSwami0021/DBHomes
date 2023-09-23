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
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Include jQuery -->


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
    @include('DBHomesAdmin/components.nav')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('DBHomesAdmin/components.sidebar')
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
                            <h2 class="content-header-title float-start mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Index
                                    </li>
                                </ol>
                            </div>
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
                                        action="{{ route('admin.budget.submit') }}">
                                    @csrf
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Budget Minmum</label>
                                            <input type="text" id="basic-addon-name" class="form-control"
                                                placeholder="Budget Minimum" aria-label="Name"
                                                name="min" aria-describedby="basic-addon-name"
                                                value="" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your Budget min.</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Budget Maximum</label>
                                            <input type="text" id="basic-addon-name" class="form-control"
                                                placeholder="Budget Maximum" aria-label="Name"
                                                name="max" aria-describedby="basic-addon-name"
                                                value="" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your Budget max.</div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="content-body">
                <!-- Kick start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users List 🚀</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <table id="userTable" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Budget Min</th>
                                        <th>Budget Max</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $data['id'] }}</td>
                                        <td>{{ $data['min'] }}</td>
                                        <td>{{ $data['max'] }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="deletePost({{ $data['id'] }})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Budget Min</th>
                                        <th>Budget Max</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--/ Kick start -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('DBHomesAdmin/components.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            // DataTables options and configurations
            // For example:
            paging: true,
            searching: true,
            // ... other options ...
        });
    });
    </script>
    <script>
    function deletePost(userId) {
    if (confirm('Are you sure you want to delete this post?')) {
        // Perform the delete operation here
        // Example AJAX code using jQuery:
        $.ajax({
            url: '/admin/budget/delete/' + userId,
            type: 'get',
            data: { _token: '{{ csrf_token() }}' },
            success: function(response) {
                // Handle success
                alert('Post deleted successfully');
                // Optionally, update the UI to remove the deleted post
            },
            error: function(xhr) {
                // Handle error
                alert('Error deleting post: ' + xhr.responseText);
            }
        });
    }
}


    </script>

</body>
<!-- END: Body-->

</html>