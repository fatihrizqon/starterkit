<x-auth-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        @if(session('info'))
        <span class="text-info fs-sm mb-3">
            {{ session('info') }}
        </span>
        @endif

        @if(session('status'))
        <span class="text-success fs-sm">
            {{ session('status') }}
        </span>
        @endif

        <form class="mt-3" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="enter your valid email"
                    value="{{ old('email') }}" autofocus required>
                <label for="email" class="fs-sm">Email</label>
                @if($errors->has('email'))
                <span class="tw-text-red-700 fs-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="enter your password" required>
                <label for="password" class="fs-sm">Password</label>

                <div class="form-check mt-2 end">
                    <input type="checkbox" class="form-check-input" name="showOrHidePassword" onclick="showOrHideP()">
                    <label class="form-check-label fw-light fs-sm" for="showOrHidePassword">
                        Show Password
                    </label>
                </div>

                @if($errors->has('password'))
                <span class="tw-text-red-700 fs-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <!-- Remember Me -->
                <div class="form-check mt-2">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label fw-light fs-sm" for="remember_me">
                        Remember Me
                    </label>
                </div>
                @if (Route::has('password.request'))
                <a class="fw-light fs-sm text-decoration-none" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
                @endif
            </div>

            <div class="d-flex align-items-center justify-content-between mt-3">
                <a class="fw-light fs-sm text-decoration-none" href="{{ route('register') }}">Create an account</a>

                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </x-auth-card>
</x-auth-layout>
