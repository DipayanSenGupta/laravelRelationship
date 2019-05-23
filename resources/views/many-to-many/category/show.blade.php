<h2>Category Name: </h2>
<p>{{ $category->title }}</p>

<h3>category Belongs to</h3>

<ul>
    @foreach($category->products as $product)
    <li>{{ $product->name }}</li>
    @endforeach
</ul>