@props([
    'headerClass' => 'light',
    'footerClass' => 'light',
    'bodyClass' => 'light',
    'headerStyle' => '',
    'footerStyle' => '',
    'bodyStyle' => '',
])

@php
    $resolveClass = function ($class) {
        return match ($class) {
            'primary' => 'bg-primary text-light',
            'secondary' => 'bg-secondary text-light',
            'success' => 'bg-success text-light',
            'warning' => 'bg-warning text-dark',
            'danger' => 'bg-danger text-light',
            'light' => 'bg-light text-dark',
            'dark' => 'bg-dark text-light',
            default => '',
        };
    };

    $classHeader = $resolveClass($headerClass);
    $classFooter = $resolveClass($footerClass);
    $classBody = $resolveClass($bodyClass);
@endphp

<div class="card text-center">
    @isset($card_header)
        <div class="card-header {{ $classHeader ?? '' }} {{ $headerStyle }}">
            {{ $card_header }}
        </div>
    @endisset
    <div class="card-body {{ $classBody ?? '' }} {{ $bodyStyle }}">
        @isset($card_title)
            <h5 class="card-title">{{ $card_title }}</h5>
        @endisset
        {{ $card_text ?? $slot }}
    </div>
    @isset($card_footer)
        <div class="card-footer text-muted {{ $classFooter ?? '' }} {{ $footerStyle }}">
            {{ $card_footer }}
        </div>
    @endisset
</div>
