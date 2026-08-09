@props(['status'])

@if ($status === 'Aktif')
    <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700 text-center">
        Aktif
    </span>
@elseif ($status === 'Tidak Aktif')
    <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700 text-center">
        Tidak Aktif
    </span>
@else
    <span class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
        {{ $status }}
    </span>
@endif