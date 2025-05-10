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
                <a class="navbar-brand brand-logo me-5" href="{{route('ldash')}}"><img src="{{ asset('assets/images/icons/Pradan-logo-title.png')}}" class="me-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{route('ldash')}}"><img src="{{asset('assets/images/icons/Pradan-logo-icon.png')}}"
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
                        <a class="nav-link active" href="{{route('ldash')}}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!-- Forms Collapsible Menu -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#formsMenu" aria-expanded="false"
                            aria-controls="formsMenu">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Forms</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="formsMenu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('tform1') }}">Land Form</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('tform2') }}">Pond Form</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('tform3') }}">Plant Form</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Coordinator Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tl') }}">
                            <i class="mdi mdi-check me-3"></i>
                            <span class="menu-title">Approvals</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tl1') }}">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Applications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tl_mem') }}">
                            <i class="fas fa-users-cog me-3"></i>
                            <span class="menu-title">Manage Members</span>
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
                                        <a class="nav-link active " data-bs-toggle="tab" href="#landform" role="tab"
                                            aria-selected="true">
                                            <i class="fas fa-seedling"></i><b>&nbsp;Land Form</b>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMemberModal">Add Member</button>



                                    <div class="tab-pane p-20 active" id="landform" role="tabpanel">

                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Land Form</h4>
                                                <div class="table-responsive">
                                                    <table id="land_table"
                                                        class="table table-bordered table-hover table-striped">
                                                        <thead class="text-center table-dark">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Password</th>
                                                                <th>Role</th>
                                                                <th>Mobile</th>
                                                                <th>Date of Joining</th>
                                                                <th>Location</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $s = 1; @endphp

                                                            @foreach($user as $f)
                                                            <tr>
                                                                <td>{{$s++}}</td>
                                                                <td>{{$f->name}}</td>
                                                                <td>{{$f->email}}</td>
                                                                <td>{{$f->password}}
                                                                </td>
                                                                <td>{{$f->role}}
                                                                </td>
                                                                <td>{{$f->mobile}}
                                                                </td>
                                                                <td>
                                                                    {{$f->date_of_joining}}
                                                                </td>
                                                                <td>
                                                                    {{$f->location}}
                                                                </td>
                                                                <td><button class="btn btn-warning edit-btn" value="{{$f->id}}">Edit</button>&nbsp;&nbsp;<button class="btn btn-danger del" value="{{$f->id}}">Delete</button></td>
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

    <!-- Add Member Button -->

    <!-- Modal -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="addMemberForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role" class="form-control" required>
                                <option value="">Select Role</option>
                                <option value="vol">Associate</option>
                                <option value="coor">Coordinator</option>
                                <option value="tl">Team Leader</option>
                                <option value="fin">Finance Manager</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Date of Joining</label>
                            <input type="date" name="date_of_joining" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Location</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control" accept="image/*" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="editUserForm">
                @csrf
                <input type="hidden" id="edit_id" name="id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Name</label>
                            <input type="text" id="edit_name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Email</label>
                            <input type="email" id="edit_email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Password</label>
                            <input type="text" id="edit_password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Role</label>
                            <select id="edit_role" name="role" class="form-control" required>
                                <option value="vol">Associate</option>
                                <option value="coor">Coordinator</option>
                                <option value="tl">Team Leader</option>
                                <option value="fm">Finance Manager</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Mobile</label>
                            <input type="text" id="edit_mobile" name="mobile" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Date of Joining</label>
                            <input type="text" id="edit_date_of_joining" name="date_of_joining" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Location</label>
                            <input type="text" id="edit_location" name="location" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
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
            $('.del').on('click', function() {
                var userId = $(this).val();

                if (confirm("Are you sure you want to delete this user?")) {
                    $.ajax({
                        url: '/tl/delete-user/' + userId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.message);
                            location.reload(); // refresh table
                        },
                        error: function() {
                            alert('Failed to delete user.');
                        }
                    });
                }
            });
        });
        $('#addMemberForm').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '{{ route("tl.store_user") }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    alert('Member added successfully.');
                    $('#addMemberModal').modal('hide');
                    location.reload();
                },
                error: function(err) {
                    alert('Failed to add member.');
                }
            });
        });

        $('.edit-btn').click(function() {
            var userId = $(this).val();

            $.ajax({
                url: '/tl/get_user/' + userId,
                type: 'GET',
                success: function(user) {
                    console.log(user);
                    // Fill modal inputs
                    $('#edit_id').val(user.id);
                    $('#edit_name').val(user.name);
                    $('#edit_email').val(user.email);
                    $('#edit_password').val(user.password);
                    $('#edit_role').val(user.role);
                    $('#edit_mobile').val(user.mobile);
                    $('#edit_date_of_joining').val(user.date_of_joining);
                    $('#edit_location').val(user.location);

                    // Show modal
                    $('#editUserModal').modal('show');
                },
                error: function() {
                    alert('User data could not be fetched.');
                }
            });
        });

        $('#editUserForm').on('submit', function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: '/tl/update_user',
                type: 'POST',
                data: formData,
                success: function(res) {
                    alert('User updated successfully');
                    $('#editUserModal').modal('hide');
                    location.reload(); // Refresh to reflect changes
                },
                error: function() {
                    alert('Failed to update user');
                }
            });
        });
    </script>




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