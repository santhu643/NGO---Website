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

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">




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
        <!-- Coordinator Link -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('coor') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Coordinator</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('coor1') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Applications</span>
            </a>
        </li>

        <!-- Forms Collapsible Menu -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#formsMenu" aria-expanded="false" aria-controls="formsMenu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="formsMenu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('cform1') }}">Land Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('cform2') }}">Pond Form</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('cform3') }}">Plant Form</a></li>
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
                                <ul class="nav nav-tabs mb-3"
                                    style="border-radius: 10px 10px 10px 10px; overflow: hidden;" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#coor_dash" role="tab"
                                            aria-selected="true">
                                            <i class="fas fa-seedling"></i><b>&nbsp;Dashboard</b>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link " data-bs-toggle="tab" href="#landform" role="tab"
                                            aria-selected="true">
                                            <i class="fas fa-seedling"></i><b>&nbsp;Land Form</b>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pondform" role="tab"
                                            aria-selected="false">
                                            <i class="fas fa-water"></i><b>&nbsp;Pond Form</b>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#plantform" role="tab"
                                            aria-selected="false">
                                            <i class="fas fa-tools"></i><b>&nbsp;Plantation Form</b>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content tabcontent-border">

                                    <div class="tab-pane p-20 active show" id="coor_dash" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Dashboard</h4>
                                                <div class="table-responsive">
                                                    DashBoard
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-20" id="landform" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Land Form</h4>
                                                <div class="table-responsive">
                                                    <table id="land_table"
                                                        class="table table-bordered table-hover table-striped">
                                                        <thead class="text-center table-dark">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Application Number</th>
                                                                <th>Associate</th>
                                                                <th>Farmer Details</th>
                                                                <th>Land Details</th>
                                                                <th>Bank Details</th>
                                                                <th>Documents</th>
                                                                <th>Action</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $s = 1; @endphp

                                                            @foreach($form1 as $f)
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>#TN0{{$f->id}}</td>
                                                                <td>{{$f->user_id}}</td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="farmer_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="land_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="bank_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="doc_view"
                                                                        value="{{$f->id}}">View</button></td>

    
                                                                <td>
                                                                    @if($f->status == 1)
                                                                    <button type="button"
                                                                        class="btn btn-success coor_appr1"
                                                                        value="{{ $f->id }}">
                                                                        Approve
                                                                    </button>&nbsp;&nbsp;

                                                                    <button type="button"
                                                                        class="btn btn-warning coor_update"
                                                                        value="{{ $f->id }}">
                                                                        Request Change
                                                                    </button>
                                                                    @else
                                                                    <span class="text-muted">No actions</span>
                                                                    @endif
                                                                </td>

                                                                <td>
                                                                    @switch($f->status)
                                                                    @case(1)
                                                                    <button class="btn btn-secondary">Submitted</button>
                                                                    @break

                                                                    @case(2)
                                                                    <button  value="{{ $f->id }}" class="btn btn-warning showrem">Change
                                                                        Requested</button>
                                                                    @break

                                                                    @case(3)
                                                                    <button class="btn btn-danger">Rejected</button>
                                                                    @break

                                                                    @case(4)
                                                                    <button class="btn btn-info">Forwarded to Finance Manager</button>
                                                                    @break

                                                                    @case(5)
                                                                    <button class="btn btn-warning">Finance Requested
                                                                        Change</button>
                                                                    @break

                                                                    @case(6)
                                                                    <button class="btn btn-success">Final
                                                                        Approved</button>
                                                                    @break

                                                                    @default
                                                                    <button class="btn btn-light">Status
                                                                        Unknown</button>
                                                                    @endswitch
                                                                </td>

                                                            </tr>

                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane p-20" id="pondform" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Pond Form</h4>
                                                <div class="table-responsive">
                                                    <table id="pond_table"
                                                        class="table table-bordered table-hover table-striped">
                                                        <thead class="text-center table-dark">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Application Number</th>
                                                                <th>Associate</th>
                                                                <th>Farmer Details</th>
                                                                <th>Pond Details</th>
                                                                <th>Bank Details</th>
                                                                <th>Documents</th>
                                                                <th>Action</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $s = 1; @endphp

                                                            @foreach($form2 as $f)
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>#TN0{{$f->id}}</td>
                                                                <td>{{$f->user_id}}</td>

                                                                <td><button type="button" class="btn btn-success"
                                                                        id="farmer_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="pond_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="bank_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="doc_view"
                                                                        value="{{$f->id}}">View</button></td>
                                                                <td>
                                                                    @if($f->status == 1)
                                                                    <button type="button"
                                                                        class="btn btn-success coor_appr1"
                                                                        value="{{ $f->id }}">
                                                                        Approve
                                                                    </button>&nbsp;&nbsp;

                                                                    <button type="button"
                                                                        class="btn btn-warning coor_update"
                                                                        value="{{ $f->id }}">
                                                                        Request Change
                                                                    </button>
                                                                    @else
                                                                    <span class="text-muted">No actions</span>
                                                                    @endif
                                                                </td>

                                                                
                                                                <td>
                                                                    @switch($f->status)
                                                                    @case(1)
                                                                    <button class="btn btn-secondary">Submitted</button>
                                                                    @break

                                                                    @case(2)
                                                                    <button  value="{{ $f->id }}" class="btn btn-warning showrem">Change
                                                                        Requested</button>
                                                                    @break

                                                                    @case(3)
                                                                    <button class="btn btn-danger">Rejected</button>
                                                                    @break

                                                                    @case(4)
                                                                    <button class="btn btn-info">Forwarded to Finance Manager</button>
                                                                    @break

                                                                    @case(5)
                                                                    <button class="btn btn-warning">Finance Requested
                                                                        Change</button>
                                                                    @break

                                                                    @case(6)
                                                                    <button class="btn btn-success">Final
                                                                        Approved</button>
                                                                    @break

                                                                    @default
                                                                    <button class="btn btn-light">Status
                                                                        Unknown</button>
                                                                    @endswitch
                                                                </td>



                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane p-20" id="plantform" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Plantation Form</h4>
                                                <div class="table-responsive">
                                                    <table id="plant_table"
                                                        class="table table-bordered table-hover table-striped">
                                                        <thead class="text-center table-dark">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Application Number</th>
                                                                <th>Associate</th>
                                                                <th>Farmer Details</th>
                                                                <th>Land Details</th>
                                                                <th>Bank Details</th>
                                                                <th>Documents</th>
                                                                <th>Action</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $s = 1; @endphp
                                                            @foreach($form3 as $f)
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>#TN0{{$f->id}}</td>
                                                                <td>{{$f->user_id}}</td>

                                                                <td><button type="button" class="btn btn-success"
                                                                        id="farmer_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="plant_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-success"
                                                                        id="bank_detail"
                                                                        value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="doc_view"
                                                                        value="{{$f->id}}">View</button></td>
                                                                <td>
                                                                    @if($f->status == 1)
                                                                    <button type="button"
                                                                        class="btn btn-success coor_appr1"
                                                                        value="{{ $f->id }}">
                                                                        Approve
                                                                    </button>&nbsp;&nbsp;

                                                                    <button type="button"
                                                                        class="btn btn-warning coor_update"
                                                                        value="{{ $f->id }}">
                                                                        Request Change
                                                                    </button>
                                                                    @else
                                                                    <span class="text-muted">No actions</span>
                                                                    @endif
                                                                </td>

                                                                
                                                                <td>
                                                                    @switch($f->status)
                                                                    @case(1)
                                                                    <button class="btn btn-secondary">Submitted</button>
                                                                    @break

                                                                    @case(2)
                                                                    <button  value="{{ $f->id }}" class="btn btn-warning showrem">Change
                                                                        Requested</button>
                                                                    @break

                                                                    @case(3)
                                                                    <button class="btn btn-danger">Rejected</button>
                                                                    @break

                                                                    @case(4)
                                                                    <button class="btn btn-info">Forwarded to Finance Manager</button>
                                                                    @break

                                                                    @case(5)
                                                                    <button class="btn btn-warning">Finance Requested
                                                                        Change</button>
                                                                    @break

                                                                    @case(6)
                                                                    <button class="btn btn-success">Final
                                                                        Approved</button>
                                                                    @break

                                                                    @default
                                                                    <button class="btn btn-light">Status
                                                                        Unknown</button>
                                                                    @endswitch
                                                                </td>



                                                            </tr>

                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
                    Block : <span id="f_block"></span><br><br>
                    Type of Household : <span id="f_household_type"></span><br><br>
                    Special Category : <span id="f_special_category"></span><br><br>
                    Caste : <span id="f_caste"></span><br><br>
                    Occupation : <span id="f_occupation"></span><br><br>
                    Type of House : <span id="f_house_type"></span><br><br>
                    Drinking Water Source : <span id="f_drinking_water"></span><br><br>
                    Potability : <span id="f_potability"></span><br><br>
                    Domestic Water Source : <span id="f_domestic_water"></span><br><br>
                    Toilet Availability : <span id="f_toilet_availability"></span><br><br>
                    Toilet Condition : <span id="f_toilet_condition"></span><br><br>
                    House Owner : <span id="f_house_owner"></span><br><br>
                    Household Education : <span id="f_household_education"></span><br><br>
                    Latitude : <span id="f_latitude"></span><br><br>
                    Longitude : <span id="f_longitude"></span><br><br>
                    MCode : <span id="f_mcode"></span>
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
                    Well Irrigation : <span id="l_well_irrigation"></span><br><br>
                    Area Irrigated : <span id="l_area_irrigated"></span><br><br>
                    Irrigated Lands : <span id="l_irrigated_lands"></span><br><br>
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

    <!-- Land Detail Modal -->
    <div class="modal fade" id="plantdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Plantation Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Ownership : <span id="plant_ownership"></span><br><br>
                    Well Irrigation : <span id="plant_well_irrigation"></span><br><br>
                    Area Irrigated : <span id="plant_area_irrigated"></span><br><br>
                    Irrigated Lands : <span id="plant_irrigated_lands"></span><br><br>
                    Patta No : <span id="plant_patta"></span><br><br>
                    Total Area : <span id="plant_total_area"></span><br><br>
                    Revenue Village : <span id="plant_revenue"></span><br><br>
                    Crop Season : <span id="plant_crop_season"></span><br><br>
                    Livestock : <span id="plant_livestock"></span><br><br>
                    Plantation Type : <span id="plant_type"></span><br><br>
                    SF No : <span id="plant_sf_no"></span><br><br>
                    Soil Type : <span id="plant_soil_type"></span><br><br>
                    Land to Benefit : <span id="plant_land_benefit"></span><br><br>
                    Field Inspection : <span id="plant_field_inspection"></span><br><br>
                    Site Approval : <span id="plant_site_approval"></span><br><br>
                    Date of Inspection : <span id="plant_date_of_inspection"></span><br><br>
                    Date of Approval : <span id="plant_date_of_approval"></span><br><br>
                    Type of Work : <span id="plant_type_of_work"></span><br><br>
                    Area Benefit : <span id="plant_area_benefit"></span><br><br>
                    Other Works : <span id="plant_other_works"></span><br><br>
                    Pradan Contribution : <span id="plant_pradan_contribution"></span><br><br>
                    Farmer Contribution : <span id="plant_farmer_contribution"></span><br><br>
                    Total Amount : <span id="plant_total_amount"></span><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Pond Detail Modal -->
    <div class="modal fade" id="ponddet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pond Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Land_Owner : <span id="p_owner"></span><br><br>
                    Patta No : <span id="p_patta"></span><br><br>
                    Total Area : <span id="p_tarea"></span><br><br>
                    Irrigated Lands : <span id="p_irrigated_lands"></span><br><br>
                    Revenue : <span id="p_revenue"></span><br><br>
                    Livestock : <span id="p_livestock"></span><br><br>
                    Crop Season : <span id="p_crop_season"></span><br><br>
                    Well Irrigation : <span id="p_well_irrigation"></span><br><br>
                    SF No : <span id="p_sf"></span><br><br>
                    Soil Type : <span id="p_soil"></span><br><br>
                    Land TO Serve : <span id="p_land"></span><br><br>
                    Field Inspection : <span id="p_field"></span><br><br>
                    Site Approval : <span id="p_site"></span><br><br>
                    Type of Work : <span id="p_type_of_work"></span><br><br>
                    Date of Inspection : <span id="p_doi"></span><br><br>
                    Date of Approval : <span id="p_doa"></span><br><br>
                    Length : <span id="p_len"></span><br><br>
                    Depth : <span id="p_dep"></span><br><br>
                    Breadth : <span id="p_breadth"></span><br><br>
                    Volume : <span id="p_vol"></span><br><br>
                    Pradan Contribution : <span id="p_pcont"></span><br><br>
                    Farmer Contribution : <span id="p_fcont"></span><br><br>
                    Total : <span id="total"></span>
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

   <!-- Remarks Modal -->
<div class="modal fade" id="rem_modal" tabindex="-1" aria-labelledby="remarksModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <h5 class="modal-title" id="remarksModalLabel">Request Change - Remarks</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="remarks_form">
                @csrf
                <div class="modal-body">
                    <!-- Hidden input for form ID -->
                    <input type="hidden" id="rem_form_id" name="form_id">
                    
                    <!-- Remarks input -->
                    <label for="remarks" class="form-label">Please specify what changes are required:</label>
                    <textarea class="form-control" name="remarks" id="remarks" rows="4" placeholder="Enter detailed remarks..." required></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit Remarks</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="view_rem_modal" tabindex="-1" aria-labelledby="remarksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remarks from TL/Coordinator</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="view_remark_text" class="text-dark"></p>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title">Submitted Documents</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center" id="document-buttons">
        <!-- Buttons will be added here dynamically -->
      </div>
    </div>
  </div>
</div>  

<!-- File Viewer Modal -->
<div class="modal fade" id="fileViewerModal" tabindex="-1" aria-labelledby="fileViewerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header">
        <h5 class="modal-title">Document Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <iframe id="docPreview" src="" width="80%" height="400px" style="border: none;"></iframe>
        <br>
        <a id="docDownload" class="btn btn-success mt-3" href="#" download target="_blank">Download</a>
      </div>
    </div>
  </div>
</div>


    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('#land_table').DataTable();
        $('#pond_table').DataTable();
        $('#plant_table').DataTable();

    });

    $(document).ready(function() {
        $('#length, #breadth, #depth').on('input', function() {
            let length = parseFloat($('#length').val()) || 0;
            let breadth = parseFloat($('#breadth').val()) || 0;
            let depth = parseFloat($('#depth').val()) || 0;
            let volume = length * breadth * depth;
            $('#volume').val(volume.toFixed(2));
        });


    });
    </script>

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
                    $("#f_household_type").text(response.data.type_of_households);
                    $("#f_special_category").text(response.data.special_catog);
                    $("#f_caste").text(response.data.caste);
                    $("#f_occupation").text(response.data.hh_occupation);
                    $("#f_house_type").text(response.data.type_of_house);
                    $("#f_drinking_water").text(response.data.drinking_water);
                    $("#f_potability").text(response.data.potability);
                    $("#f_domestic_water").text(response.data.domestic_water);
                    $("#f_toilet_availability").text(response.data.toilet_availability);
                    $("#f_toilet_condition").text(response.data.toilet_cond);
                    $("#f_house_owner").text(response.data.house_owner);
                    $("#f_household_education").text(response.data.household_education);
                    $("#f_latitude").text(response.data.lat);
                    $("#f_longitude").text(response.data.lon);
                    $("#f_mcode").text(response.data.mcode);

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
                    $("#l_well_irrigation").text(response.data.well_irrigation); // Newly added
                    $("#l_area_irrigated").text(response.data.area_irrigated); // Newly added
                    $("#l_irrigated_lands").text(response.data.irrigated_lands); // Newly added
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

    $(document).on("click", "#pond_detail", function(e) {
        e.preventDefault();
        var form_id = $(this).val();
        console.log("deiiii")
        $.ajax({
            type: "GET",
            url: `/fetch_pond_det/${form_id}`,
            success: function(response) {
                console.log(response);
                if (response.status == 200) {
                    $("#p_owner").text(response.data.land_owner);
                    $("#p_patta").text(response.data.patta);
                    $("#p_tarea").text(response.data.total_area);
                    $("#p_irrigated_lands").text(response.data.irrigated_lands); // Newly added
                    $("#p_revenue").text(response.data.revenue);
                    $("#p_livestock").text(response.data.livestocks); // Newly added
                    $("#p_crop_season").text(response.data.crop_season); // Newly added
                    $("#p_well_irrigation").text(response.data.well_irrigation); // Newly added
                    $("#p_sf").text(response.data.sf_no);
                    $("#p_soil").text(response.data.soil_type);
                    $("#p_land").text(response.data.land_serve);
                    $("#p_field").text(response.data.field_insp);
                    $("#p_site").text(response.data.site_appr);
                    $("#p_type_of_work").text(response.data.type_of_work); // Newly added
                    $("#p_doi").text(response.data.date_of_insp);
                    $("#p_doa").text(response.data.date_of_appr);
                    $("#p_len").text(response.data.length);
                    $("#p_dep").text(response.data.depth);
                    $("#p_breadth").text(response.data.breadth); // Newly added
                    $("#p_vol").text(response.data.volume);
                    $("#p_pcont").text(response.data.pradan_cont);
                    $("#p_fcont").text(response.data.farmer_cont);
                    $("#total").text(response.data.total);

                    $("#ponddet_modal").modal("show");


                }
            }

        })


    });


    $(document).on("click", "#plant_detail", function(e) {
        e.preventDefault();
        var form_id = $(this).val();
        console.log("deiiii")
        $.ajax({
            type: "GET",
            url: `/fetch_plant_det/${form_id}`,
            success: function(response) {
                console.log(response);
                $("#plant_ownership").text(response.data.ownership);
                $("#plant_well_irrigation").text(response.data.well_irrigation);
                $("#plant_area_irrigated").text(response.data.area_irrigated);
                $("#plant_irrigated_lands").text(response.data.irrigated_lands);
                $("#plant_patta").text(response.data.patta);
                $("#plant_total_area").text(response.data.total_area);
                $("#plant_revenue").text(response.data.revenue);
                $("#plant_crop_season").text(response.data.crop_season);
                $("#plant_livestock").text(response.data.livestocks);
                $("#plant_type").text(response.data.plantation);
                $("#plant_sf_no").text(response.data.sf_no);
                $("#plant_soil_type").text(response.data.soil_type);
                $("#plant_land_benefit").text(response.data.land_benefit);
                $("#plant_field_inspection").text(response.data.field_insp);
                $("#plant_site_approval").text(response.data.site_app);
                $("#plant_date_of_inspection").text(response.data.date_of_ins);
                $("#plant_date_of_approval").text(response.data.date_of_app);
                $("#plant_type_of_work").text(response.data.type_of_work);
                $("#plant_area_benefit").text(response.data.area_benefit);
                $("#plant_other_works").text(response.data.other_works);
                $("#plant_pradan_contribution").text(response.data.pradan_cont);
                $("#plant_farmer_contribution").text(response.data.farmer_cont);
                $("#plant_total_amount").text(response.data.total_amount);

                $("#plantdet_modal").modal("show");
            }

        })


    });

    $(document).on("click", ".coor_appr1", function(e) {
        e.preventDefault();
        var form_id = $(this).val();
        console.log(form_id);
        $.ajax({
            type: "POST",
            url: `/coor_appr1/${form_id}`,
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status == 200) {
                    alert("Forwarded to finance manager");
                } else {
                    alert("something went wrong");

                }
            }


        })
    });



    $(document).on("click",".coor_update",function(e){
        e.preventDefault();
        var form_id = $(this).val();
        $("#rem_form_id").val(form_id);
        $("#rem_modal").modal("show");
    });

    $(document).on("submit","#remarks_form",function(e){
        e.preventDefault();
        var form = new FormData(this);
        console.log(form);
        $.ajax({
            type: "POST",
            url: "/coor/rem",
            data: form,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == 200) {
                    alert("Request for change updated");
                    $('#rem_modal').modal('hide');
                } else {
                    alert("Something went wrong");
                }
            }
        });

    })

    $(document).on("click", ".showrem", function(e) {
    e.preventDefault();
    
    var formId = $(this).val(); // get form ID from button value

    // Fetch the remarks using AJAX
    $.ajax({
        type: "GET",
        url: "/get-remarks/" + formId,
        success: function(response) {
            if (response.success == 200) {
                $('#view_remark_text').text(response.remarks); // Set the remarks
                $('#view_rem_modal').modal('show'); // Show modal
            } else {
                alert("Remarks not found.");
            }
        },
        error: function(xhr) {
            console.log(xhr.responseText);
            alert("Server error.");
        }
    });
});

$(document).on("click","#doc_view",function(e){
    e.preventDefault();
    let formId = $(this).val();

    // Clear previous buttons
    $('#document-buttons').html('');

    // List of document labels
    let labels = ['Patta', 'FMB', 'Passbook', 'Identity', 'Photo'];

    labels.forEach(function(label) {
        let button = `
            <button class="btn btn-outline-primary m-2 doc-file-btn" 
                    value="${formId}">
                ${label}
            </button>`;
        $('#document-buttons').append(button);
    });

    // Open the modal
    $('#documentModal').modal('show');
});

$(document).on("click", ".doc-file-btn", function () {
    let form_id = $(this).val();
    let type = $(this).text().trim().toLowerCase(); // 'patta', 'identity', etc.

    $.ajax({
        url: "/get-document",
        type: "POST",
        data: {
            _token: '{{ csrf_token() }}',
            form_id: form_id,
            type: type
        },
        success: function (response) {
            if (response.file_url) {
                $('#docPreview').attr('src', response.file_url);
                $('#docDownload').attr('href', response.file_url);
                $('#fileViewerModal').modal('show');
            } else {
                alert('File not found.');
            }
        },
        error: function () {
            alert('Something went wrong.');
        }
    });
});

    </script>


    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>

    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>



    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script> -->

</body>

</html>