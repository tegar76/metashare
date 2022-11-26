$(document).ready(function() {

    let table = $('#dataTable').DataTable({
            responsive: true
        })
        .columns.adjust()
        .responsive.recalc();
});