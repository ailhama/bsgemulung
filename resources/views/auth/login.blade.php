<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Bank Sampah Dusun Gemulung</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->
    @include('sweetalert::alert')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <img src="{{ asset('assets/img/logo ppmt.jpg') }}" alt="logo-ppmt-banyuwangi" style="width: 300px; margin-bottom: 10px;">
                            <h4 class="mb-2 fw-bold" style="background: linear-gradient(to right, #00F260, #0575E6); -webkit-background-clip: text; color: transparent;">
                                Selamat Datang <br>Bank Sampah Gemulung</h4>
                        </div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <x-input-label for="name" class="form-label" :value="__('Username')" />
                                <x-text-input id="name" class="form-control" type="name" name="name" :value="old('name')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger fs-6" />
                            </div>
                            <!-- <div class="mb-3">
                <x-input-label for="name" class="form-label" :value="__('Username')" />
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                  autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger fs-6" />
              </div> -->


                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <x-input-label for="password" class="form-label" :value="__('Password')" />
                                </div>
                                <div class="input-group input-group-merge">
                                    <x-text-input id="password" class="form-control" type="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required autocomplete="current-password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <button class="btn d-grid w-100 mb-2" type="submit" style="background-color: #35ab18; color: #ffffff;">Log
                                    in</button>
                            </div>
                        </form>
                        <!-- <p class="text-center">
              <span>Belum Punya Akun ?</span>
              <a href="/register">
                <span
                  style="background: linear-gradient(to right, #00F260, #0575E6); -webkit-background-clip: text; color: transparent;">Daftar</span>
              </a> -->
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
