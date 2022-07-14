<ul>
    @foreach ($categories->where('parent_id', $parent_id) as $category)
    <li>
        {{ $category->name }}
        @include('includes.tree_categories', ['parent_id' => $category->id])
        </li>
    @endforeach
</ul>
