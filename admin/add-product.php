<?php
include ("includes/connection.php");
include ("includes/function.php");

$id = "";
$img = '';
$heading = '';
$price = '';


if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `product` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $img = $row['img'];
        $heading = $row['name'];
        $price = $row['price'];
    }
}


if (isset($_POST["addproduct"]) && $_POST["addproduct"] != '') {

    $img = get_safe_value($conn, rand(11, 999) . $_FILES['img']['name']);
    $heading = get_safe_value($conn, $_POST['title']);
    $price = get_safe_value($conn, $_POST['price']);

    move_uploaded_file($_FILES["img"]["tmp_name"], "../assets/images/product/" . $img);
    $sql = mysqli_query($conn, "INSERT INTO `product`(`name`, `price`,`img`) VALUES 
                                                     ('$heading','$price','$img')");

    if ($sql) {
        header("Location: products");
        exit();
    }

}


if (isset($_POST["UpdateProduct"]) && $_POST["UpdateProduct"] != '') {
    $id = get_safe_value($conn, $_POST['id']);
    $img = get_safe_value($conn, rand(11, 999) . $_FILES['img']['name']);
    $heading = get_safe_value($conn, $_POST['title']);
    $price = get_safe_value($conn, $_POST['price']);

    if ($_FILES['img']['name'] != '') {

        move_uploaded_file($_FILES["img"]["tmp_name"], "../assets/images/product/" . $img);

        $sql = mysqli_query($conn, "UPDATE `product` SET 
         `name`='$heading',
         `price`='$price',
         `img`='$img' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: products");
            exit;
        }
    } else {

        $sql = mysqli_query($conn, "UPDATE `product` SET 
         `name`='$heading',
         `price`='$price' WHERE  `id` = '$id'");

        if ($sql) {
            header("Location: products");
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
    <title>Add Project | Pinal & Co.</title>

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
                                <h4 class="mb-sm-0">Add Project</h4>

                                <div>
                                    <a href="projects" class="btn btn-warning" id="addproduct-btn"><i
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
                                            <label class="form-label" for="Service-title-input">Image</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="file" class="form-control" name="img" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                            <?php
                                            if ($img != '') {
                                                ?>
                                                <img src="../assets/images/product/<?php echo $img; ?>" class="mt-2" alt=""
                                                    width="100px">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Product Title</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="title" value="<?php echo $heading ?>"
                                                placeholder="Enter project title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="price" value="<?php echo $price ?>"
                                                placeholder="Enter price" required>
                                        </div>

                                        <div class="text-end mb-3">
                                            <?php
                                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                                ?>
                                                <input type="submit" name="UpdateProduct" class="btn btn-success w-sm"
                                                    value="Update">
                                            <?php } else { ?>
                                                <input type="submit" name="addproduct" class="btn btn-success w-sm"
                                                    value="Submit">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- end col -->

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
    <script>
        $(document).ready(function () {
            // Add input fields dynamically
            $('#add-img').click(function () {
                var inputFields = '<div class="remove-div"><div class="input-group mt-3">' +
                    '<input type="file" class="form-control me-2" name="moreImages[]" required>' +
                    '<input type="text" class="form-control me-2" name="moreImages_alt_text[]" placeholder="Alt-text" required>' +
                    '<div class="input-group-append">' +
                    '<button class="btn btn-danger remove-input" type="button"><i class="bi bi-trash3"></i></button>' +
                    '</div>' +
                    '</div></div>';
                $('#inputFields').append(inputFields);
            });

            // Remove input field when remove button is clicked
            $(document).on('click', '.remove-input', function () {
                $(this).closest('.remove-div').remove();
            });
        });
    </script>
</body>

</html>