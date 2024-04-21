<?php
include ("includes/connection.php");
include ("includes/function.php");

$id = "";
$heading = '';
$cover = '';
$desc = '';


if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `archieve` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $cover = $row['cover'];
        $heading = $row['title'];
        $desc = $row['long_desc'];
    }
}


if (isset($_POST["addArchieve"]) && $_POST["addArchieve"] != '') {

    $cover = get_safe_value($conn, rand(11, 999) . $_FILES['cover']['name']);
    $heading = get_safe_value($conn, $_POST['heading']);
    $desc = get_safe_value($conn, $_POST['desc']);

    move_uploaded_file($_FILES["cover"]["tmp_name"], "../assets/images/archives/" . $cover);
    $sql = mysqli_query($conn, "INSERT INTO `archieve`(`title`, `long_desc`, `cover`) VALUES ('$heading','$desc','$cover')");

    if ($sql) {

        header("Location: archives");
        exit();
    }

}


if (isset($_POST["UpdateArchives"]) && $_POST["UpdateArchives"] != '') {
    $id = get_safe_value($conn, $_POST['id']);
    $cover = get_safe_value($conn, rand(11, 999) . $_FILES['cover']['name']);
    $heading = get_safe_value($conn, $_POST['heading']);
    $desc = get_safe_value($conn, $_POST['desc']);
    if ($_FILES['cover']['name'] != '') {

        move_uploaded_file($_FILES["cover"]["tmp_name"], "../assets/images/archives/" . $cover);

        $sql = mysqli_query($conn, "UPDATE `archieve` SET 
         `title`='$heading',
         `long_desc`='$desc',
         `cover`='$cover' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: archives");
            exit;
        }
    } else {

        $sql = mysqli_query($conn, "UPDATE `archieve` SET 
         `title`='$heading',
         `long_desc`='$desc' WHERE  `id` = '$id'");

        if ($sql) {
            header("Location: archives");
            exit;
        }
    }


}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <?php include ('includes/head.php') ?>
    <title>Add Archive | Pinal & Co.</title>

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include ("includes/top.php"); ?>
        <!-- ========== App Menu ========== -->
        <?php include ("includes/sidebar.php") ?>
        <!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add Archive</h4>

                                <div>
                                    <a href="archives" class="btn btn-warning" id="addproduct-btn"><i
                                            class="bi bi-arrow-left"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form autocomplete="off" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm">
                                                    <div
                                                        class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                        <i class="bi bi-box-seam"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-1">Review Information</h5>
                                                <p class="text-muted mb-0">Fill all information below.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Cover Image</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="file" class="form-control" name="cover" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                            <?php
                                            if ($cover != '') {
                                                ?>
                                                <img src="../assets/images/archives/<?php echo $cover; ?>" class="mt-2"
                                                    alt="" width="100px">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Archive Title</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="heading" value="<?php echo $heading ?>"
                                                placeholder="Enter project title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="desc" placeholder="Write a description..."
                                                class="form-control" required><?php echo $desc ?></textarea>
                                        </div>
                                        <div class="text-end mb-3">
                                            <?php
                                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                                ?>
                                                <input type="submit" name="UpdateArchives" class="btn btn-success w-sm"
                                                    value="Update">
                                            <?php } else { ?>
                                                <input type="submit" name="addArchieve" class="btn btn-success w-sm"
                                                    value="Submit">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- End Page-content -->

                <?php include ('includes/footer.php') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
    </div>


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- ckeditor -->
    <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- dropzone js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>
    <!-- create-product -->
    <script src="assets/js/backend/create-product.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>