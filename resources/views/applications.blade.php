<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRADAN - Professional Assistance for Development Action</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .step3-container {
            display: flex;
            flex-direction: column;
            gap: 15px;

            /* Added spacing */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo me-5" href="{{route('vol')}}"><img
                        src="{{asset('assets/images/icons/Pradan-logo-title.png')}}" class="me-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{asset('assets/images/icons/Pradan-logo-icon.png')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="assets/images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i> Settings </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i> Logout </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('vol')}}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Forms</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('form1')}}">Land Form</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('form2')}}">Pond Form</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('form3')}}">Work Form</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('application')}}">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Applications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                            aria-controls="charts">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Data Collection</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Excel</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title">Farm Land v2</h4>
                                    <div class="table-responsive">
                                        <table id="land_table" class="table table-bordered table-hover table-striped">
                                            <thead class="text-center table-dark">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Application Number</th>
                                                    <th>Farmer Details</th>
                                                    <th>Land Details</th>
                                                    <th>Bank Details</th>
                                                    <th>Action</th>
                                                    <th>Status</th>


                                                </tr>
                                            </thead>
                                         

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025.
                            Developed and Maintained By <b>TIH & Developers Unit</b>.
                            All rights reserved.</span>

                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Contact Us <a
                                href="https://www.linkedin.com/company/professional-assistance-for-development-action/"><i
                                    class="ti-linkedin ms-2"></a></i></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Modalsss -->

    <!--  Farmer Detail Modal -->
    <div class="modal fade" id="farmerdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Farmer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Farmer Name : <span id="f_name"></span><br><br>
                    Father/Spouse : <span id="f_spouse"></span>
                    Mobile : <span id="f_mobile"></span><br><br>
                    Gender : <span id="f_gender"></span><br><br>
                    Id_Card : <span id="f_card"></span><br><br>
                    Members : <span id="f_member"></span><br><br>
                    Id_Number : <span id="f_number"></span><br><br>
                    hamlet : <span id="f_hamlet"></span><br><br>
                    Panchayat : <span id="f_panchayat"></span><br><br>
                    Block : <span id="f_block"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Land Detail Modal -->
    <div class="modal fade" id="landdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Land Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Ownership : <span id="l_ownership"></span><br><br>
                    Patta_no : <span id="l_patta"></span><br><br>
                    Total_Area : <span id="l_tarea"> </span><br><br>
                    Revenue_village : <span id="l_revenue"></span><br><br>
                    S.F No : <span id="l_sf"></span><br><br>
                    Soil Type : <span id="l_soil"></span><br><br>
                    Land_to_Benefit : <span id="l_benefit"></span><br><br>
                    Field_inspection : <span id="l_field"></span><br><br>
                    Site_approval : <span id="l_site"></span><br><br>
                    Date_of_Inspection : <span id="l_doi"></span><br><br>
                    Date_of_Approval : <span id="l_doa"></span><br><br>
                    Type_of_Work : <span id="l_type"></span><br><br>
                    Area_Benefites : <span id="l_area"></span><br><br>
                    Other_Works : <span id="l_oth"></span><br><br>
                    Pradan Contribution : <span id="l_pradan"></span><br><br>
                    Farmer Contribution : <span id="l_farmer"></span><br><br>
                    Total_amount : <span id="l_total"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bank Detail Modal -->
    <div class="modal fade" id="bankdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bank Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Holder_Name : <span id="b_hname"></span><br><br>
                    Account_Number : <span id="b_no"></span><br><br>
                    Bank Name : <span id="b_name"></span><br><br>
                    Branch : <span id="b_branch"></span><br><br>
                    IFSC Code : <span id="b_ifsc"></span><br><br>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function nextStep(current, next) {
            document.getElementById('step' + current).style.display = 'none';
            document.getElementById('step' + next).style.display = 'block';
        }

        function prevStep(current, prev) {
            document.getElementById('step' + current).style.display = 'none';
            document.getElementById('step' + prev).style.display = 'block';
        }



        function updateIdentityTitle() {
            const selectedIdentity = document.querySelector('input[name="identityCard"]:checked');
            const fileUploadLabel = document.getElementById("fileUploadLabel");
            if (selectedIdentity) {
                fileUploadLabel.textContent = `Upload ${selectedIdentity.value} Proof`;
            }
        }

        function nextStep(current, next) {
            document.getElementById("step" + current).style.display = "none";
            document.getElementById("step" + next).style.display = "block";
        }

        function prevStep(current, previous) {
            document.getElementById("step" + current).style.display = "none";
            document.getElementById("step" + previous).style.display = "block";
        };

        $(document).on("submit", "#landform", function(e) {
            e.preventDefault();
            var form = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/form_land",
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            title: "Success!",
                            text: "Form Submitted Successfully",
                            icon: "success",
                            confirmButtonText: "OK"
                        });
                    } else {
                        alert("something went wrong");
                    }
                }
            })

        })


        $(document).on("click", "#farmer_detail", function(e) {
            e.preventDefault();
            var form_id = $(this).val();
            $.ajax({
                type: "GET",
                url: `/fetch_farmer_det/${form_id}`,
                success: function(response) {
                    if (response.status == 200) {
                        console.log(response.data);
                        $("#f_name").text(response.data.farmer_name);
                        $("#f_spouse").text(response.data.father_spouse);
                        $("#f_mobile").text(response.data.mobile_number);
                        $("#f_gender").text(response.data.gender);
                        $("#f_card").text(response.data.identity_card_type);
                        $("#f_member").text(response.data.household_members);
                        $("#f_number").text(response.data.identity_card_number);
                        $("#f_hamlet").text(response.data.hamlet);
                        $("#f_panchayat").text(response.data.panchayat);
                        $("#f_block").text(response.data.block);

                        $("#farmerdet_modal").modal("show");
                    }

                }

            })
        });

        $(document).on("click", "#land_detail", function(e) {
            e.preventDefault();
            var form_id = $(this).val();
            $.ajax({
                type: "GET",
                url: `/fetch_land_det/${form_id}`,
                success: function(response) {
                    if (response.status == 200) {
                        $("#l_ownership").text(response.data.ownership);
                        $("#l_patta").text(response.data.patta);
                        $("#l_tarea").text(response.data.total_area);
                        $("#l_revenue").text(response.data.revenue);
                        $("#l_sf").text(response.data.sf_no);
                        $("#l_soil").text(response.data.soil_type);
                        $("#l_benefit").text(response.data.land_benefit);
                        $("#l_field").text(response.data.field_insp);
                        $("#l_site").text(response.data.site_app);
                        $("#l_doi").text(response.data.date_of_ins);
                        $("#l_doa").text(response.data.date_of_app);
                        $("#l_type").text(response.data.type_of_work);
                        $("#l_area").text(response.data.area_benefit);
                        $("#l_oth").text(response.data.other_works);
                        $("#l_pradan").text(response.data.pradan_cont);
                        $("#l_farmer").text(response.data.farmer_cont);
                        $("#l_total").text(response.data.total_amount);
                        $("#landdet_modal").modal("show");

                    }
                }

            })
        });

        $(document).on("click", "#bank_detail", function(e) {
            e.preventDefault();
            var form_id = $(this).val();
            $.ajax({
                type: "GET",
                url: `/fetch_bank_det/${form_id}`,
                success: function(response) {
                    if (response.status == 200) {


                        $("#b_hname").text(response.data.account_holder_name);
                        $("#b_no").text(response.data.account_number);
                        $("#b_name").text(response.data.bank_name);
                        $("#b_branch").text(response.data.branch);
                        $("#b_ifsc").text(response.data.ifsc_code);
                        $("#bankdet_modal").modal("show");


                    }
                }

            })


        });
    </script>


    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>

    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>

    <!-- <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script> -->

</body>

</html>