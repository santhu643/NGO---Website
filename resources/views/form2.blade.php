<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRADAN - Professional Assistance for Development Action</title>

    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
    .large-checkbox,
    .large-radio {
        width: 20px;
        height: 20px;
        margin-right: 5px;
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
                        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
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
                    <button type="button" class="btn btn-dark" value="land" data-bs-toggle="modal"
                        data-bs-target="#pond_modal">Add</button><br><br>

                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title">Farm Pond v2</h4>
                                    <div class="table-responsive">
                                    <table id="pond_table" class="table table-bordered table-hover table-striped">
                                            <thead class="text-center table-dark">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Farmer Details</th>
                                                    <th>Pond Details</th>
                                                    <th>Bank Details</th>
                                                    <th>Action</th>
                                                    <th>Status</th>


                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                            @php $sno = 1; @endphp
                                            @foreach($forms as $form)
                                            <tr>
                                                <td>{{ $sno++ }}</td>
                                                <th><button id="farmer_detail" value="{{$form->id}}" style="color:white" class="btn btn-success btn-sm"><b>{{ $form->farmer_name }}</b></button></th>
                                                <th><button id="pond_detail" value="{{$form->id}}" style="color:white" class="btn btn-success btn-sm"><b>{{ $form->pondForm->land_owner }}</b></button></th>
                                                <th><button value="{{$form->id}}" id="bank_detail" style="color:white" class="btn btn-success btn-sm"><b>{{ $form->bankDetails->account_holder_name }}</b></button></th>
                                                <th><button value="" style="color:white" class="btn btn-warning btn-sm"><b>Edit</b></button>
                                                &nbsp;<button value="{{$form->id}}" id="pond_del" style="color:white" class="btn btn-danger btn-sm"><b>Delete</b></button></th>                                               
                                              <td>Status</td>

                                           
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

    <!-- Modal -->
    <div class="modal fade" id="pond_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Farm Pond Application Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="pondForm">
                        @csrf


                        <!-- Section 1: Farmer Details (Initially Visible) -->
                        <div id="farmerDetails">
                            <h5>Farmer Details</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="user_id" value="{{ session('user_id') }}" hidden>

                                    <label class="form-label">Name of Farmer</label>
                                    <input type="text" class="form-control" name="farmer_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile_number" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Transgender">Transgender</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Father / Spouse</label>
                                    <input type="text" class="form-control" name="father_spouse">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Household Members</label>
                                    <input type="number" class="form-control" name="household_members">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label d-block">Identity Card</label>
                                    <div class="d-flex">
                                        <input type="radio" name="identity_card" value="Aadhar" class="identity-select">
                                        <label class="mx-2">Aadhar</label>
                                        <input type="radio" name="identity_card" value="EPIC" class="identity-select">
                                        <label class="mx-2">EPIC</label>
                                        <input type="radio" name="identity_card" value="Driving License"
                                            class="identity-select"> <label class="mx-2">Driving License</label>
                                    </div>
                                </div>
                            </div>

                            <!-- File Upload (Hidden Initially) -->
                            <div class="row mt-3" id="identityFileUpload">
                                <div class="col-md-12">
                                    <label class="form-label" id="identityFileLabel"></label>
                                    <input type="file" class="form-control" name="identity_document">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">ID Card Number</label>
                                    <input type="text" class="form-control" name="id_card_number">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Hamlet</label>
                                    <input type="text" class="form-control" name="hamlet">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Panchayat</label>
                                    <input type="text" class="form-control" name="panchayat">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Block</label>
                                    <input type="text" class="form-control" name="block">
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="button" id="nextSection1" class="btn btn-primary">Next</button>
                            </div>
                        </div>

                        <!-- Section 2: Land Ownership + Farm Pond Details (Initially Hidden) -->
                        <div id="landOwnershipSection" style="display: none;">
                            <h5>Land Ownership & Farm Pond Details</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Land Ownership</label>
                                    <select class="form-control" name="land_ownership">
                                        <option value="Owner Cultivator">Owner Cultivator</option>
                                        <option value="Lease Holder">Lease Holder</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Patta Number</label>
                                    <input type="text" class="form-control" name="patta_number">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Total Area (ha)</label>
                                    <input type="text" class="form-control" name="total_area">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Revenue Village</label>
                                    <input type="text" class="form-control" name="revenue_village">
                                </div>
                            </div>

                            <h5 class="mt-4">Farm Pond Details</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">S.F. No. of the Location</label>
                                    <input type="text" class="form-control" name="sf_number">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label d-block">Soil Type</label>
                                    <div class="d-flex">
                                        <input type="radio" name="soil_type" value="Red Soil"> <label class="mx-2">Red
                                            Soil</label>
                                        <input type="radio" name="soil_type" value="Black Cotton"> <label
                                            class="mx-2">Black Cotton</label>
                                        <input type="radio" name="soil_type" value="Sandy Loam"> <label
                                            class="mx-2">Sandy Loam</label>
                                        <input type="radio" name="soil_type" value="Laterite"> <label
                                            class="mx-2">Laterite</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Land to serve (ha)</label>
                                    <input type="text" class="form-control" name="land_serve">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Field Inspection Done By</label>
                                    <div class="d-flex">
                                        <input type="checkbox" name="inspection_by" value="Volunteer"> <label
                                            class="mx-2">Volunteer</label>
                                        <input type="checkbox" name="inspection_by" value="Project Executive"> <label
                                            class="mx-2">Project Executive</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Site Approved By</label>
                                    <div class="d-flex">
                                        <input type="checkbox" name="approved_by" value="Project Executive"> <label
                                            class="mx-2">Project Executive</label>
                                        <input type="checkbox" name="approved_by" value="Team Leader"> <label
                                            class="mx-2">Team Leader</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Date of Inspection</label>
                                    <input type="date" class="form-control" name="doi">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date of Approval</label>
                                    <input type="date" class="form-control" name="doa">
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-secondary" id="prevSection1">Previous</button>
                                <button type="button" class="btn btn-primary" id="nextSection2">Next</button>
                            </div>
                        </div>

                        <!-- Section 3: Excavation & Financial Contributions (Initially Hidden) -->
                        <div id="excavationSection" style="display: none;">
                            <h5>Excavation & Financial Contributions</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Length (m)</label>
                                    <input type="number" class="form-control" id="length" name="length">
                                </div>
                                
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Depth (m)</label>
                                    <input type="number" class="form-control" id="depth" name="depth">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Volume of Excavation (m³)</label>
                                    <input type="text" class="form-control" id="vol" name="vol" >
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">PRADAN Contribution</label>
                                    <input type="text" class="form-control" name="pradan_contribution">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Farmer Contribution</label>
                                    <input type="text" class="form-control" name="farmer_contribution">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Total Estimate Amount</label>
                                    <input type="text" class="form-control" name="total_estimate">
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-secondary" id="prevSection2">Previous</button>

                                <button type="button" class="btn btn-primary" id="nextSection3">Next</button>
                            </div>
                        </div>

                        <!-- Section 4: Bank Details (Initially Hidden) -->
                        <div id="bankDetailsSection" style="display: none;">
                            <h5>Bank Details</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" name="bank_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Branch</label>
                                    <input type="text" class="form-control" name="branch" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Account Holder Name</label>
                                    <input type="text" class="form-control" name="account_holder" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Account Number</label>
                                    <input type="text" class="form-control" name="account_number" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">IFSC Code</label>
                                    <input type="text" class="form-control" name="ifsc_code" required>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <label class="form-label">Farmer has agreed for the work, and his
                                        contribution:</label>
                                    <div class="d-flex gap-3">
                                        <input type="radio" name="farmer_agreement" value="Yes"> Yes
                                        <input type="radio" name="farmer_agreement" value="No"> No
                                    </div>
                                </div>
                            </div>
                            
<!-- File Upload Section -->
<div class="row mb-3">
    <div class="col-md-6">
        <label for="file1" class="form-label">File 1</label>
        <input type="file" name="files[]" class="form-control">

        <label for="file2" class="form-label mt-2">File 2</label>
        <input type="file" name="files[]" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="file3" class="form-label">File 3</label>
        <input type="file" name="files[]" class="form-control">

        <label for="file4" class="form-label mt-2">File 4</label>
        <input type="file" name="files[]" class="form-control">

        <label for="file5" class="form-label mt-2">File 5</label>
        <input type="file" name="files[]" class="form-control">
    </div>
</div>

                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-secondary" id="prevSection3">Previous</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>


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
                    Father/Spouse : <span id="f_spouse"></span><br><br> 
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

           <!-- Pond Detail Modal -->
           <div class="modal fade" id="ponddet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pond Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Land_Owner  : <span id="p_owner"></span><br><br>
                    Patta No : <span id="p_patta"></span><br><br>
                    Total Area : <span id="p_tarea"></span><br><br>
                    Revenue : <span id="p_revenue"></span><br><br>
                    SF No : <span id="p_sf"></span><br><br>
                    Soil Type : <span id="p_soil"></span><br><br>
                    Land TO Serve : <span id="p_land"></span><br><br>
                    Field Inspection : <span id="p_field"></span><br><br>
                    Site Approval : <span id="p_site"></span><br><br>
                    Date of Inspection : <span id="p_doi"></span><br><br>
                    Date of Approval : <span id="p_doa"></span><br><br>
                    Length : <span id="p_len"></span><br><br>
                    Depth : <span id="p_dep"></span><br><br>
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

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

    <!-- <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script> -->

    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>

    <!-- <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script> -->
    <script>
    document.getElementById("nextSection1").addEventListener("click", function() {
        document.getElementById("farmerDetails").style.display = "none";
        document.getElementById("landOwnershipSection").style.display = "block";
    });

    document.getElementById("prevSection1").addEventListener("click", function() {
        document.getElementById("landOwnershipSection").style.display = "none";
        document.getElementById("farmerDetails").style.display = "block";
    });

    document.getElementById("nextSection2").addEventListener("click", function() {
        document.getElementById("landOwnershipSection").style.display = "none";
        document.getElementById("excavationSection").style.display = "block";
    });

    document.getElementById("prevSection2").addEventListener("click", function() {
        document.getElementById("excavationSection").style.display = "none";
        document.getElementById("landOwnershipSection").style.display = "block";
    });

    document.getElementById("nextSection3").addEventListener("click", function() {
        document.getElementById("excavationSection").style.display = "none";
        document.getElementById("bankDetailsSection").style.display = "block";
    });

    document.getElementById("prevSection3").addEventListener("click", function() {
        document.getElementById("bankDetailsSection").style.display = "none";
        document.getElementById("excavationSection").style.display = "block";
    });

    // Auto-calculate Volume of Excavation
    document.querySelectorAll("#length, #breadth, #depth").forEach(input => {
        input.addEventListener("input", function() {
            let length = parseFloat(document.getElementById("length").value) || 0;
            let breadth = parseFloat(document.getElementById("breadth").value) || 0;
            let depth = parseFloat(document.getElementById("depth").value) || 0;
            document.getElementById("volume").value = (length * breadth * depth).toFixed(2);
        });
    });

    $(document).on("submit","#pondForm",function(e){
      e.preventDefault();
      var form = new FormData(this);
      $.ajax({
        type:"POST",
        url:"/form_pond",
        data:form,
        processData:false,
        contentType:false,
        success:function(response){
          if(response.status==200){
            alert("submitted successfully");
            $("#pond_table").load(location.href + " #pond_table");

          }
        }
      })
    });



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
        $.ajax({
            type: "GET",
            url: `/fetch_pond_det/${form_id}`,
            success: function(response) {
                if (response.status == 200) {
                    $("#p_owner").text(response.data.land_owner);
                $("#p_patta").text(response.data.patta);
                $("#p_tarea").text(response.data.total_area);
                $("#p_revenue").text(response.data.revenue);
                $("#p_sf").text(response.data.sf_no);
                $("#p_soil").text(response.data.soil_type);
                $("#p_land").text(response.data.land_serve);
                $("#p_field").text(response.data.field_insp);
                $("#p_site").text(response.data.site_appr);
                $("#p_doi").text(response.data.date_of_insp);
                $("#p_doa").text(response.data.date_of_appr);
                $("#p_len").text(response.data.length);
                $("#p_dep").text(response.data.depth);
                $("#p_vol").text(response.data.volume);
                $("#p_pcont").text(response.data.pradan_cont);
                $("#p_fcont").text(response.data.farmer_cont);
                $("#total").text(response.data.total);

                    $("#ponddet_modal").modal("show");


                }
            }

        })


    });

    $(document).on("click","#pond_del",function(e){
        e.preventDefault();
        var form_id = $(this).val();
        console.log(form_id);
        $.ajax({
            type:"POST",
            url:`/pond_del/${form_id}`,
            headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
            success:function(response){
                if(response.status==200){
                    console.log("deleted succesfully");
                    $("#pond_table").load(location.href + " #pond_table");

                }
            }
        })
    });


    
    </script>

</body>

</html>