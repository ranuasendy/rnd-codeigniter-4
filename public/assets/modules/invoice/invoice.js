function createAction(currency) {
    const today = new Date();

    invoiceForm.group.trigger("reset");
    invoiceForm.group.attr("url", urls.create);

    // Load default value
    invoiceForm.controls.date.val(today.toISOString().split("T").shift());
    invoiceForm.controls.currency.val(currency);
    invoiceForm.controls.code.val('').trigger('change');

    invoiceModalHeader.text("New Invoice");
    invoiceModal.modal("show");
};