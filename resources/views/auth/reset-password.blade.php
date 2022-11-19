<x-auth-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="enter your valid email"
                    value="{{ old('email', $request->email) }}" autofocus required>
                <label for="email" class="fs-sm">Email</label>
                @if($errors->has('email'))
                <span class="tw-text-red-700 fs-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="enter your password" required>
                <label for="password" class="fs-sm">Password</label>
                @if($errors->has('password'))
                <span class="tw-text-red-700 fs-sm">{{ $errors->first('password') }}</span>
                @endif

                <div class="form-check mt-2 end">
                    <input type="checkbox" class="form-check-input" name="showOrHidePassword" onclick="showOrHideP()">
                    <label class="form-check-label fw-light fs-sm" for="showOrHidePassword">
                        Show Password
                    </label>
                </div>
            </div>

            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="confirm your password" required>
                <label for="password_confirmation" class="fs-sm">Password Confirmation</label>
                @if($errors->has('password_confirmation'))
                <span class="tw-text-red-700 fs-sm">{{ $errors->first('password_confirmation') }}</span>
                @endif

                <div class="form-check mt-2 end">
                    <input type="checkbox" class="form-check-input" name="showOrHidePasswordConfirmation"
                        onclick="showOrHidePC()">
                    <label class="form-check-label fw-light fs-sm" for="showOrHidePasswordConfirmation">
                        Show Password
                    </label>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-end mt-4">
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </div>
        </form>
    </x-auth-card>
</x-auth-layout>
