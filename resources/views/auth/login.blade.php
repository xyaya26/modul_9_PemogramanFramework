@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<body class="bg-primary">
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 my-5 bg-light rounded-3 col-xl-3 border">
                <div class="mb-3 text-center mb-5">
                    <i class="bi bi-hexagon-half my-2 fs-1 text-primary"></i>
                    <h4 class="fs-5 fw-bold">Employee Data Master</h4>
                </div>
                <div class="form my-3">
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <hr>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-lg mt-2">
                                <i class="bi bi-box-arrow-right"></i> {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

