<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" autocomplete="hidden" type="text" class="form-control" placeholder="Ingrese el nombre o email de un usuario">
        </div>
        
        @if($users->count())

            <div class="card-body">
                <table class="table table-light table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @can('admin.users.edit')
                                    <td width='10px'>
                                        <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                    </td>
                                @endcan
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $users->links() }}
            </div>

        @else

        <div class="card-body">
            No hhay registros
        </div>

        @endif
    </div>
</div>
