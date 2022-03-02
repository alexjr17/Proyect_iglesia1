const formatter = new Intl.NumberFormat('es-CL', {
    style: 'currency',
    currency: 'CLP',
    minimumFractionDigits: 0
});

var conversion1 = document.getElementById('recaudo');
var conversion2 = document.getElementById('monto');
var conversion3 = document.getElementById('monto-gastos');

var diezmos = document.getElementById('m-diezmos');
var ofrendas = document.getElementById('m_ofrendas');
var gastos = document.getElementById('m-gastos');

    diezmos.textContent = formatter.format(conversion1.value);
    ofrendas.textContent = formatter.format(conversion2.value);
    gastos.textContent = formatter.format(conversion3.value);



