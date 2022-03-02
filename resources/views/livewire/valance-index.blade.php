<div class="grid">
    <div class="mb-3">
        <input type="text" wire:model="search" class="input w-full" placeholder="Filtrar por fecha Eje; 2020-06-2">
    </div>
    @php
        
    @endphp
    <div class="grid grid-cols-3 gap-x-2">
        <x-card class="bg-purple-600">
            @slot('title')
                ingresos
            @endslot
            Total de diezmos:
            <label id="m-diezmos">{{ money_format('%.2n', $diezmos) }}</label>

            <p class="text-gray-700 text-base">
                Total de ofrendas:
                <label id="m_ofrendas">{{ money_format('%.2n', $ofrendas) }}</label>
            </p>
        </x-card>
        <x-card class="bg-green-500">
            @slot('title')
                pagos
            @endslot
            Total de pagos:
            <label id="m-gastos">{{ money_format('%.2n', $gastos) }}</label>

        </x-card>
        <x-card>
            @slot('title')
                recursos totales
            @endslot

            <label>{{money_format('%.2n', $t_ingresoss)}}</label>
            <label>{{ money_format('%.2n', $t_valancee)}}</label>

        </x-card>
    </div>
    <span class="w-full h-6 bg-gray-500"></span>

</div>
