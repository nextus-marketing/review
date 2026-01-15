@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://comparehomesecurity.org/frontend/my-img/new-logo-243.webp" class="logo" alt="Laravel Logo"
                    style="height: auto" width="200px;">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
