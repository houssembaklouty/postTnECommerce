<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

{{--
    <!-- Category Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', ['' => ''], null, ['class' => 'form-control']) !!}
    </div>
--}}

@isset($products)
    <div class="form-group col-sm-6">
        <label>Category:</label>

        <select class="form-control" name="category_id">
            @foreach($categorys as $category)

                @if( $products->category_id == $category->id )

                    <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                @else

                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
@endisset

@empty($products)
    <div class="form-group col-sm-6">
        <label>Category:</label>

        <select class="form-control" name="category_id">
            @foreach($categorys as $category)

                @if( old('category_id') == $category->id )

                    <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                @else

                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
@endempty

<!-- Reference Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reference', 'Reference:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::file('img') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</div>
