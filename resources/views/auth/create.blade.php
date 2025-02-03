<x-layout>
    <h1 class="custom-heading">
        Sign in to your account
    </h1>
    <x-card class="card-padding">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="mb8">
                <label for="email" class="email-password">
                    E-mail
                </label>
                <x-text-input name="email"/>
            </div>

            <div class="mb8">
                <label for="password" class="email-password">
                    Password
                </label>
                <x-text-input name="password" type="password"/>
            </div>

            <div class="remember-container">
                <div>
                    <div class="remember-cb">
                            <input type="checkbox" name="remember" class="remember-border">
                        <label for="remember">
                            Remember me
                        </label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                        Forget password?
                    </a>
                </div>
            </div>

            <button class="login-button">Login</button>

        </form>
    </x-card>
</x-layout>

<style>
    .custom-heading {
        margin-top: 4rem;
        margin-bottom: 4rem;
        text-align: center;
        font-size: 2.25rem;
        line-height: 2.5rem;
        font-weight: 500;
    }

    .card-padding {
        padding: 2rem 4rem;
    }

    .mb8 {
        margin-bottom: 2rem;
    }

    .email-password {
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 700;
        color: rgb(15, 23, 42);
    }

    .remember-container {
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 500;
    }

    .remember-cb {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .remember-border {
        border-radius: 2.125rem;
        border: 1px solid rgb(148, 163, 184);
    }

    .login-button {
        width: 100%;
        background-color: white;
        border: 1px solid grey;
        border-radius: 0.375rem;
        padding: 0.45rem;
        font-weight: 700;
    }
</style>
