@props(['id'])
<div>
    <table id="{{ $id }}" class="table table-striped table-bordered" style="width:100%">
        <thead class="bg-gray-400">
            <tr>
                {{ $indices }}
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{ $slot }}
            <!-- More people... -->
        </tbody>
    </table>

</div>
