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
        "searching": false,
        "select": true
    });
}

function createAction(currency) {
    this.resetForm();
    invoiceForm.controls.currency.val(currency);
    invoiceForm.group.attr("url", urls.create);
    invoiceModalHeader.text("New Invoice");
    invoiceModal.modal("show");
};

function resetForm() {
    const today = new Date();
    invoiceForm.group.trigger("reset");
    invoiceForm.controls.date.val(today.toISOString().split("T").shift());
    invoiceForm.group.find(".select2").val(null).trigger("change");
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