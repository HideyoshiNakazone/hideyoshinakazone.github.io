<div class="header">
    <div class="principal">
        <div class="logo">
            <a href=""><img src="./img/logohideyoshi-white.png" alt=""></a>
        </div>
        <div class="separator"></div>
        <div class="nav-links">
            <ul class="link-container">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/index.html">Work</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/index.html">About</a></li>
            </ul>
            <div class="profile">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="nav-user">
            <?php
            if(isset($_SESSION['user_id'])) {
                echo '
                    <ul class="link-container">
                        <li><i class="icon-box far fa-user"></i><a href="#">My Profile</a></li>
                        <li><i class="icon-box far fa-edit"></i><a href="#">Edit Profile</a></li>
                        <li><i class="icon-box fas fa-inbox"></i><a href="#">Inbox</a></li>
                        <li><i class="icon-box fas fa-cogs"></i><a href="#">Settings</a></li>
                        <li><i class="icon-box fas fa-question-circle"></i><a href="#">Help</a></li>
                        <li><i class="icon-box fas fa-sign-out-alt"></i><a href="/logout.php">Logout</a></li>
                    </ul>';
            } else {
                echo '
                    <ul class="link-container user-setup">
                        <li><i class="icon-box fas fa-sign-in-alt"></i><a href="/login.php">Login</a></li>
                        <li><i class="icon-box fas fa-user-plus"></i><a href="/signup.php">Sign Up</a></li>
                    </ul>
                ';
            }
            
            ?>
        </div>
        <div class="user">
            <div class="profile">
                <i class="fas fa-user"></i>
            </div>
            <div class="user-menu">
                <h3>John Dow</h3>
                <?php
                    if(isset($_SESSION['user_id'])) {
                        echo '
                            <ul class="logged-in">
                                <li><i class="icon-box far fa-user"></i><a href="#">My Profile</a></li>
                                <li><i class="icon-box far fa-edit"></i><a href="#">Edit Profile</a></li>
                                <li><i class="icon-box fas fa-inbox"></i><a href="#">Inbox</a></li>
                                <li><i class="icon-box fas fa-cogs"></i><a href="#">Settings</a></li>
                                <li><i class="icon-box fas fa-question-circle"></i><a href="#">Help</a></li>
                                <li><i class="icon-box fas fa-sign-out-alt"></i><a href="/logout.php">Logout</a></li>
                            </ul>
                        ';
                    } else {
                        echo '
                            <ul class="logged-out">
                                <li><i class="fas fa-sign-in-alt"></i><a href="/login.php">Login</a></li>
                                <li><i class="fas fa-user-plus"></i><a href="/signup.php">Sign Up</a></li>
                            </ul>
                        ';
                    }
                ?>
            </div>
        </div>
        <div class="menu">
            <div class="burger">
            </div>
        </div>
    </div>
    <script src="./js/header.js"></script>
</div>