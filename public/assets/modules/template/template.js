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

function showPrompt(params = {}) {
    modalPrompt.find(".modal-title").html(params.title || "New Prompt");
    modalPrompt.find(".modal-body").html(params.text || "");

    const submitBtn = modalPrompt.find("#modal_prompt_submit");
    submitBtn.off("click");
    submitBtn.html(params.submit || "Ok");
    if (params.action) submitBtn.on("click", params.action);
    if (params.submitClass) submitBtn.toggleClass(params.submitClass);

    modalPrompt.modal("show");
}

function hidePrompt() {
    modalPrompt.modal("hide");
}