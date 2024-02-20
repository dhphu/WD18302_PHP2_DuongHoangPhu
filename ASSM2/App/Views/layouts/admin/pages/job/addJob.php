<?
use App\Core\Sessions;

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <? include "App/Views/layouts/admin/stylesheet.php" ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <? include "App/Views/layouts/admin/header.php" ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <? include "App/Views/layouts/admin/sidebar.php" ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Thêm công việc</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Library
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="/?url=JobsController/addJobs">
                                <div class="card-body">
                                    <h4 class="card-title">Thêm công việc</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên
                                            công việc</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="Tên công việc" name="name" />
                                            <?php if (isset($_SESSION['name'])): ?>
                                                <p style="color: red;">
                                                    <?php echo Sessions::display_session('name'); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nội
                                            dung</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Nội dung"
                                                name="content" />
                                                <?php if (isset($_SESSION['content'])): ?>
                                            <p style="color: red;">
                                                <?php echo Sessions::display_session('content'); ?>
                                            </p>
                                        <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Ngày
                                            bắt đầu</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="date_start" id="">
                                            <?php if (isset($_SESSION['date_start'])): ?>
                                            <p style="color: red;">
                                                <?php echo Sessions::display_session('date_start'); ?>
                                            </p>
                                        <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Ngày
                                            kết thúc</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="date_end" id="">
                                            <?php if (isset($_SESSION['date_end'])): ?>
                                            <p style="color: red;">
                                                <?php echo Sessions::display_session('date_end'); ?>
                                            </p>
                                        <?php endif; ?>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Trạng
                                            thái</label>
                                        <div class="col-sm-9">
                                            <select name="status" id="">
                                                <option value="Hiện">Hiện</option>
                                                <option value="Ẩn">Ẩn</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary" name="add">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>

                    </div>
                    <!-- editor -->

                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <? include "App/Views/layouts/admin/jquery.php" ?>
</body>

</html>