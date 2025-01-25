<a href="{{ $href }}" class="custom-link">
    {{ $slot }}
</a>

<style>
    .custom-link {
        display: inline-block;
        border-radius: 4px;
        border: 1px solid #cbd5e1;
        background-color: #ffffff;
        padding: 8px 12px;
        text-align: center;
        font-size: 0.875rem;
        font-weight: 600;
        color: #000000;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .custom-link:hover {
        background-color: #f1f5f9;
    }
</style>

