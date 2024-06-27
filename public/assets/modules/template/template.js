function dataTableFitPageLength() {
    var api = this.api();
    var rowCount = api.rows({
        page: 'current'
    }).count();
    var colCount = $(this).find('thead tr:first th').length;
    var col = '';

    if (colCount > 0) {
        col += '<tr>';

        for (var i = 0; i < colCount; i++) {
            col += '<td>&nbsp;</td>';
        }

        col += '</tr>';
    }

    for (var i = 0; i < api.page.len() - (rowCount === 0 ? 1 : rowCount); i++) {
        $(this).find('tbody').append(col);
    }

    setTimeout(function () {
        $('.dataTables_wrapper td.wrap-cell').css({
            "white-space": "nowrap",
            "overflow": "hidden",
            "text-overflow": "ellipsis"
        });
    }, 0);
}