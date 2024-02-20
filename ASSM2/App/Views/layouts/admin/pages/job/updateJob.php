<?php
use App\Model\JobsController;
use App\Models\Comment;
use App\Models\Jobs;
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
                        <h4 class="page-title">Cập nhật công việc</h4>
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
                            <form class="form-horizontal" method="POST"
                                action="/?url=JobsController/editJob/<?= $data['id'] ?>">
                                <div class="card-body">
                                    <h4 class="card-title">Cập nhật công việc</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên
                                            công việc</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="Tên công việc" name="name"
                                                value="<?php echo $data['name']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nội
                                            dung</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Nội dung"
                                                name="content" value="<?php echo $data['content']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Ngày
                                            bắt đầu</label>
                                        <div class="col-sm-9">
                                            <?php $date_start = $data['date_start'];
                                            $newDateStart = date("Y-m-d", strtotime($date_start)); ?>
                                            <input type="date" class="form-control" id="fname"
                                                placeholder="Ngày bắt đầu" name="date_start"
                                                value="<?php echo $newDateStart; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Ngày
                                            kết thúc</label>
                                        <div class="col-sm-9">
                                            <?php $date_end = $data['date_end'];
                                            $newDateEnd = date("Y-m-d", strtotime($date_end)); ?>
                                            <input type="date" class="form-control" id="fname"
                                                placeholder="Ngày kết thúc" name="date_end"
                                                value="<?php echo $newDateEnd; ?>" />
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

                                            <button type="submit" name="update" class="btn btn-primary">
                                                Cập nhật
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>

                    </div>


                </div>


                <div class="row">
                    <div class="col-12">


                        <?php
                        $comment = new Comment;
                        $listComment = $comment->getAllComment($data['id']);
                        foreach ($listComment as $item) {
                            echo '
                                <div class="card">
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">' . $item['name'] . '</h6>
                                    <span class="mb-3 d-block">' . $item['content'] . '
                                    </span>
                                    <div class="comment-footer">
                                        <button type="button" class="btn btn-cyan btn-sm text-white" onclick="showOrHide()">
                                            Edit
                                        </button>
                                        <form id="elementToWorkOn" action="/?url=CommentController/editComment/' . $item['id'] . '" method="POST" style="display: none;">
                                                <input type="hidden" name="id" value="' . $item['id'] . '">
                                                <textarea name="content">' . $item['content'] . '</textarea>
                                                <button type="submit" class="btn btn-primary btn-sm text-white" name="editComment">Save</button>
                                            </form>
                                        <form action="/?url=CommentController/deleteComment/' . $item['id'] . '" method="POST">
                                        <input type="hidden" name="" value="' . $item['id'] . '">
                                        <button type="submit" class="btn btn-danger btn-sm text-white" name="deleteComment">
                                            Delete
                                        </button></form>
                                    </div>
                                    </div>';
                        }

                        ?>


                        <form class="form-horizontal" method="POST"
                            action="/?url=CommentController/addComment/<?= $data['id'] ?>">
                            <div class="card-body">
                                <h4 class="card-title">Bình luận</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label"></label>
                                    <textarea name="content" id="" cols="50" rows="5"
                                        placeholder="Viết bình luận tại đây" width="100%"></textarea>
                                    <?php if (isset($_SESSION['content'])): ?>
                                        <p style="color: red;">
                                            <?php echo Sessions::display_session('content'); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="comment" class="btn btn-primary">
                                            Bình luận
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
    <script>
        const divContainer = document.querySelector('#elementToWorkOn');
        let isClicked = true;

        let showOrHide = function () {
            if (isClicked) {
                divContainer.style.display = 'block';
                isClicked = false;
            } else {
                divContainer.style.display = 'none';
                isClicked = true;
            }
        }


    </script>
</body>

</html>