<div class="table-responsive-sm">
    <table class="table table-striped" id="categorys-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Parent Id</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorys as $categorys)
            <tr>
                <td>{{ $categorys->name }}</td>
            <td>{{ $categorys->parent_id }}</td>
            <td>{{ $categorys->description }}</td>
                <td>
                    {!! Form::open(['route' => ['categorys.destroy', $categorys->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorys.show', [$categorys->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('categorys.edit', [$categorys->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>