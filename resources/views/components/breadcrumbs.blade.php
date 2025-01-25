<nav {{ $attributes }}>
    <ul class="custom-list">
        <li>
            <a href="/"
               class="custom-link">Home
            </a>
        </li>
        @foreach ($links as $label => $link)
            <li>&#8594;</li>
            <li>
                <a href="{{ $link }}"
                class="custom-link">
                    {{ $label }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>

<style>
    .custom-list {
        display: flex;
        color: #64748b;
        list-style: none;
        padding: 0;
        margin-left: 1rem;
    }

    .custom-list li {
        margin: 0;
    }

    .custom-link {
        text-decoration: none;
        color: inherit;
    }

    .custom-link:hover,
    .custom-link:focus,
    .custom-link:visited,
    .custom-link:active {
        text-decoration: none;
        color: inherit;
    }
</style>
