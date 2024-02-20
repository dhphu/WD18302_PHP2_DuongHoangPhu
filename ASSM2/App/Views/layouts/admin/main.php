<?php
use App\Models\Jobs;
?>
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
              <h4 class="page-title">Dashboard</h4>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Danh sách công việc</h5>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>Tên công việc</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $job = new Jobs;
                  $jobsList = $job->getListJobs();
                      foreach($jobsList as $item){
                        echo '<tr>
                        <th>'.$item["name"].'</th>
                        <th>
                          <div class="row">
                            <form action="/?url=JobsController/viewOneJob/'.$item["id"].'" method="post">
                              <input type="hidden" name="id_update" value="'.$item["id"].'">
                              <input class="btn btn-success" type="submit" name="view" value="Xem chi tiết">
                            </form>
                          </div>
                        </th>
                      </tr>';
                      }

?>

                </tbody>
              </table>
            </div>

          </div>
        </div>
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
