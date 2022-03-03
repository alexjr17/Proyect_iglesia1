<div class="grid">
    <div class="mb-3">
        <x-jet-input type="text" wire:model="search" class="w-full" placeholder="ingrese fecha Ej: AAAA-MM-DD"/>
    </div>

    <div class="grid grid-cols-3 gap-1">
        <x-card-header>
            @slot('title')
                Miembros
            @endslot
            {{$miembros}}
        </x-card-header>
        <x-card-header>
            @slot('title')
                Usuarios
            @endslot
            {{$roles}}
        </x-card-header>
        <x-card-header>
            @slot('title')
                Eventos
            @endslot
            {{$eventos}}
        </x-card-header>
    </div>

    <div class="grid grid-cols-3 gap-x-2">
        <x-card class="bg-purple-600">
            @slot('title')
                ingresos
            @endslot
            Total de diezmos:
            <label id="m-diezmos">$ {{ number_format($diezmos, 0, ',', '.') }}</label>

            <p class="text-gray-700 text-base">
                Total de ofrendas:
                <label id="m_ofrendas">$ {{ number_format($ofrendas, 0, ',', '.') }}</label>
            </p>
        </x-card>
        <x-card class="bg-green-500">
            @slot('title')
                pagos
            @endslot
            Total de pagos:
            <label id="m-gastos">$ {{ number_format($gastos, 0, ',', '.') }}</label>

        </x-card>
        <x-card>
            @slot('title')
                recursos totales
            @endslot
            tatal ingresos:
            <label>$ {{ number_format($t_ingresoss, 0, ',', '.') }}</label>
            Valance de ingresos y egresos:
            <label>$ {{ number_format($t_valancee, 0, ',', '.') }}</label>
        </x-card>
    </div>
    <span class="w-full h-6 bg-gray-500"></span>

</div>
