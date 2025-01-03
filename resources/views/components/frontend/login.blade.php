<form class="modal fade" draggable="true" id="login_modal" tabindex="-1" aria-labelledby="login_modal" method="POST" action="{{ route('login') }}" aria-hidden="true" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login with Codecamp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                @if(auth()->user() == null)
                <div class="row mb-3">

                    <div class="col-md-6 offset-md-4">
                        <div class="text-left">
                            <h1>Or</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                {{-- git hub login  --}}
                                <div>
                                    <a class="btn btn-dark" href="{{ url('/auth/redirect/github') }}">Continue with Github</a>
                                </div>
                                {{-- git hub login  --}}
                            </div>
                            <div class="col-md-12 mb-2">
                                {{-- google login  --}}
                                <script src="https://accounts.google.com/gsi/client" async defer></script>

                                <div id="g_id_onload" data-client_id="7734250976-obt32uahupkmtaep4rr7gq0q8p0qibh7.apps.googleusercontent.com" data-context="signin" data-ux_mode="popup" data-callback="login_by_google" data-auto_select="true" data-itp_support="true">
                                </div>

                                <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline" data-text="signin_with" data-size="large" data-logo_alignment="left">
                                </div>
                            </div>
                            {{-- end google login  --}}
                        </div>
                    </div>
                </div>



                <script>
                    function login_by_google(response) {

                        const tokens = response.credential.split(".");
                        const responsePayload = JSON.parse(atob(tokens[1]));
                        console.log(responsePayload)

                        var xhr = new XMLHttpRequest();
                        var url = new URL('{{ url('/auth/callback/google/') }}');

                        // Append query parameters
                        url.searchParams.append('id', responsePayload.sub);
                        url.searchParams.append('name', responsePayload.name);
                        url.searchParams.append('image', responsePayload.picture);
                        url.searchParams.append('email', responsePayload.email);

                        xhr.open('GET', url, true);

                        xhr.onload = function() {
                            if (xhr.status >= 200 && xhr.status < 300) {
                                // Successful response
                                if (xhr.responseText === 'success') {
                                    window.location.reload(); // Fixed typo from `window.reload()` to `window.location.reload()`
                                } else {
                                    console.error('Unexpected response:', xhr.responseText);
                                }
                            } else {
                                // Handle HTTP errors
                                console.error('HTTP error:', xhr.status, xhr.statusText);
                            }
                        };

                        xhr.onerror = function() {
                            // Handle network errors
                            console.error('Network error:', xhr.statusText);
                        };

                        xhr.send();


                    }

                </script>
                @endif

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> {{ __('Login') }}</button>

            </div>
        </div>
    </div>
</form>
