<style>
    .rounded-md {
        border-radius: 0.375rem;
    }
    .border-slate-300 {
        border: 1px solid #cbd5e1;
        padding: 1rem;
        margin-bottom: 0.25rem;
        background-color: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
</style>
<div class="rounded-md border-slate-300">
    {{ $slot }}
</div>
