<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="assets/images/favicons/logo.png" alt="pinal logo" class="img-fluid"  >
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="dashboard" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span
                            data-key="t-dashboard">Dashboard</span> </a>
                </li>

                <li class="nav-item">
                    <a href="users-query" class="nav-link menu-link"> <i class="bi bi-chat-square-text"></i>
                        <span data-key="t-users-list">Users Query</span>
                        <?php
                        $mail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS `unread` FROM `contact_form` WHERE `status` = 0"));
                        if ($mail['unread'] > 0) { ?>
                            <span class="badge badge-pill bg-danger-subtle text-danger " data-key="t-hot">
                                <?php echo $mail['unread'] ?>
                            </span>
                        <?php }

                        ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="archives" class="nav-link menu-link"> <i class="bi bi-archive"></i> </i>
                        <span data-key="t-users-list">Archives</span> </a>
                </li>

                <li class="nav-item">
                    <a href="projects" class="nav-link menu-link"><i class="bi bi-boxes"></i> <span
                            data-key="t-reviews-ratings">Projects</span></a>
                </li>

                <li class="nav-item">
                    <a href="products" class="nav-link menu-link"><i class="bi bi-star"></i> <span
                            data-key="t-reviews-ratings">Products</span></a>
                </li>
                <li class="nav-item">
                    <a href="blogs" class="nav-link menu-link"><i class="bi bi-newspaper"></i> <span
                            data-key="t-reviews-ratings">Blogs</span></a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>