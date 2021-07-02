<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('css/material-dashboard.css')}}">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{asset('css/demo.css')}}">


</head>

<body class="">



  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Modal title</h2>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
        <form class="pt-3" action="{{route('finance_store')}}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <select name="plan_cat" id="plan_cat">


                <option value="">Choose Plan</option>

                @foreach ($plan as $plans)
                <option value="{{$plans->id}}">{{$plans->title}}</option>

                @endforeach
            </select>

          <span class="text-danger" id="plan_cat">

            @error ('plan_cat'){{$message}} @enderror

                </span>
        </div>
          <div class="form-group">
            <input type="text" name="title" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Title">
            <span class="text-danger" id="title">

              @error ('title'){{$message}} @enderror

                  </span>
          </div>

          <div class="form-group">
            <input type="text" name="description" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Description">
            <span class="text-danger" id="description">

              @error ('description'){{$message}} @enderror

                  </span>
          </div>

          <div class="form-group">
            <input type="number" name="tenure_year" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="tenure_year">
            <span class="text-danger" id="tenure_year">

              @error ('tenure_year'){{$message}} @enderror

                  </span>
          </div>

          <div class="form-group">
            <input type="number" name="total_amount" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="total_amount">
            <span class="text-danger" id="total_amount">

              @error ('total_amount'){{$message}} @enderror

                  </span>
          </div>

          <div class="form-group">
            <input type="number" name="installment" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="installment">
            <span class="text-danger" id="installment">

              @error ('installment'){{$message}} @enderror

                  </span>
          </div>

          <div class="form-group">
            <input type="number" name="instal_duration" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="instal_duration">
            <span class="text-danger" id="instal_duration">

              @error ('instal_duration'){{$message}} @enderror

                  </span>
          </div>

          <div class="mt-3">

            <button type="submit" class="btn btn-primary btn-sm font-weight-medium auth-form-btn">Add Finance</button>
          </div>

        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Finance Description</h2>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">


            <div class="form-group">

                @foreach ($finance as $finances)

                {{$finances->description}}

                @endforeach

          </div>

        </div>

      </div>
    </div>
  </div>




  <div class="wrapper ">


    @include('../header-footer/sidebar')


    <div class="main-panel">

    @include('../header-footer/navbar')


      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="position: absolute;right:44px;z-index: 1000; top: 82px;">Add Finance Mode</a>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Finance Mode</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-border table-hover">

                      <thead>
                        <tr>

                          <th width="100px">Plan</th>
                          <th width="100px">Title</th>
                          <th width="50px">Description</th>
                          <th width="100px">Tenure Years</th>
                          <th width="100px">Total Amount</th>
                          <th width="100px">No of Installment</th>
                          <th width="100px">Installment Duration</th>
                          <th width="100px" style="text-align: center">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($finance as $finances)

                        <tr>



                          <td>{{$finances->hasplan->title}}</td>
                          <td>{{$finances->title}}</td>
                          <td><a class="btn text-white btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="{{route('finance_dscr',$finances->id)}}" style="">Click Me</a></td>
                          <td>{{$finances->tenure_year}}</td>
                          <td>{{$finances->total_amount}}</td>
                          <td>{{$finances->installments}}</td>
                          <td>{{$finances->instal_duration}}</td>
                          <td>
                            <a href='{{route('finance_edit',$finances->id)}}' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                              <i class='material-icons'>edit</i></a>
                              <a href='{{route('finance_destroy',$finances->id)}}' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
                                <i class='material-icons'>close</i>
                              <div class='ripple-container'></div></a>

                          </td>

                        </tr>
                        @endforeach

                      </tbody>


                    </table>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

     @include('../header-footer/footer')

    </div>
  </div>

  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{asset('js/moment.min.js')}}"></script>
  <script src="{{asset('js/sweetalert2.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/jquery.bootstrap-wizard.js')}}"></script>
  <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>
  <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
  <script src="{{asset('js/arrive.min.js')}}"></script>
  <script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
  <script src="{{asset('js/chartist.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-notify.js')}}"></script>
  <script src="{{asset('js/material-dashboard.js?v=2.1.2')}}"></script>
  <script src="{{asset('js/demo.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {

        $("#add-participant1").click(function(){

var $div = $('div[id^="another-participant1"]:last');

var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

var $klon = $div.clone().prop('id', 'another-participant1'+num );

$klon.find('input').each(function() {
  this.value= "";
  let name_number = this.name.match(/\d+/);
  name_number++;
  this.name = this.name.replace(/\[[0-9]\]+/, '['+name_number+']')
});

$div.after( $klon );

});

        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
