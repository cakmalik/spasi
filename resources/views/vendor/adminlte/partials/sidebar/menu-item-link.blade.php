<li @if (isset($item['id'])) id="{{ $item['id'] }}" @endif
    class="nav-item">

    <a class="nav-link {{ $item['class'] }}   @if (isset($item['label']))
                <span class="badge badge-{{ $item['label_color'] ?? 'primary' }} right">
                    {{ $item['label'] }}
                </span>
            @endif
        </p>

    </a>

</li>
