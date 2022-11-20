<x-auth-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <div class="mb-2 fs-sm">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link
            we just
            emailed to you? If you didn\'t receive the email, we will gladly send you another.
        </div>

        @if (session('status') == 'verification-link-sent')
        <span class="text-success fs-sm">
            A new verification link has been sent to the email address you provided during registration.
        </span>
        @endif

        <div class="mt-2 d-flex align-items-center justify-content-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <button type="submit" class="btn btn-primary">Resend Verification Email</button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </x-auth-card>
</x-auth-layout>
