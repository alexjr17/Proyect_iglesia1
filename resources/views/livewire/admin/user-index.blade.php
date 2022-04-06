<div>
    <div class="card">
        <div class="card-header">
            <x-jet-input wire:model="search" autocomplete="hidden" type="text" class="w-full"
                placeholder="Ingrese el nombre o email de un usuario" />
        </div>

        @if ($users->count())
            <div class="card-body">
                <x-table id="">
                    @slot('indices')
                        @foreach ($indices as $indice)
                            @if (!$indice == '')
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ $indice }}
                                </th>
                            @else
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only"></span>
                                </th>
                            @endif
                        @endforeach
                    @endslot

                    {{-- slot --}}

                    @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $user->name }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $user->email }}</div>
                            </td>
                            @can('admin.users.edit')
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 flex justify-center">
                                        <a class="btn btn-primary mr-2"
                                            href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <x-jet-danger-button type="sutbmi">Eliminar</x-jet-danger-button>
                                        </form>
                                    </div>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </x-table>
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
