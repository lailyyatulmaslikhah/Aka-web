<!DOCTYPE html>
<html lang="en">

<head>
    <title>REGISTER</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body themebg-pattern="theme1">
      <!-- Pre-loader start -->
      <div class="theme-loader">
          <div class="loader-track">
              <div class="preloader-wrapper">
                  <div class="spinner-layer spinner-blue">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
                  <div class="spinner-layer spinner-red">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>

                  <div class="spinner-layer spinner-yellow">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>

                  <div class="spinner-layer spinner-green">
                      <div class="circle-clipper left">
                          <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                          <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                          <div class="circle"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Pre-loader end -->
      <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="{{route('proses-register')}}" method="post">
                        {{csrf_field()}}
                        <div class="text-center">
                            <img src="assets/images/logo_aka.png" style="height: 50px" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif

                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">REGISTER</h3>
                                    </div>
                                </div>
                                
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Nama</label>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>

                                <div class="form-group form-primary">
                                  <input type="text" name="nohp" class="form-control">
                                  <span class="form-bar"></span>
                                  <label class="float-label">No Telepon</label>
                              </div>

                              <div class="form-group form-primary">
                                <input type="text" name="alamat" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Alamat</label>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="password">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password (min 8 karakter)</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="repassword" class="form-control @error('password') is-invalid @enderror" required autocomplete="password">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Konfirmasi Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Register</button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                 <p class="text-inverse text-center"><b>Sudah punya akun ? <a href="{{ route('login') }}" style="color: #009970">Login</a></b></p>
                             </div>
                             <div class="col-md-2">
                                <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>
<!-- end of container-fluid -->
</section>

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>




