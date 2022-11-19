<x-auth-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <div class="mb-2 fs-sm">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset
            link that
            will allow you to choose a new one.
        </div>

        @if(session()->has('status'))
        <span class="text-success fs-sm">
            {{ session()->get('status') }}
        </span>
        @endif

        <form class="mt-2" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" autofocus
                    required>
                <label for="email" class="fs-sm">Email</label>
                @if($errors->has('email'))
                <span class="tw-text-red-700 fs-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                <a class="fw-light fs-sm text-decoration-none" href="{{ route('login') }}">Back to login</a>

                <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
            </div>
        </form>
    </x-auth-card>
</x-auth-layout>
