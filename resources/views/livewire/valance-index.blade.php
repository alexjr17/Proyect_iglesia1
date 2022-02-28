<div>
    <div class="max-w-sm rounded shadow-lg bg-purple-800">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Ingresos</div>
            <p class="text-gray-700 " id="convercion">
                {{ $diezmos }}
            </p>
            <p class="text-gray-700 text-base">
                Total de ofrendas: {{ $ofrendas }}
            </p>
        </div>
    </div>
</div>
<script type="text/javascript">
    // Sample 1
    $(document).ready(function() {
        $('#convercion').formatCurrency();
        $('#convercion').formatCurrency('#convercion');
    );
    });

    // Sample 2
    $(document).ready(function() {
        $('.convercion').blur(function() {
            $('.convercion').formatCurrency();
        });
    });
</script>
