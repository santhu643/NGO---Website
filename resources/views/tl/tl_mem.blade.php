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
                        <a class="nav-link" href="{{ route('tl') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Team Leader</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tl1') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Applications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tl_mem') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Manage Members</span>
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
        $('#land_table').DataTable();
        $('#pond_table').DataTable();
        $('#plant_table').DataTable();

    });

    $(document).ready(function () {
        $('.del').on('click', function () {
            var userId = $(this).val();

            if (confirm("Are you sure you want to delete this user?")) {
                $.ajax({
                    url: '/tl/delete-user/' + userId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert(response.message);
                        location.reload(); // refresh table
                    },
                    error: function () {
                        alert('Failed to delete user.');
                    }
                });
            }
        });
    });
    $('#addMemberForm').on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '{{ route("tl.store_user") }}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                alert('Member added successfully.');
                $('#addMemberModal').modal('hide');
                location.reload();
            },
            error: function (err) {
                alert('Failed to add member.');
            }
        });
    });

    $('.edit-btn').click(function () {
        var userId = $(this).val();

        $.ajax({
            url: '/tl/get_user/' + userId,
            type: 'GET',
            success: function (user) {
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
            error: function () {
                alert('User data could not be fetched.');
            }
        });
    });

$('#editUserForm').on('submit', function (e) {
    e.preventDefault();

    var formData = $(this).serialize();

    $.ajax({
        url: '/tl/update_user',
        type: 'POST',
        data: formData,
        success: function (res) {
            alert('User updated successfully');
            $('#editUserModal').modal('hide');
            location.reload(); // Refresh to reflect changes
        },
        error: function () {
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