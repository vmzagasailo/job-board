<div style="position: relative">
    @if ($formId)
        <button class="close-button"
            type="button"
                onclick="document.getElementById('{{ $name }}').value = ''; document.getElementById('{{ $formId }}').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>
    @endif
    <label>
        <input
            type="text"
            placeholder="{{ $placeholder }}"
            name="{{ $name }}"
            value="{{ $value }}"
            id="{{ $name }}"
            class="custom-input"
        />
    </label>
</div>

<style>
    .custom-input {
        width: 100%;
        border-radius: 0.375rem;
        padding: 0.375rem 0.625rem;
        font-size: 0.875rem;
        border: 1px solid #cbd5e1;
        box-sizing: border-box;
        transition: all 0.2s ease;
    }

    .custom-input::placeholder {
        color: #A1A1AA;
    }

    .custom-input:focus {
        outline: none;
        box-shadow: 0 0 0 2px #3B82F6;
    }

    .custom-input:focus {
        border-color: #3B82F6;
    }

    .close-button {
        position: absolute;
        top: 0.22rem;
        right: 0.125rem;
        border: none;
        background-color: white;
    }

    .close-icon {
        width: 1.2rem;
        height: 1.2rem;
    }
</style>
