<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job board</title>

</head>
<body class="body">
    <nav class="custom-nav-logging">
        <ul class="ul-custom">
            <li>
                <a href="{{ route('vacancies.index') }}">Home</a>
            </li>
        </ul>

        <ul class="ul-custom">
            @auth
                <li>
                    {{ auth()->user()->name ?? 'Anynomus' }}
                </li>
                <li>
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('auth.create') }}">Sign in</a>
                </li>
            @endauth
        </ul>
    </nav>

    @if(session('success'))
        <div role="alert" class="applying-job-success">
            <p style="font-weight: bold">Success!</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    {{ $slot }}
</body>
</html>

<style>
    .body {
        margin: 2rem auto;
        max-width: 40rem;
        background-color: #f5f5f5;
        color: #4a5568;
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    .custom-nav-logging {
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 500;
    }

    .ul-custom {
        list-style: none;
        display: flex;
        gap: 0.5rem;
    }

    .applying-job-success {
        margin-top: 2rem;
        margin-bottom: 2rem;
        border-radius: 0.375rem;
        border-left: 4px solid rgb(134, 239, 172);
        background-color: rgb(220, 252, 231);
        padding: 1rem;
        color: rgb(22, 163, 74);
        opacity: 0.75;
    }
</style>
