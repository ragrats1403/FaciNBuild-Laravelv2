<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../css/body.css">    
    <link rel="stylesheet" type="text/css" href="../css/admin/adminreservation.css" />
</head>

<header>
    <div class="imgctrl">

    </div>
    <div class="navplace">
        <p>Hello, Administrator</p>
      <nav class="gnav">
        </nav>
    </div>
</header>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="../../../images/Brown_logo_faci.png" />
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="navdiv">
            <ul class="nav_list">
                <li>
                    <a href="/admin/adminaccounts">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Account</span>
                    </a>
                    <span class="tooltip">Account</span>
                </li>
                <li>
                    <a href="/admin/adminjobrequests">
                        <i class='bx bx-clipboard'></i>
                        <span class="link_name">Job Request</span>
                    </a>
                    <span class="tooltip">Job Request</span>
                </li>
                <li>
                    <a href="/admin/adminequipments">
                        <i class='bx bx-wrench'></i>
                        <span class="link_name">Equipment</span>
                    </a>
                    <span class="tooltip">Equipment</span>
                </li>
                <li>
                    <a href="/admin/adminreservation">
                        <i class='bx bx-check-square'></i>
                        <span class="link_name">Reservation</span>
                    </a>
                    <span class="tooltip">Reservation</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                    <img src="../../../images/ico/profileicon.png" alt="" style = "height: 45px; width:45px; object-fit:cover; border-radius:12px;" />
                        <div class="name_role">
                            <div class="name">Admin</div>
                            <div class="role">System Administrator</div>
                        </div>
                    </div>
                    <a href="../../../logout.php">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
    <!--<div class="h-100 d-flex justify-content-center align-items-center">
        <div class="container-fluid">
            <div class="container">

            </div>
        </div>
    </div>-->

    <!-- Data Table Start-->
    <!-- <h1 class="text-center">Faci N Build Test table control</h1>-->
    <!-- <div class="table1">-->

    <div class="table1">

<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 " style="background-color: #fff4c4; padding-left:50px; padding-top:50px; padding-right:50px;">

                    <div class="row justify-content-center" style="padding-bottom:10px;">
                        <h1 class="text-center text-uppercase fw-bold" style="padding-bottom:10px;">Major Job Request form</h1>
                        <div class="col-md-6 ">
                            <input type="name" class="form-control input-sm col-xs-1" id="Namemajorjr" placeholder="Job request no.">
                        </div>
                        <div class="col-md-6 ">
                            <input type="name" class="form-control input-sm col-xs-1" id="numbermajorjr" placeholder="Requisition no.">
                        </div>
                    </div>
                    <div class="row justify-content-center" style="padding-bottom:13px;">
                        <div class="col-md-6 ">
                            <input type="name" class="form-control input-sm col-xs-1" id="departmentmajorjr" placeholder="Department">
                        </div>
                        <div class="col-md-6 ">
                            <input type="name" class="form-control input-sm col-xs-1" id="datemajorjr" placeholder="Date">
                        </div>
                    </div>
                    <div class="justify-content-center" style="padding-bottom:10px;">
                        <h5 class="text-uppercase fw-bold" style="padding-bottom:10px;" >A. Requisition(To be filled up by the requesting party)</h5>
                        <div class="col-md-2 ">
                            <input type="name" class="form-control input-sm col-xs-1" id="departmentmajorjr" placeholder="Quantity">
                        </div>
                    </div>
                    <div class="row justify-content-center" style="padding-bottom:10px;">
                        <h5 class="text-uppercase fw-bold" style="padding-bottom:10px;" >ITEM WITH COMPLETE DESCRIPTION</h5>
                        <div class="col-md-10" >
                            <textarea placeholder="Description" class="form-control" rows="2" id="description"></textarea>
                        </div>
                        <div class="col-md-2 ">
                        <button class="text-secondary btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false" style="background-color: #fff;">Dropdown button </button>
                        </div>
                    </div>

                    <div class="justify-content-center" style="padding-bottom:10px;">
                        <div class="col-md-12" >
                            <textarea placeholder="Purpose" class="form-control" rows="2" id="purpose"></textarea>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center" style="padding-bottom:10px;">
                        <div class="col-md-6" >
                            <label class="fw-bold" for="renderedby">Requested by</label>
                            <input type="name" class="form-control input-sm col-xs-1" id="departmentmajorjr">
                        </div>
                        <div class="col-md-6" >
                            <label class="fw-bold" for="date">Approved by</label>
                            <input type="date" class="form-control input-sm col-xs-1" id="departmentmajorjr">
                        </div>
                    </div>
                    <div class=" row justify-content-center" style="padding-bottom:10px;">
                        <div class="col-md-6" style="padding-bottom:10px;" >
                            <label class="fw-bold" for="renderedby">Department Head</label>
                            <input type="name" class="form-control input-sm col-xs-1" id="departmentmajorjr">
                        </div>
                        <div class="col-md-6" >
                            <label class="fw-bold" for="date">Noted By</label>
                            <input type="name" class="form-control input-sm col-xs-1" id="departmentmajorjr">
                        </div>
                        <div class="col-md-7" style="background-color: #fff4c4;">
                        </div>
                        <label class="fw-bold" style="padding-left:825px;" for="renderedby">PROPERTY CUSTODIAN</label>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Data Table End-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Script Process Start-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
       $('#datatable').DataTable({
            'serverSide': true,
            'processing': true,
            'paging': true,
            'order': [],
            'ajax': {
                'url': 'fetch_data.php',
                'type': 'post',

            },
            'fnCreatedRow': function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData[0]);
            },
            'columnDefs': [{
                'target': [0, 5],
                'orderable': false,
            }],
        scrollY: 200,
        scrollCollapse: true,
        paging: false 

        });
    </script>
    <script type="text/javascript">
        //add button control
        $(document).on('submit', '#saveUserForm', function(event) {
            event.preventDefault();
            var name = $('#inputName').val();
            var username = $('#inputUsername').val();
            var password = $('#inputPassword').val();
            var rolelevel = $('#inputRolelevel').val();
            var roleid = $('#inputRoleID').val();
            if (username != '' && password != '' && rolelevel != '' && roleid != '') {
                $.ajax({
                    url: "add_user.php",
                    data: {
                        name: name,
                        username: username,
                        password: password,
                        rolelevel: rolelevel,
                        roleid: roleid
                    },
                    type: 'POST',
                    success: function(data) {
                        var json = JSON.parse(data);
                        status = json.status;
                        if (status = 'success') {
                            table = $('#datatable').DataTable();
                            table.draw();
                            alert('Successfully Added User!');
                            $('#inputName').val('');
                            $('#inputUsername').val('');
                            $('#inputPassword').val('');
                            $('#inputRolelevel').val('');
                            $('#inputRoleID').val('');
                            $('#addUserModal').modal('hide');
                        }
                    }
                });
            } else {
                alert("Please fill all the Required fields");
            }
        });
        //delete user button control
        $(document).on('click', '.btnDelete', function(event) {
            var table = $('#datatable').DataTable();
            event.preventDefault();
            var id = $(this).data('id');
            if (confirm('Are you sure to delete this user?')) {


                $.ajax({
                    url: "delete_user.php",
                    data: {
                        id: id
                    },
                    type: 'POST',
                    success: function(data) {
                        var json = JSON.parse(data);
                        status = json.status;

                        if (status == 'success') {
                            $('#' + id).closest('tr').remove();

                        } else {
                            alart('failed');
                            return;
                        }
                    }
                });
            } else {
                return null;
            }
        });
        //edit button control 
        $(document).on('click', '.editBtn', function(event) {
            var id = $(this).data('id');
            var trid = $(this).closest('tr').attr('id');
            $.ajax({
                url: "get_single_user.php",
                data: {
                    id: id
                },
                type: 'POST',
                success: function(data) {
                    var json = JSON.parse(data);
                    $('#id').val(json.id);
                    $('#trid').val(trid);
                    $('#_inputName').val(json.name)
                    $('#_inputUsername').val(json.username);
                    $('#_inputPassword').val(json.password);
                    $('#_inputRoleLevel').val(json.rolelevel);
                    $('#_inputRoleID').val(json.roleid);
                    $('#editUserModal').modal('show');
                }
            });
        });

        $(document).on('submit', '#updateUserForm', function() {
            var id = $('#id').val();
            var trid = $('#trid').val();
            var name = $('#_inputName').val();
            var username = $('#_inputUsername').val();
            var password = $('#_inputPassword').val();
            var rolelevel = $('#_inputRoleLevel').val();
            var roleid = $('#_inputRoleID').val();
            $.ajax({
                url: "update_user.php",
                data: {
                    id: id,
                    name: name,
                    username: username,
                    password: password,
                    rolelevel: rolelevel,
                    roleid: roleid
                },
                type: 'POST',
                success: function(data) {
                    var json = JSON.parse(data);
                    status = json.status;
                    if (status == 'success') {
                        alert('Updated Successfully!');
                        table = $('#datatable').DataTable();
                        var button = '<a href="javascript:void();" class="btn btn-sm btn-info" data-id="' + id + '" >Edit</a> <a href="javascript:void();" class="btn btn-sm btn-danger" data-id="' + id + '" >Delete</a>';
                        var row = table.row("[id='" + trid + "']");
                        row.row("[id='" + trid + "']").data([id, name, username, password, rolelevel, roleid, button]);
                        $('#editUserModal').modal('hide');
                    } else {
                        alert('failed');
                    }
                }
            });
        });
    </script>
    <!-- Script Process End-->
    <!-- add user modal-->
    <!-- Modal Popup -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="saveUserForm" action="javascript:void();" method="POST">
                        <div class="modal-body">
                            <!-- Form Controls-->

                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="inputName" class="form-control" id="inputName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="inputUsername" class="form-control" id="inputUsername">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRolelevel" class="col-sm-2 col-form-label">RoleLevel</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRolelevel" name="inputRolelevel">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRoleID" class="col-sm-2 col-form-label">RoleID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputRoleID" name="inputRoleID">
                                </div>
                            </div>

                            <!-- Form Controls End-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add user modal end-->
    <!-- edit user modal-->
    <!-- Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateUserForm" action="javascript:void();" method="POST">
                        <div class="modal-body">
                            <input type="hidden" id="id" name="id" value="">
                            <input type="hidden" id="trid" name="trid" value="">
                            <!-- Form Controls-->
                            <div class="mb-3 row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="_inputName" class="form-control" id="_inputName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="_inputUsername" class="form-control" id="_inputUsername">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="_inputPassword" name="_inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRoleLevel" class="col-sm-2 col-form-label">RoleLevel</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="_inputRoleLevel" name="_inputRoleLevel">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputRoleID" class="col-sm-2 col-form-label">RoleID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="_inputRoleID" name="_inputRoleID">
                                </div>
                            </div>
                            <!-- Form Controls End-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- edit user modalPopup end-->




</body>

</html>