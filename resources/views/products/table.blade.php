<div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Reference</th>
                <th>Type</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Discount</th>
                <th>Description</th>
                <th>Category</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
        <tr>
            <td>
                <img src="{{ url('/images/products/'.$products->img) }}" height="50" width="50"/>
            </td>
            <td>{{ $products->name }}</td>
            <td>{{ $products->reference }}</td>
            <td>{{ $products->type }}</td>
            <td>{{ $products->price }}</td>
            <td>{{ $products->stock }}</td>
            <td>{{ $products->discount }}</td>
            <td>{{ $products->description }}</td>
            <td>{{ $products->category->name }}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('products.show', [$products->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{{ route('products.edit', [$products->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
