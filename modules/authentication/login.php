<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP Login - Practical Assessment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/login.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<div class="login-container">

    <!-- ================= LEFT PANEL ================= -->

    <div class="login-left">

        <div class="overlay">

            <div class="college-logo">

                <img src="../../assets/images/logos/zeal-logo.png"
                alt="Zeal Logo">

            </div>

            <h1>
                ZEAL COLLEGE OF
                <br>
                ENGINEERING &
                RESEARCH,
                <br>
                PUNE - 41
            </h1>

            <p class="subtitle">
                (An Autonomous Institute Affiliated to
                <br>
                Savitribai Phule Pune University)
            </p>

            <p class="naac">
                NAAC Accredited with A+ Grade
            </p>

            <p class="iso">
                ISO 21001:2018
            </p>

            <div class="divider">

                <div class="line"></div>

                <div class="circle">

                    <i class="fas fa-flask"></i>

                </div>

                <div class="line"></div>

            </div>

            <h2>

                Practical Assessment &
                <br>
                Laboratory Performance
                <br>
                Management System

            </h2>

            <p class="tagline">

                Smart. Transparent. Accurate.

            </p>
</div>
</div>

           
    <!-- RIGHT PANEL STARTS BELOW -->
     <!-- ================= RIGHT PANEL ================= -->


            <div class="login-right">

           <div class="user-roles">

    <div class="role active-role">
        <a href="#" onclick="changeRole('Student', this); return false;">
            <i class="fas fa-user-graduate"></i>
            <span>Students</span>
        </a>
    </div>

    <div class="role">
        <a href="#" onclick="changeRole('Faculty', this); return false;">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Faculty</span>
        </a>
    </div>

    <div class="role">
        <a href="#" onclick="changeRole('Parents', this); return false;">
            <i class="fas fa-users"></i>
            <span>Parents</span>
        </a>
    </div>

    <div class="role">
        <a href="#" onclick="changeRole('GFM', this); return false;">
            <i class="fas fa-user-tie"></i>
            <span>GFM</span>
        </a>
    </div>

    <div class="role">
        <a href="#" onclick="changeRole('HOD', this); return false;">
            <i class="fas fa-building"></i>
            <span>HOD</span>
        </a>
    </div>

    <div class="role">
        <a href="#" onclick="changeRole('Admin', this); return false;">
            <i class="fas fa-user-shield"></i>
            <span>Admin</span>
        </a>
    </div>

</div>

<!-- ================= LOGIN CARD ================= -->
<div class="login-card">

    <div class="login-header">
        <h2 id="loginTitle">Student Login</h2>
        <p id="loginSubtitle">
            Welcome Back! Please login to continue.
        </p>
    </div>

    <form action="#" method="POST">

        <input type="hidden"
               id="userRole"
               name="role"
               value="Student">

        <!-- User ID -->
        <div class="input-box">
            <label>User ID</label>

            <div class="input-field">
                <i class="fas fa-user"></i>

                <input type="text"
                       id="username"
                       placeholder="Enter User ID"
                       required>
            </div>
        </div>

        <!-- Password -->
        <div class="input-box">

            <label>Password</label>

            <div class="input-field">
                <i class="fas fa-lock"></i>

                <input type="password"
                       id="password"
                       placeholder="Enter Password"
                       required>
            </div>

        </div>

        <!-- Remember -->
        <div class="options">

            <label>
                <input type="checkbox">
                Remember Me
            </label>

            <a href="#">
                Forgot Password?
            </a>

        </div>

        <!-- Login Button -->
        <button
            type="submit"
            class="login-btn"
            id="loginButton">

            Student Login

        </button>

        <!-- Institution Login -->
        <button
            type="button"
            class="institution-btn">

            <i class="fas fa-building-columns"></i>

            Login with Institution Account

        </button>

    </form>
</div>
                    <!--end of login-card-->
                    <!--test scroll-->
                    <div style="height:600px;"></div>

               <!-- Footer -->

        <div class="footer-text">

            © 2026 Zeal College of Engineering & Research

        </div>

    </div>
</div>
</div>

<script>

function changeRole(role,element){

    // Change Title
    document.getElementById("loginTitle").innerHTML = role + " Login";

    // Change Subtitle
    document.getElementById("loginSubtitle").innerHTML =
    "Welcome Back! Please login as " + role + ".";

    // Change Button Text
    document.getElementById("loginButton").innerHTML =
    role + " Login";

    // Hidden Role
    document.getElementById("userRole").value = role;

    // Change Placeholder
    let username = document.getElementById("username");

    if(role=="Student"){
        username.placeholder="Enter Student ID";
    }
    else if(role=="Faculty"){
        username.placeholder="Enter Faculty ID";
    }
    else if(role=="Parents"){
        username.placeholder="Enter Parent ID";
    }
    else if(role=="GFM"){
        username.placeholder="Enter GFM ID";
    }
    else if(role=="HOD"){
        username.placeholder="Enter HOD ID";
    }
    else{
        username.placeholder="Enter Admin ID";
    }

    // Active Role let rolesEffect
   document.querySelectorAll(".role").forEach(roleBox => {
    roleBox.classList.remove("active-role");
});

element.closest(".role").classList.add("active-role");
}

</script>

</body>
</html>
