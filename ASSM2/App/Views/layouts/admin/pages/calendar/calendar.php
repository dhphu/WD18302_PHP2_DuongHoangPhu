<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../App/Views/layouts/admin/assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      href="../App/Views/layouts/admin/assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="../App/Views/layouts/admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="../App/Views/layouts/admin/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
   <?php include "App/Views/layouts/admin/header.php" ?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
     <?php include "App/Views/layouts/admin/sidebar.php"  ?>
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
              <h4 class="page-title">Calendar</h4>
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
            <div class="col-md-12">
              <div class="card">
                <div class="">
                  <div class="row">
                    <div class="col-lg-3 border-right pe-0">
                      <div class="card-body border-bottom">
                        <h4 class="card-title mt-2">Drag & Drop Event</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div id="calendar-events" class="">
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-info"
                              >
                                <i class="fa fa-circle text-info me-2"></i>Event
                                One
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-success"
                              >
                                <i class="fa fa-circle text-success me-2"></i>
                                Event Two
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-danger"
                              >
                                <i class="fa fa-circle text-danger me-2"></i
                                >Event Three
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-warning"
                              >
                                <i class="fa fa-circle text-warning me-2"></i
                                >Event Four
                              </div>
                            </div>
                            <!-- checkbox -->
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="drop-remove"
                              />
                              <label class="cform-check-label" for="drop-remove"
                                >Remove after drop</label
                              >
                            </div>
                            <a
                              href="javascript:void(0)"
                              data-toggle="modal"
                              data-target="#add-new-event"
                              class="d-flex align-items-center justify-content-center btn mt-3 btn-info d-block waves-effect waves-light"
                            >
                              <i class="mdi mdi-plus fs-4 me-1"></i> Add New
                              Event
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-body b-l calender-sidebar">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- BEGIN MODAL -->
          <div class="modal none-border" id="my-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add Event</strong></h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button
                    type="button"
                    class="btn btn-success save-event waves-effect waves-light"
                  >
                    Create event
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger delete-event waves-effect waves-light"
                    data-dismiss="modal"
                  >
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Add Category -->
          <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add</strong> a category</h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Category Name</label>
                        <input
                          class="form-control form-white"
                          placeholder="Enter name"
                          type="text"
                          name="category-name"
                        />
                      </div>
                      <div class="col-md-6">
                        <label class="control-label"
                          >Choose Category Color</label
                        >
                        <select
                          class="form-select shadow-none form-white"
                          data-placeholder="Choose a color..."
                          name="category-color"
                        >
                          <option value="success">Success</option>
                          <option value="danger">Danger</option>
                          <option value="info">Info</option>
                          <option value="primary">Primary</option>
                          <option value="warning">Warning</option>
                          <option value="inverse">Inverse</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-danger waves-effect waves-light save-category"
                    data-dismiss="modal"
                  >
                    Save
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- END MODAL -->
          <!-- ============================================================== -->
          <!-- End PAge Content -->
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
    <!-- ============================================================== -->
    <script src="./App/Views/layouts/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./App/Views/layouts/admin/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="./App/Views/layouts/admin/dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./App/Views/layouts/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./App/Views/layouts/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./App/Views/layouts/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./App/Views/layouts/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./App/Views/layouts/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./App/Views/layouts/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="./App/Views/layouts/admin/assets/libs/moment/min/moment.min.js"></script>
    <script src="./App/Views/layouts/admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="./App/Views/layouts/admin/dist/js/pages/calendar/cal-init.js"></script>
  </body>
</html>
