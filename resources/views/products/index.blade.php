<h1>{{ $titre }}</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Detail</td>
        <td>Created_at</td>
        <td>Update_at</td>
        <td>Action</td>
    </tr>
    @foreach ($listeProduits as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>{{ $product->created_at }}</td>
        <td>{{ $product->updated_at }}</td>
        <td><a href="{{ route('products.edit', ['product' => $product]) }}">Editer</a></td>
        <td>
            <form method="post" action="{{ route('products.destroy',
            ['product' => $product]) }}">
            @method('DELETE')
            @csrf
            <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
