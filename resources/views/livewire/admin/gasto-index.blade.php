<div>
    <div class="card">
        <div class="card-header">
            <x-jet-input type="text" class="w-full" wire:model="search" placeholder="Monto o fecha, ejemplo: AAAA-MM-DD"/>
        </div>

        @if ($gastos->count())

            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Monto</th>
                            <th>Proposito</th>
                            <th>Fecha</th>
                            <th>Detalle</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gastos as $gasto)
                            <tr>
                                <td>$ {{ number_format($gasto->monto, 0, ',', '.') }}</td>
                                {{-- <td>{{$gasto->proposito->nombre}}</td> --}}
                                <td>
                                    @isset($gasto->proposito)
                                        {{ $gasto->proposito->nombre }}
                                    @else
                                        No aplica
                                    @endisset
                                </td>
                                <td>{{ $gasto->created_at->toDateString() }}</td>
                                <td>{{ $gasto->detalle }}</td>
                                @can('admin.gastos.edit')
                                    <td whidth="10px">
                                        <a class="btn-primary btn-sm"
                                            href="{{ route('admin.gastos.edit', $gasto) }}">Editar</a>
                                    </td>
                                @endcan
                                @can('admin.gastos.destroy')
                                    <td whidth="10px">
                                        <form action="{{ route('admin.gastos.destroy', $gasto) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @else
            <div class="card-body">
                No se encontraron registros
            </div>
        @endif



        <div class="card-footer">
            {{ $gastos->links() }}
        </div>
    </div>

</div>
