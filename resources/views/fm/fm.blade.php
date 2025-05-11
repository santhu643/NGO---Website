<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRADAN - Professional Assistance for Development Action</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/swal-config.js"></script>

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

        #land_table tbody tr {
            height: 80px;
            /* Adjust as needed */
            vertical-align: middle;
        }

        #land_table td,
        #land_table th {
            padding: 1rem !important;
            font-size: 15px;
        }

        #land_table .btn {
            padding: 10px 20px !important;
            font-size: 16px !important;
            /* border-radius: 0.25rem !important; */
        }

        #pond_table tbody tr {
            height: 80px;
            /* Adjust as needed */
            vertical-align: middle;
        }

        #pond_table td,
        #pond_table th {
            padding: 1rem !important;
            font-size: 15px;
        }

        #pond_table .btn {
            padding: 10px 20px !important;
            font-size: 16px !important;
            /* border-radius: 0.25rem !important; */
        }

        #plant_table tbody tr {
            height: 80px;
            /* Adjust as needed */
            vertical-align: middle;
        }

        #plant_table td,
        #plant_table th {
            padding: 1rem !important;
            font-size: 15px;
        }

        #plant_table .btn {
            padding: 10px 20px !important;
            font-size: 16px !important;
            /* border-radius: 0.25rem !important; */
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5rem;
            padding: 5px 10px;
        }

        /* General Table Styling */
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ccc;
            padding: 8px 12px;
            border-radius: 0.25rem;
            outline: none;
            font-size: 14px;
            transition: all 0.2s;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #4b49ac;
            box-shadow: 0 0 0 0.1rem rgba(75, 73, 172, 0.25);
        }

        /* Pagination Buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 6px 12px;
            margin: 0 2px;
            border-radius: 0.25rem;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #4b49ac;
            color: #fff !important;
            border-color: #4b49ac;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #134E13;
            color: white !important;
            border-color: #fff;
        }

        /* Table Info Text */
        .dataTables_wrapper .dataTables_info {
            font-size: 14px;
            margin-top: 10px;
        }

        /* Search Label */
        .dataTables_wrapper .dataTables_filter label {
            font-weight: 600;
            font-size: 14px;
        }

        /* Hide the default 'Search:' label text */
        .dataTables_wrapper .dataTables_filter label {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 0.5rem;
            font-size: 0;
            /* Hides text but keeps layout */
        }

        /* Search input styling */
        .dataTables_wrapper .dataTables_filter input {
            margin-top: 5px;
            margin-right: 3px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            padding: 8px 12px 8px 35px;
            /* left space for icon */
            border-radius: 25px;
            outline: none;
            font-size: 14px;
            transition: all 0.2s;
            width: 250px;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='gray' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.242.656a5 5 0 1 1 0-10 5 5 0 0 1 0 10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: 10px center;
            background-size: 16px 16px;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #134E13;
            box-shadow: 0 0 0 2px rgba(75, 73, 172, 0.1);
            outline: none;
        }

        /* Responsive Wrapping Fix */
        @media (max-width: 768px) {

            .dataTables_wrapper .dataTables_filter,
            .dataTables_wrapper .dataTables_paginate {
                text-align: center;
                float: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo me-5" href="{{route('vol')}}"><img src="{{ asset('assets/images/icons/Pradan-logo-title.png')}}" class="me-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{route('vol')}}"><img src="{{asset('assets/images/icons/Pradan-logo-icon.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="assets/images/faces/face15.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-user text-primary"></i> Profile </a>
                            <a class="dropdown-item" href="{{ route('login') }}">
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
                        <a class="nav-link active" href="{{route('fdash')}}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fm') }}">
                            <i class="mdi mdi-check"></i>&nbsp;
                            <span class="menu-title ms-3">Approvals</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pf_fm')}}">
                            <i class="ti-wallet menu-icon"></i>
                            <span class="menu-title">Download Excel</span>
                        </a>
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#landform" role="tab"
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
                                            <i class="fas fa-tree"></i><b>&nbsp;Plantation Form</b>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content tabcontent-border">

                                    <div class="tab-pane p-20 active show" id="landform" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Land Form</h4>
                                                <div class="table-responsive">
                                                    <table id="land_table"
                                                        class="table table-bordered table-hover table-striped text-center">
                                                        <thead class="text-center table-dark">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Application Number</th>
                                                                <th>Associate</th>
                                                                <th>Farmer Details</th>
                                                                <th>Land Details</th>
                                                                <th>Bank Details</th>
                                                                <th>Documents
                                                                </th>
                                                                <th>Action</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $s = 1; @endphp

                                                            @foreach($form1 as $f)
                                                            @php
                                                            $account = $f->bankDetail->first();
                                                            @endphp
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>#TN-00{{$f->id}}</td>
                                                                 <td><button type="button" class="btn btn-primary view-user-btn"
                                                                        value="{{$f->user_id}}"><i class="fas fa-eye"></i>View</button></td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="farmer_detail"
                                                                        value="{{$f->id}}"><i class="fas fa-eye"></i>View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="land_detail"
                                                                        value="{{$f->id}}"><i class="fas fa-eye"></i>View</button>
                                                                </td>
                                                                <td><button id="bank_detail" value="{{ $f->id }}" class="btn btn-link p-0"
                                                                        style="color: black; font-weight: bold; text-decoration: underline;">
                                                                        <b>{{ str_repeat('X', strlen($account->account_number) - 4) . substr($account->account_number, -4) }}</b>
                                                                    </button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="doc_view" value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td>
                                                                    @if($f->status == 4)
                                                                        <button type="button" class="btn btn-info update-mcode-btn" value="{{ $f->id }}">
                                                                            Update MCODE
                                                                        </button>
                                                                        &nbsp;
                                                                        <button type="button" class="btn btn-success approve-pf-btn" value="{{ $f->id }}">
                                                                            Approve PF
                                                                        </button>
                                                                    @else
                                                                        <span class="text-muted">No actions</span>
                                                                    @endif
                                                                </td>


                                                                <td>
                                                                    @switch($f->status)
                                                                    @case(4)
                                                                    <button class="btn btn-inverse-info btn-fw">Approved by
                                                                        TL/Coordinator</button>
                                                                    @break

                                                                    @case(5)
                                                                    <button class="btn btn-inverse-warning showrem"
                                                                        value="{{ $f->id }}">
                                                                        Finance Requested Change
                                                                    </button>
                                                                    @break

                                                                    @case(6)
                                                                    <button class="btn btn-inverse-success">Final
                                                                        Approved</button>
                                                                    @break

                                                                    @default
                                                                    <button class="btn btn-inverse-dark">Status
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
                                                        class="table table-bordered table-hover table-striped text-center">
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
                                                            @php
                                                            $account = $f->bankDetail->first();
                                                            @endphp
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>#TN-00{{$f->id}}</td>
                                                                 <td><button type="button" class="btn btn-primary view-user-btn"
                                                                        value="{{$f->user_id}}"><i class="fas fa-eye"></i>View</button></td>

                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="farmer_detail"
                                                                        value="{{$f->id}}"><i class="fas fa-eye"></i>View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="land_detail"
                                                                        value="{{$f->id}}"><i class="fas fa-eye"></i>View</button>
                                                                </td>
                                                                <td><button id="bank_detail" value="{{ $f->id }}" class="btn btn-link p-0"
                                                                        style="color: black; font-weight: bold; text-decoration: underline;">
                                                                        <b>{{ str_repeat('X', strlen($account->account_number) - 4) . substr($account->account_number, -4) }}</b>
                                                                    </button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="doc_view" value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td>
                                                                    @if($f->status == 4)
                                                                        <button type="button" class="btn btn-info update-mcode-btn" value="{{ $f->id }}">
                                                                            Update MCODE
                                                                        </button>
                                                                        &nbsp;
                                                                        <button type="button" class="btn btn-success approve-pf-btn" value="{{ $f->id }}">
                                                                            Approve PF
                                                                        </button>
                                                                    @else
                                                                        <span class="text-muted">No actions</span>
                                                                    @endif
                                                                </td>


                                                                <td>
                                                                    @switch($f->status)
                                                                    @case(4)
                                                                    <button class="btn btn-inverse-info">Approved by
                                                                        TL/Coordinator</button>
                                                                    @break

                                                                    @case(5)
                                                                    <button class="btn btn-inverse-warning showrem"
                                                                        value="{{ $f->id }}">
                                                                        Finance Requested Change
                                                                    </button>
                                                                    @break

                                                                    @case(6)
                                                                    <button class="btn btn-inverse-success">Final
                                                                        Approved</button>
                                                                    @break

                                                                    @default
                                                                    <button class="btn btn-inverse-dark">Status
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
                                                        class="table table-bordered table-hover table-striped text-center">
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
                                                            @php
                                                            $account = $f->bankDetail->first();
                                                            @endphp
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>#TN0{{$f->id}}</td>
                                                                 <td><button type="button" class="btn btn-primary view-user-btn"
                                                                        value="{{$f->user_id}}"><i class="fas fa-eye"></i>View</button></td>

                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="farmer_detail"
                                                                        value="{{$f->id}}"><i class="fas fa-eye"></i>View</button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="land_detail"
                                                                        value="{{$f->id}}"><i class="fas fa-eye"></i>View</button>
                                                                </td>
                                                                <td><button id="bank_detail" value="{{ $f->id }}" class="btn btn-link p-0"
                                                                        style="color: black; font-weight: bold; text-decoration: underline;">
                                                                        <b>{{ str_repeat('X', strlen($account->account_number) - 4) . substr($account->account_number, -4) }}</b>
                                                                    </button>
                                                                </td>
                                                                <td><button type="button" class="btn btn-primary"
                                                                        id="doc_view" value="{{$f->id}}">View</button>
                                                                </td>
                                                                <td>
                                                                    @if($f->status == 4)
                                                                        <button type="button" class="btn btn-info update-mcode-btn" value="{{ $f->id }}">
                                                                            Update MCODE
                                                                        </button>
                                                                        &nbsp;
                                                                        <button type="button" class="btn btn-success approve-pf-btn" value="{{ $f->id }}">
                                                                            Approve PF
                                                                        </button>
                                                                    @else
                                                                        <span class="text-muted">No actions</span>
                                                                    @endif
                                                                </td>


                                                                <td>
                                                                    @switch($f->status)
                                                                    @case(4)
                                                                    <button class="btn btn-inverse-info">Approved by
                                                                        TL/Coordinator</button>
                                                                    @break

                                                                    @case(5)
                                                                    <button class="btn btn-inverse-warning showrem"
                                                                        value="{{ $f->id }}">
                                                                        Finance Requested Change
                                                                    </button>
                                                                    @break

                                                                    @case(6)
                                                                    <button class="btn btn-inverse-success">Final
                                                                        Approved</button>
                                                                    @break

                                                                    @default
                                                                    <button class="btn btn-inverse-dark">Status
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
     <div class="modal fade" id="userDetailModal" tabindex="-1" role="dialog" aria-labelledby="userDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Name:</strong> <span id="user-name"></span></p>
        <p><strong>Mobile:</strong> <span id="user-mobile"></span></p>
      </div>
    </div>
  </div>
</div>
    <!--  Farmer Detail Modal -->
    <div class="modal fade" id="farmerdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 90%; width: 1000px;">
            <div class="modal-content" style="border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                <div class="modal-header" style="border-bottom: 2px solid #dee2e6; background-color:#134E13;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Farmer Details</h5>
                    <button type="button" class="btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Row 1 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Farmer Name:</strong> <span id="f_name"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Father/Spouse:</strong> <span id="f_spouse"></span>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Mobile:</strong> <span id="f_mobile"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Gender:</strong> <span id="f_gender"></span>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Id_Card:</strong> <span id="f_card"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Members:</strong> <span id="f_member"></span>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Id_Number:</strong> <span id="f_number"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Hamlet:</strong> <span id="f_hamlet"></span>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Panchayat:</strong> <span id="f_panchayat"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Block:</strong> <span id="f_block"></span>
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Type of Household:</strong> <span id="f_household_type"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Special Category:</strong> <span id="f_special_category"></span>
                        </div>
                    </div>

                    <!-- Row 7 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Caste:</strong> <span id="f_caste"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Occupation:</strong> <span id="f_occupation"></span>
                        </div>
                    </div>

                    <!-- Row 8 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Type of House:</strong> <span id="f_house_type"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Drinking Water Source:</strong> <span id="f_drinking_water"></span>
                        </div>
                    </div>

                    <!-- Row 9 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Potability:</strong> <span id="f_potability"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Domestic Water Source:</strong> <span id="f_domestic_water"></span>
                        </div>
                    </div>

                    <!-- Row 10 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Toilet Availability:</strong> <span id="f_toilet_availability"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Toilet Condition:</strong> <span id="f_toilet_condition"></span>
                        </div>
                    </div>

                    <!-- Row 11 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>House Owner:</strong> <span id="f_house_owner"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Household Education:</strong> <span id="f_household_education"></span>
                        </div>
                    </div>

                    <!-- Row 12 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Latitude:</strong> <span id="f_latitude"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Longitude:</strong> <span id="f_longitude"></span>
                        </div>
                    </div>

                    <!-- Row 13 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>MCode:</strong> <span id="f_mcode"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 2px solid #dee2e6;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Land Detail Modal -->
    <div class="modal fade" id="farmerdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 90%; width: 1000px;">
            <div class="modal-content" style="border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                <div class="modal-header" style="border-bottom: 2px solid #dee2e6; background-color:#134E13;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Farmer Details</h5>
                    <button type="button" class="btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Row 1 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Farmer Name:</strong> <span id="f_name"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Father/Spouse:</strong> <span id="f_spouse"></span>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Mobile:</strong> <span id="f_mobile"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Gender:</strong> <span id="f_gender"></span>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Id_Card:</strong> <span id="f_card"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Members:</strong> <span id="f_member"></span>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Id_Number:</strong> <span id="f_number"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Hamlet:</strong> <span id="f_hamlet"></span>
                        </div>
                    </div>

                    <!-- Row 5 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Panchayat:</strong> <span id="f_panchayat"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Block:</strong> <span id="f_block"></span>
                        </div>
                    </div>

                    <!-- Row 6 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Type of Household:</strong> <span id="f_household_type"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Special Category:</strong> <span id="f_special_category"></span>
                        </div>
                    </div>

                    <!-- Row 7 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Caste:</strong> <span id="f_caste"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Occupation:</strong> <span id="f_occupation"></span>
                        </div>
                    </div>

                    <!-- Row 8 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Type of House:</strong> <span id="f_house_type"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Drinking Water Source:</strong> <span id="f_drinking_water"></span>
                        </div>
                    </div>

                    <!-- Row 9 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Potability:</strong> <span id="f_potability"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Domestic Water Source:</strong> <span id="f_domestic_water"></span>
                        </div>
                    </div>

                    <!-- Row 10 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Toilet Availability:</strong> <span id="f_toilet_availability"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Toilet Condition:</strong> <span id="f_toilet_condition"></span>
                        </div>
                    </div>

                    <!-- Row 11 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>House Owner:</strong> <span id="f_house_owner"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Household Education:</strong> <span id="f_household_education"></span>
                        </div>
                    </div>

                    <!-- Row 12 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Latitude:</strong> <span id="f_latitude"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Longitude:</strong> <span id="f_longitude"></span>
                        </div>
                    </div>

                    <!-- Row 13 -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>MCode:</strong> <span id="f_mcode"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 2px solid #dee2e6;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Plantation Detail Modal -->
    <div class="modal fade" id="plantdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 90%; width: 1000px;">
            <div class="modal-content" style="border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                <div class="modal-header" style="border-bottom: 2px solid #dee2e6; background-color:#134E13;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Plantation Details</h5>
                    <button type="button" class="btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Grouped Row Blocks -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Ownership:</strong> <span id="plant_ownership"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Well Irrigation:</strong> <span id="plant_well_irrigation"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Area Irrigated:</strong> <span id="plant_area_irrigated"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Irrigated Lands:</strong> <span id="plant_irrigated_lands"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Patta No:</strong> <span id="plant_patta"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Total Area:</strong> <span id="plant_total_area"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Revenue Village:</strong> <span id="plant_revenue"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Crop Season:</strong> <span id="plant_crop_season"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Livestock:</strong> <span id="plant_livestock"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Plantation Type:</strong> <span id="plant_type"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>SF No:</strong> <span id="plant_sf_no"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Soil Type:</strong> <span id="plant_soil_type"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Land to Benefit:</strong> <span id="plant_land_benefit"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Field Inspection:</strong> <span id="plant_field_inspection"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Site Approval:</strong> <span id="plant_site_approval"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Date of Inspection:</strong> <span id="plant_date_of_inspection"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Date of Approval:</strong> <span id="plant_date_of_approval"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Type of Work:</strong> <span id="plant_type_of_work"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Area Benefit:</strong> <span id="plant_area_benefit"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Other Works:</strong> <span id="plant_other_works"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Pradan Contribution:</strong> <span id="plant_pradan_contribution"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Farmer Contribution:</strong> <span id="plant_farmer_contribution"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Total Amount:</strong> <span id="plant_total_amount"></span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer" style="border-top: 2px solid #dee2e6;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pond Detail Modal -->
    <div class="modal fade" id="ponddet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 90%; width: 1000px;">
            <div class="modal-content" style="border-radius: 8px; box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);">
                <div class="modal-header" style="border-bottom: 2px solid #dee2e6; background-color: #134E13;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Pond Details</h5>
                    <button type="button" class="btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Rows for Pond Details -->
                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Land Owner:</strong> <span id="p_owner"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Patta No:</strong> <span id="p_patta"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Total Area:</strong> <span id="p_tarea"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Irrigated Lands:</strong> <span id="p_irrigated_lands"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Revenue:</strong> <span id="p_revenue"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Livestock:</strong> <span id="p_livestock"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Crop Season:</strong> <span id="p_crop_season"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Well Irrigation:</strong> <span id="p_well_irrigation"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>SF No:</strong> <span id="p_sf"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Soil Type:</strong> <span id="p_soil"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Land to Serve:</strong> <span id="p_land"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Field Inspection:</strong> <span id="p_field"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Site Approval:</strong> <span id="p_site"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Type of Work:</strong> <span id="p_type_of_work"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Date of Inspection:</strong> <span id="p_doi"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Date of Approval:</strong> <span id="p_doa"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Length:</strong> <span id="p_len"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Depth:</strong> <span id="p_dep"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Breadth:</strong> <span id="p_breadth"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Volume:</strong> <span id="p_vol"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Pradan Contribution:</strong> <span id="p_pcont"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Farmer Contribution:</strong> <span id="p_fcont"></span>
                        </div>
                    </div>

                    <div class="row border p-2 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-md-6 mb-3">
                            <strong>Total:</strong> <span id="total"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 2px solid #dee2e6;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bank Detail Modal -->
    <div class="modal fade" id="bankdet_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 600px;">
            <div class="modal-content" style="border-radius: 8px; box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);">
                <div class="modal-header" style="background-color: #134E13; border-bottom: 2px solid #dee2e6;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Bank Details</h5>
                    <button type="button" class="btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row border p-3 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-12">
                            <strong>Holder Name:</strong> <span id="b_hname"></span>
                        </div>
                    </div>
                    <div class="row border p-3 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-12">
                            <strong>Account Number:</strong> <span id="b_no"></span>
                        </div>
                    </div>
                    <div class="row border p-3 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-12">
                            <strong>Bank Name:</strong> <span id="b_name"></span>
                        </div>
                    </div>
                    <div class="row border p-3 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-12">
                            <strong>Branch:</strong> <span id="b_branch"></span>
                        </div>
                    </div>
                    <div class="row border p-3 mb-3" style="border-radius: 8px; border: 1px solid #ddd; margin:2px;">
                        <div class="col-12">
                            <strong>IFSC Code:</strong> <span id="b_ifsc"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 2px solid #dee2e6;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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
                        <textarea class="form-control" name="remarks" id="remarks" rows="4"
                            placeholder="Enter detailed remarks..." required></textarea>
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
    <div class="modal fade" id="fileViewerModal" tabindex="-1" aria-labelledby="fileViewerModalLabel"
        aria-hidden="true">
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
    <!-- Post Funding Land -->
    <div class="modal fade" id="mcode_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="mcode_form">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update MCODE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="mcode_form_id" name="mcode_form_id">
                        <div class="mb-3">
                            <label for="mcode" class="form-label">Enter MCODE</label>
                            <input type="number" class="form-control" id="mcode" name="mcode" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('#land_table').DataTable({
                lengthChange: false
            });
            $('#pond_table').DataTable({
                lengthChange: false
            });
            $('#plant_table').DataTable({
                lengthChange: false
            });
            $('#land_table_filter input[type="search"]').attr('placeholder', 'Search...');
            $('#pond_table_filter input[type="search"]').attr('placeholder', 'Search...');
            $('#plant_table_filter input[type="search"]').attr('placeholder', 'Search...');

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
                        Swal.fire({
                            title: "Error!",
                            text: "Something went wrong",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
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

        /*  $(document).on("click", ".coor_appr1", function(e) {
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
         }); */



        $(document).on("click", ".fin_update", function(e) {
            e.preventDefault();
            var form_id = $(this).val();
            $("#rem_form_id").val(form_id);
            $("#rem_modal").modal("show");
        });

        $(document).on("submit", "#remarks_form", function(e) {
            e.preventDefault();
            var form = new FormData(this);
            console.log(form);
            $.ajax({
                type: "POST",
                url: "/fm/rem",
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            title: "Success!",
                            text: "Request for change updated",
                            icon: "success",
                            confirmButtonText: "OK"
                        });
                        $('#rem_modal').modal('hide');
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: "Something went wrong",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
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
                url: "/getfm-remarks/" + formId,
                success: function(response) {
                    if (response.success == 200) {
                        $('#view_remark_text').text(response.remarks); // Set the remarks
                        $('#view_rem_modal').modal('show'); // Show modal
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: "Remarks not found",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    Swal.fire({
                        title: "Error!",
                        text: "Server error",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            });
        });

        $(document).on("click", "#doc_view", function(e) {
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

        $(document).on("click", ".doc-file-btn", function() {
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
                success: function(response) {
                    if (response.file_url) {
                        $('#docPreview').attr('src', response.file_url);
                        $('#docDownload').attr('href', response.file_url);
                        $('#fileViewerModal').modal('show');
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: "File not found",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: "Error!",
                        text: "Something went wrong",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            });
        });

        $(document).on("click", ".update-mcode-btn", function(e) {
            e.preventDefault();
            var form_id = $(this).val();
            $("#mcode_form_id").val(form_id);
            
            // Check if MCODE already exists
            $.ajax({
                url: "/check-mcode",
                type: "GET",
                data: {
                    form_id: form_id
                },
                success: function(response) {
                    if (response.status == 200 && response.mcode) {
                        // If MCODE exists, show it and disable input
                        $("#mcode").val(response.mcode).prop('disabled', true);
                        $("#mcode_form button[type='submit']").hide();
                        $("#mcode_modal .modal-footer").append('<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>');
                    } else {
                        // If no MCODE, enable input for new entry
                        $("#mcode").val('').prop('disabled', false);
                        $("#mcode_form button[type='submit']").show();
                    }
                    $("#mcode_modal").modal("show");
                },
                error: function() {
                    Swal.fire({
                        title: "Error!",
                        text: "Failed to check MCODE status",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            });
        });

        $(document).on("submit", "#mcode_form", function(e) {
            e.preventDefault();
            var form_id = $("#mcode_form_id").val();
            var mcode = $("#mcode").val();
            
            $.ajax({
                url: "/update-mcode",
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    form_id: form_id,
                    mcode: mcode
                },
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            title: "Success!",
                            text: "MCODE updated successfully!",
                            icon: "success",
                            confirmButtonText: "OK"
                        });
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: response.message || "Error updating MCODE",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: "Error!",
                        text: "An error occurred. Please try again.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                    console.error("Error:", error);
                }
            });
        });

        $(document).on("click", ".approve-pf-btn", function(e) {
            e.preventDefault();
            var form_id = $(this).val();
            var form_type = $(this).closest('table').attr('id').replace('_table', '');
            
            Swal.fire({
                title: "Confirm Approval",
                text: "Are you sure you want to approve PF?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, approve it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/fin-approve",
                        type: "POST",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            form_id: form_id,
                            form_type: form_type
                        },
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire({
                                    title: "Success!",
                                    text: "PF approved successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                });
                            } else {
                                Swal.fire({
                                    title: "Error!",
                                    text: response.message || "Error approving PF",
                                    icon: "error",
                                    confirmButtonText: "OK"
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: "Error!",
                                text: "An error occurred. Please try again.",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                            console.error("Error:", error);
                        }
                    });
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

    <script>
        $(document).ready(function() {
            // MCODE Update button click
            $('.update-mcode').on('click', function() {
                const formId = $(this).data('form-id');
                $('#mcode_form_id').val(formId);
                $('#mcode_modal').modal('show');
            });

            // MCODE form submission
            $('#mcode_form').on('submit', function(e) {
                e.preventDefault();
                const form = new FormData(this);
                
                $.ajax({
                    type: "POST",
                    url: "/update-mcode",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        form_id: form.get('mcode_form_id'),
                        mcode: form.get('mcode')
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            alert("MCODE updated successfully!");
                            $('#mcode_modal').modal('hide');
                            $(`#mcode_btn_${form.get('mcode_form_id')}`).prop('disabled', true).css('opacity', '0.6');
                        } else {
                            alert(response.message || "Error updating MCODE");
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred. Please try again.");
                    }
                });
            });

            // PF Approval button click
            $('.approve-pf').on('click', function() {
                const formId = $(this).data('form-id');
                const formType = $(this).data('form-type');
                
                if (confirm("Are you sure you want to approve this PF?")) {
                    $.ajax({
                        type: "POST",
                        url: "/fin-approve",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            form_id: formId,
                            form_type: formType
                        },
                        success: function(response) {
                            if (response.status == 200) {
                                alert("PF approved successfully!");
                                location.reload();
                            } else {
                                alert(response.message || "Error approving PF");
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred. Please try again.");
                        }
                    });
                }
            });
        });
                $(document).on('click', '.view-user-btn', function () {
    var userId = $(this).val();

    $.ajax({
        url: '/user-details/' + userId,
        type: 'GET',
        success: function (data) {
            $('#user-name').text(data.name);
            $('#user-mobile').text(data.mobile);
            $('#userDetailModal').modal('show');
        },
        error: function () {
            Swal.fire({
                title: "Error!",
                text: "Failed to fetch user details",
                icon: "error",
                confirmButtonText: "OK"
            });
        }
    });
});
    </script>

</body>

</html>