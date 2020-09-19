<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.dashboard.partials.head')
</head>

<body class="register-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:;">Book Keeping by BCA</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-layout-11"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item  active ">
                        <a href="{{route('register')}}" class="nav-link">
                            <i class="nc-icon nc-book-bookmark"></i>
                            Register
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('login')}}" class="nav-link">
                            <i class="nc-icon nc-tap-01"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-satisfied"></i>
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-alert-circle-i"></i>
                            about
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page ">
        <div class="full-page register-page section-image" filter-color="black" data-image="img/bg/jan-sendereks.jpg">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 ml-auto">
                            <div class="info-area info-horizontal mt-5">
                                <div class="icon icon-primary">
                                    <i class="nc-icon nc-tv-2"></i>
                                </div>
                                <div class="description">
                                    <h5 class="info-title">Auditing</h5>
                                    <p class="description">
                                        We've created the marketing campaign of the website. It was a very interesting
                                        collaboration.
                                    </p>
                                </div>
                            </div>
                            <div class="info-area info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="nc-icon nc-html5"></i>
                                </div>
                                <div class="description">
                                    <h5 class="info-title">Simple to use</h5>
                                    <p class="description">
                                        We've developed the website with HTML5 and CSS3. The client has access to the
                                        code using GitHub.
                                    </p>
                                </div>
                            </div>
                            <div class="info-area info-horizontal">
                                <div class="icon icon-info">
                                    <i class="nc-icon nc-atom"></i>
                                </div>
                                <div class="description">
                                    <h5 class="info-title">All you need</h5>
                                    <p class="description">
                                        There is also a Fully Customizable CMS Admin Dashboard for this product.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mr-auto">
                            <div class="card card-signup text-center">
                                <div class="card-header ">
                                    <h4 class="card-title">Register</h4>
                                </div>
                                <div class="card-body ">
                                    <form class="form" id="register" method="post" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-single-02"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="name" required
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Full Name..." value="{{ old('name') }}" autocomplete="name"
                                                autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-email-85"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" required
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email..." value="{{ old('email') }}" autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-key-25"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" required
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password..." value="{{ old('password') }}"
                                                autocomplete="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-key-25"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password_confirmation" required
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Retype Password...">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-mobile"></i>
                                                </span>
                                            </div>
                                            <input type="phone" name="phone" required
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Mobile..." value="{{ old('phone') }}" autocomplete="phone">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-app"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="company" required
                                                class="form-control @error('company') is-invalid @enderror"
                                                placeholder="Company Name..." value="{{ old('company') }}"
                                                autocomplete="company">
                                            @error('company')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-check text-left">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="agree" required type="checkbox">
                                                <span class="form-check-sign"></span>
                                                I agree to the <a href="#something">terms and conditions</a>.
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" form="register" class="btn btn-info btn-round">Sign Up now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-page-background" style="background-image: url(img/bg/jan-sendereks.jpg) ">
            </div>
        </div>
    </div>
    @include('layouts.dashboard.partials.scripts')

</body>

</html>
