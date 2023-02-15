<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../../css/admin/adminaccount.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../../../css/body.css">
</head>

<header>
    <div class= "imgctrl">
        
    </div>
    <div class="navplace">
        <p>Hello, User</p>
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
        <div class ="navdiv">
            <ul class="nav_list">
                <li>
                    <a href="/user/usernotifications">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Notifications</span>
                    </a>
                    <span class="tooltip">Notifications</span>
                </li>
                <li>
                    <a href="/user/userdashboard">
                        <i class='bx bx-clipboard'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="/user/userreservation">
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
                            <div class="name">User</div>
                            <div class="role">Requesting Department</div>
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

</body>
</html>