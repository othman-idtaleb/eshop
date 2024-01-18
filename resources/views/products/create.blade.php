<h1>Add products</h1>
<form method="post" action="{{ route('products.store') }}">
    <label>Name</label><input name="name" type="text"/>
    <label>Detail</label><input name="detail" type="text"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="send">
</form>