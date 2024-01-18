<h1>Update products</h1>
<form method="post" action="{{ route('products.update',['product'=>$product]) }}">
    @method('PUT')
    <label>Name</label><input name="name" type="text" value="{{ $product->name }}"/>
    <label>Detail</label><input name="detail" type="text" value="{{ $product->detail }}"/>
    @csrf
    <input type="submit" value="send">
</form>