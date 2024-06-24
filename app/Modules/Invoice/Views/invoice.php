<div class="d-flex flex-column">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="card-title float-none">Total Transaction</h3>
                    </div>
                    <div class="card-body text-center">
                        <h1>200</h1>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex flex-column justify-content-between mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-primary btn-flat"><i class="fas fa-search"></i></button>
                    </span>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default">Tahun</button>
                    <button type="button" class="btn btn-default">Bulan</button>
                    <button type="button" class="btn btn-default">Tanggal</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 d-flex" style="gap: 0.5rem;">
                <button type="button" class="btn btn-success" style="flex: 1;" onclick="createAction()">Create IDR</button>
                <button type="button" class="btn btn-success" style="flex: 1;">Create USD</button>
                <button type="button" class="btn btn-warning" style="flex: 1;">Edit</button>
                <button type="button" class="btn btn-danger" style="flex: 1;">Delete</button>
            </div>
            <div class="col-3">
                <div class="btn-group w-100">
                    <button type="button" class="btn btn-default">Invoice</button>
                    <button type="button" class="btn btn-default">Receipt</button>
                    <button type="button" class="btn btn-default">Download</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                </tr>
                <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalHeader" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invoiceModalHeader">New Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="invoice_form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_date">Date</label>
                            <div class="input-group date" id="invoice_date" name="date" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#invoice_date" />
                                <div class="input-group-append" data-target="#invoice_date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_currency">Currency</label>
                            <input type="text" class="form-control" id="invoice_currency" name="currency" readonly />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_code">Code</label>
                            <select class="form-control select2 select2-danger" id="invoice_code" name="code" placeholder="Code" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_category">Category</label>
                            <select class="form-control select2 select2-danger" id="invoice_category" name="category" placeholder="Category" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="invoice_to">Invoice To</label>
                        <input type="text" class="form-control" id="invoice_to" name="to" placeholder="Invoice To" />
                    </div>
                    <div class="form-group">
                        <label for="invoice_address">Address</label>
                        <input type="text" class="form-control" id="invoice_address" name="address" placeholder="Address" />
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_phone">Phone</label>
                            <input type="text" class="form-control" id="invoice_phone" name="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_email">Email</label>
                            <input type="text" class="form-control" id="invoice_email" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="invoice_description">Description</label>
                        <textarea id="invoice_description" name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_quantity">Quantity</label>
                            <input type="text" class="form-control" id="invoice_quantity" name="quantity" placeholder="Quantity" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_price">Price</label>
                            <input type="text" class="form-control" id="invoice_price" name="price" placeholder="Price" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_sub_total">Sub Total</label>
                            <input type="text" class="form-control" id="invoice_sub_total" name="sub_total" placeholder="Total" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_tax">Tax</label>
                            <input type="text" class="form-control" id="invoice_tax" name="tax" placeholder="Tax" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_other">Other</label>
                            <input type="text" class="form-control" id="invoice_other" name="other" placeholder="Other" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_deduction">Deduction</label>
                            <input type="text" class="form-control" id="invoice_deduction" name="deduction" placeholder="Deduction" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_total">Grand Total</label>
                            <input type="text" class="form-control" id="invoice_total" name="total" placeholder="Grand Total" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_paid_by">Paid By</label>
                            <select class="form-control select2 select2-danger" id="invoice_paid_by" name="paid_by" placeholder="Paid By" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_status">Status</label>
                            <select class="form-control select2 select2-danger" id="invoice_status" name="status" placeholder="Status" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_received">Received</label>
                            <input type="text" class="form-control" id="invoice_received" name="received" placeholder="Received" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
<script>
    const invoiceModal = $("#invoiceModal");
    const invoiceModalHeader = $("#invoiceModalHeader");
    const invoiceForm = {
        group: $("#invoice_form"),
        controls: {
            date: $("#invoice_date > input")
        }
    };

    const urls = {
        site: "<?= site_url("/invoice") ?>",
        create: "<?= site_url("/invoice/create") ?>",
    };

    $(function() {
        $("#example1").DataTable({
            "scrollResize": true,
            "scrollY": 450,
            "scrollX": "100%",
            "scrollCollapse": true,
            "paging": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "searching": false,
            "select": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });

        $('#reservationdate').datetimepicker({
            format: "YYYY-MM-DD"
        });

        $('.select2').select2({
            theme: 'bootstrap4'
        });
    });

    function createAction() {
        const today = new Date();

        invoiceForm.group.trigger("reset");
        invoiceForm.group.attr("url", urls.create);
        invoiceForm.controls.date.val(today.toISOString().split("T").shift());
        invoiceModalHeader.text("New Invoice");
        invoiceModal.modal("show");
    };
</script>