<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRADAN - Professional Assistance for Development Action</title>
    <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<!-- jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- jQuery (Make sure it's loaded before DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



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
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/icons/Pradan-logo-icon.png')}}"
                        alt="logo" /></a>
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
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('form2')}}">Pond Form</a>
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
                <button type="button" class="btn btn-dark" value="land" data-bs-toggle="modal" data-bs-target="#land_modal">Add</button><br><br>

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
                                                    <th>Farmer Name</th>
                                                    <th>Panchayat/Block</th>
                                                    <th>Mobile Number</th>
                                                    <th>Details</th>
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

<div class="modal fade" id="land_modal" tabindex="-1" aria-labelledby="landFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="landFormModalLabel">Land (re)Development Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="landForm">
                        <div id="step1">
                            <h5>Basic Details</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="farmerName" class="form-label">Name of Farmer</label>
                                    <input type="text" class="form-control" id="farmerName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Gender</label>
                                    <div>
                                        <input type="radio" id="male" name="gender" value="Male"
                                            class="form-check-input" required>
                                        <label for="male" class="form-check-label">Male</label>
                                        <input type="radio" id="female" name="gender" value="Female"
                                            class="form-check-input ms-3" required>
                                        <label for="female" class="form-check-label">Female</label>
                                        <input type="radio" id="transgender" name="gender" value="Transgender"
                                            class="form-check-input ms-3" required>
                                        <label for="transgender" class="form-check-label">Transgender</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="fatherSpouse" class="form-label">Father / Spouse</label>
                                    <input type="text" class="form-control" id="fatherSpouse" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="householdMembers" class="form-label">Household Members</label>
                                    <input type="number" class="form-control" id="householdMembers" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Identity Card</label>
                                    <div>
                                        <input type="radio" id="aadhar" name="identityCard" value="Aadhar"
                                            class="form-check-input" required onclick="updateIdentityTitle()">
                                        <label for="aadhar" class="form-check-label">Aadhar</label>
                                        <input type="radio" id="epic" name="identityCard" value="EPIC"
                                            class="form-check-input ms-3" required onclick="updateIdentityTitle()">
                                        <label for="epic" class="form-check-label">EPIC</label>
                                        <input type="radio" id="drivingLicense" name="identityCard"
                                            value="Driving License" class="form-check-input ms-3" required
                                            onclick="updateIdentityTitle()">
                                        <label for="drivingLicense" class="form-check-label">Driving License</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="idCardNumber" class="form-label">ID Card Number</label>
                                    <input type="text" class="form-control" id="idCardNumber" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="fileUpload" class="form-label" id="fileUploadLabel">Upload ID
                                        Proof</label>
                                    <input type="file" class="form-control" id="fileUpload" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="hamlet" class="form-label">Hamlet</label>
                                    <input type="text" class="form-control" id="hamlet" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="panchayat" class="form-label">Panchayat</label>
                                    <input type="text" class="form-control" id="panchayat" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="block" class="form-label">Block</label>
                                    <input type="text" class="form-control" id="block" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-primary" onclick="nextStep(1, 2)">Next</button>
                            </div>
                        </div>

                        <div id="step2" style="display: none;">
                            <h5>Details of Land Ownership</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <input type="radio" name="type" id="ownerCultivator" class="form-check-input">
                                        <label for="ownerCultivator" class="form-check-label">Owner Cultivator</label>
                                        <input type="radio" name="type" id="leaseHolder" class="form-check-input ms-3">
                                        <label for="leaseHolder" class="form-check-label">Lease Holder</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Patta Number</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Total Area (ha)</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Revenue Village</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(2, 1)">Back</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(2, 3)">Next</button>
                            </div>
                        </div>

                        <div id="step3" style="display: none;">
                            <h5>Land Development Activity</h5>
                            <div class="container p-3">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="sf_no" class="form-label">S.F. No. of the land to be
                                            developed:</label>
                                        <input type="text" class="form-control" id="sf_no" name="sf_no">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="land_benefit" class="form-label">Land to benefit (ha):</label>
                                        <input type="text" class="form-control" id="land_benefit" name="land_benefit">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Soil Type:</label>
                                        <div class="d-flex gap-3">
                                            <input type="radio" name="soil_type" value="Red Soil"> Red Soil
                                            <input type="radio" name="soil_type" value="Black Cotton"> Black Cotton
                                            <input type="radio" name="soil_type" value="Sandy Loam"> Sandy Loam
                                            <input type="radio" name="soil_type" value="Laterite"> Laterite
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Field Inspection done by:</label>
                                        <div class="d-flex gap-3">
                                            <input type="radio" name="inspection" value="Volunteer"> Volunteer
                                            <input type="radio" name="inspection" value="Project Executive"> Project
                                            Executive
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Site Approved by:</label>
                                        <div class="d-flex gap-3">
                                            <input type="radio" name="approved_by" value="Project Executive"> Project
                                            Executive
                                            <input type="radio" name="approved_by" value="Team Leader"> Team Leader
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inspection_date" class="form-label">Date of Inspection:</label>
                                        <input type="date" class="form-control" id="inspection_date"
                                            name="inspection_date">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="approval_date" class="form-label">Date of Approval:</label>
                                        <input type="date" class="form-control" id="approval_date" name="approval_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="estimateAmount" class="form-label">Total Estimate Amount</label>
                                        <input type="text" class="form-control" id="estimateAmount"
                                            name="estimateAmount">
                                    </div>
                                </div>

                                <!-- Newly added fields -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Type of work proposed</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="prosopisRemoval"
                                                name="workType[]" value="Prosopis removal">
                                            <label class="form-check-label" for="prosopisRemoval">Prosopis
                                                removal</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="redevelopment"
                                                name="workType[]" value="Redevelopment of eroded lands">
                                            <label class="form-check-label" for="redevelopment">Redevelopment of eroded
                                                lands</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="siltApplication"
                                                name="workType[]" value="Silt application">
                                            <label class="form-check-label" for="siltApplication">Silt
                                                application</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="areaBenefited" class="form-label">Area benefited by proposal works
                                            (ha)</label>
                                        <input type="text" class="form-control" id="areaBenefited" name="areaBenefited">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="otherWorks" class="form-label">Any other works proposed</label>
                                        <textarea class="form-control" id="otherWorks" name="otherWorks"
                                            rows="2"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pradanContribution" class="form-label">PRADAN Contribution</label>
                                        <input type="text" class="form-control" id="pradanContribution"
                                            name="pradanContribution">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="farmerContribution" class="form-label">Farmer Contribution</label>
                                        <input type="text" class="form-control" id="farmerContribution"
                                            name="farmerContribution">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-secondary"
                                        onclick="prevStep(3, 2)">Back</button>
                                    <button type="button" class="btn btn-primary" onclick="nextStep(3, 4)">Next</button>
                                </div>
                            </div>
                        </div>



                        <div id="step4" style="display: none;">
                            <h5>Bank Details</h5>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="account_holder" class="form-label">Name of Account Holder:</label>
                                    <input type="text" class="form-control" id="account_holder" name="account_holder">
                                </div>
                                <div class="col-md-6">
                                    <label for="account_number" class="form-label">Account Number:</label>
                                    <input type="text" class="form-control" id="account_number" name="account_number">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="bank_name" class="form-label">Name of the Bank:</label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="branch" class="form-label">Branch:</label>
                                    <input type="text" class="form-control" id="branch" name="branch">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="ifsc" class="form-label">IFSC Code:</label>
                                    <input type="text" class="form-control" id="ifsc" name="ifsc">
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



                            <div class="mb-3">
                                <label class="form-label">Files Submitted:</label>
                                <div class="d-flex flex-wrap gap-3">
                                    <div><input type="checkbox" name="files[]" value="Patta"> Patta</div>
                                    <div><input type="checkbox" name="files[]" value="ID Card"> ID Card</div>
                                    <div><input type="checkbox" name="files[]" value="FMB"> FMB</div>
                                    <div><input type="checkbox" name="files[]" value="Photo of Farmer"> Photo of Farmer
                                    </div>
                                    <div><input type="checkbox" name="files[]" value="Bank Passbook"> Bank Passbook
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(4, 3)">Back</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#pond_table').DataTable({
            "processing": true,
            "serverSide": false,
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true
        });
    });

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
    }

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