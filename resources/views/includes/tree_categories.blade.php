@if (count($items->where('parent_id', $parent_id)))
    <ul>
        {{-- {{ dd($items->where('parent_id', 1)) }} --}}
        @foreach ($items->where('parent_id', $parent_id) as $item)
        <li>
            {{ $item->name }}
            @include('includes.tree_categories', ['items' => $items,
                    'parent_id' => $item->id])
            </li>
        @endforeach
    </ul>
@endif
