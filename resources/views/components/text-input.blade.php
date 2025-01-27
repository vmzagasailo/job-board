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
</style>
