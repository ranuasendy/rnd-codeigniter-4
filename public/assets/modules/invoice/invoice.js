function initDatatables() {
    invoiceTable.DataTable({
        // "ajax": urls.datatables,
        "data": [
            {
                id: 1,
                date: "2024-05-27",
                currency: "IDR",
                code: "Code 1",
                category: "Category 1",
                to: "Test User",
                address: "Jakarta, Indonesia",
                phone: "088888888",
                email: "test@test.test",
                description: "This is just a test",
                quantity: 1,
                price: 1000000,
                sub_total: 1000000,
                tax: 10,
                other: 10000,
                deduction: 5000,
                total: 905000,
                paid_by: "Test",
                status: "Paid",
                received: "Yes"
            },
            {
                id: 2,
                date: "2024-05-27",
                currency: "USD",
                code: "Code 2",
                category: "Category 2",
                to: "Test Admin",
                address: "Jakarta, Indonesia",
                phone: "088888888",
                email: "test@test.test",
                description: "This is just a test",
                quantity: 1,
                price: 1000000,
                sub_total: 1000000,
                tax: 10,
                other: 10000,
                deduction: 5000,
                total: 905000,
                paid_by: "Test",
                status: "Paid",
                received: "Yes"
            }
        ],
        "rowId": 'id',
        "columnDefs": [
            {
                "data": null,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                "searchable": false,
                "orderable": false,
                "targets": 0
            },
            { "data": "id", "targets": 1, "visible": false },
            { "data": "date", "targets": 2 },
            { "data": "currency", "targets": 3 },
            { "data": "code", "targets": 4 },
            { "data": "category", "targets": 5 },
            { "data": "to", "targets": 6 },
            { "data": "address", "targets": 7 },
            { "data": "phone", "targets": 8 },
            { "data": "email", "targets": 9 },
            { "data": "description", "targets": 10 },
            { "data": "quantity", "targets": 11 },
            { "data": "price", "targets": 12 },
            { "data": "sub_total", "targets": 13 },
            { "data": "tax", "targets": 14 },
            { "data": "other", "targets": 15 },
            { "data": "deduction", "targets": 16 },
            { "data": "total", "targets": 17 },
            { "data": "paid_by", "targets": 18 },
            { "data": "status", "targets": 19 },
            { "data": "received", "targets": 20 },
        ],
        "drawCallback": dataTableFitPageLength,
        "scrollResize": true,
        "scrollY": 420,
        "scrollX": "100%",
        "scrollCollapse": true,
        "paging": true,
        "responsive": false,
        "lengthChange": false,
        "autoWidth": false,
        "searching": true,
        "select": true,
        "dom": 'lrt<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        "buttons": [
            {
                extend: "excelHtml5",
                text: "Download",
                className: "btn-default",
                title: "Invoice - Akatsuki System",
                filename: "Invoice_" + new Date().toISOString().replaceAll(" ", "_"),
                customize: function (xlsx) {
                    var sheet = xlsx.xl.worksheets["sheet1.xml"];

                    // jQuery selector to add a border
                    $("row c", sheet).attr("s", "25");
                    $('row c[r*="2"]', sheet).attr("s", "32");
                }
            }
        ]
    }).buttons().container().appendTo("#export_buttons");
}

function searchAction() {
    const value = $('#invoice_search').val();
    invoiceTable.DataTable().search(value, false, true).draw();
    console.log(value);
}

function resetForm() {
    const today = new Date();
    invoiceForm.group.trigger("reset");
    invoiceForm.controls.date.val(today.toISOString().split("T").shift());
    invoiceForm.group.find(".select2").val(null).trigger("change");
}

function loadForm(data) {
    invoiceForm.controls.id.val(data.id);
    invoiceForm.controls.date.val(data.date);
    invoiceForm.controls.currency.val(data.currency);
    invoiceForm.controls.code.val(data.code).trigger("change");
    invoiceForm.controls.category.val(data.category).trigger("change");
    invoiceForm.controls.to.val(data.to);
    invoiceForm.controls.address.val(data.address);
    invoiceForm.controls.phone.val(data.phone);
    invoiceForm.controls.email.val(data.email);
    invoiceForm.controls.description.val(data.description);
    invoiceForm.controls.quantity.val(data.quantity);
    invoiceForm.controls.price.val(data.price);
    invoiceForm.controls.sub_total.val(data.sub_total);
    invoiceForm.controls.tax.val(data.tax);
    invoiceForm.controls.other.val(data.other);
    invoiceForm.controls.deduction.val(data.deduction);
    invoiceForm.controls.total.val(data.total);
    invoiceForm.controls.paid_by.val(data.paid_by).trigger("change");
    invoiceForm.controls.status.val(data.status).trigger("change");
    invoiceForm.controls.received.val(data.received);
}

function calculateSubTotal() {
    let quantity = invoiceForm.controls.quantity.val();
    quantity = !isNaN(parseInt(quantity)) ? parseInt(quantity) : 0;

    let price = invoiceForm.controls.price.val();
    price = !isNaN(parseInt(price)) ? parseInt(price) : 0;

    invoiceForm.controls.sub_total.val(price * quantity);
}

function calculateTotal() {
    let subTotal = invoiceForm.controls.sub_total.val();
    subTotal = !isNaN(parseInt(subTotal)) ? parseInt(subTotal) : 0;

    let tax = invoiceForm.controls.tax.val();
    tax = !isNaN(parseInt(tax)) ? parseInt(tax) : 0;

    let other = invoiceForm.controls.other.val();
    other = !isNaN(parseInt(other)) ? parseInt(other) : 0;

    let deduction = invoiceForm.controls.deduction.val();
    deduction = !isNaN(parseInt(deduction)) ? parseInt(deduction) : 0;

    invoiceForm.controls.total.val((subTotal - (subTotal * tax / 100)) + other - deduction);
}

function createAction(currency) {
    resetForm();
    invoiceForm.controls.currency.val(currency);
    invoiceForm.group.attr("url", urls.create);
    invoiceModalHeader.text("New Invoice");
    invoiceModal.modal("show");
}

function editAction() {
    const selected = invoiceTable.DataTable().row({ selected: true }).data();

    if (selected) {
        $.ajax({
            url: urls.detail + "/" + selected.id,
            dataType: "json",
            success: function (data) {
                if (data) {
                    resetForm();
                    loadForm(data);
                    invoiceForm.group.attr("url", urls.edit + "/" + data.id);
                    invoiceModalHeader.text("Edit Invoice");
                    invoiceModal.modal("show");
                }
            }
        });
    } else {
        $(document).Toasts("create", {
            title: "Info",
            class: "bg-info",
            icon: "fa fa-info-circle",
            close: false,
            autohide: true,
            delay: 1500,
            body: "Please select a row first!"
        });
    }
}



function submitAction() {
    $.ajax({
        url: invoiceForm.group.attr("url"),
        data: invoiceForm.serialize(),
        method: "POST",
        dataType: "json",
        success: function (data) {
            if (data.success) {
                invoiceTable.DataTable().ajax.reload();
                invoiceModal.modal("close");

                $(document).Toasts("create", {
                    title: "Success",
                    class: "bg-success",
                    icon: "fa fa-check",
                    close: false,
                    autohide: true,
                    delay: 1500,
                    body: data.message
                });
            } else {
                $(document).Toasts("create", {
                    title: "Error",
                    class: "bg-error",
                    icon: "fa fa-times",
                    close: false,
                    autohide: true,
                    delay: 1500,
                    body: data.message
                });
            }
        }
    })
}

function deleteAction() {
    const selected = invoiceTable.DataTable().row({ selected: true }).data();

    if (selected) {
        showPrompt({
            title: "Delete Invoice",
            text: "Are you sure to delete this invoice?",
            submit: "Delete",
            submitClass: "btn-danger",
            action: function () {
                $.ajax({
                    url: urls.delete + "/" + selected.id,
                    dataType: "json",
                    success: function (data) {
                        if (data.success) {
                            invoiceTable.DataTable().ajax.reload();

                            $(document).Toasts("create", {
                                title: "Success",
                                class: "bg-success",
                                icon: "fa fa-check",
                                close: false,
                                autohide: true,
                                delay: 1500,
                                body: data.message
                            });
                        } else {
                            $(document).Toasts("create", {
                                title: "Error",
                                class: "bg-error",
                                icon: "fa fa-times",
                                close: false,
                                autohide: true,
                                delay: 1500,
                                body: data.message
                            });
                        }
                    }
                });

                hidePrompt();
            }
        });
    } else {
        $(document).Toasts("create", {
            title: "Info",
            class: "bg-info",
            icon: "fa fa-info-circle",
            close: false,
            autohide: true,
            delay: 1500,
            body: "Please select a row first!"
        });
    }
}

function printAction(type) {
    var params = { mode: "print", type: type };
    window.open(urls.site + '?' + $.param(params), '_blank');
}