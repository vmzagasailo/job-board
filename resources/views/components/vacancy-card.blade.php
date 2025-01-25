<x-card>
    <div class="card-header">
        <h2 class="card-title">
            {{ $vacancy->title }}
        </h2>
        <div class="card-salary">
            ${{ number_format($vacancy->salary) }}
        </div>
    </div>

    <div class="card-meta">
        <div class="card-meta-info">
            <div>Company name</div>
            <div>{{ $vacancy->location }}</div>
        </div>
        <div class="card-tags">
            <x-tag>{{ Str::ucfirst($vacancy->experience) }}</x-tag>
            <x-tag>{{ $vacancy->category}}</x-tag>
        </div>
    </div>

    <p class="card-description">
        {!! nl2br(e($vacancy->description)) !!}
    </p>

    {{ $slot }}
</x-card>

<style>
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .card-title {
        font-size: 1.125rem;
        font-weight: 500;
        color: #1a202c;
    }

    .card-salary {
        color: #64748b;
    }

    .card-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.875rem;
        color: #64748b;
        margin-bottom: 16px;
    }

    .card-meta-info {
        display: flex;
        gap: 16px;
    }

    .card-tags {
        display: flex;
        gap: 4px;
        font-size: 0.75rem;
    }

    .card-description {
        font-size: 0.875rem;
        color: #64748b;
    }
</style>
