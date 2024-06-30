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
                    <input type="text" id="invoice_search" class="form-control" placeholder="Search..." onchange="searchAction()">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-primary btn-flat" onclick="searchAction()"><i class="fas fa-search"></i></button>
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
                <button type="button" class="btn btn-success" style="flex: 1;" onclick="createAction('IDR')">Create IDR</button>
                <button type="button" class="btn btn-success" style="flex: 1;" onclick="createAction('USD')">Create USD</button>
                <button type="button" class="btn btn-warning" style="flex: 1;" onclick="editAction()">Edit</button>
                <button type="button" class="btn btn-danger" style="flex: 1;" onclick="deleteAction()">Delete</button>
            </div>
            <div class="col-3">
                <div id="export_buttons" class="btn-group w-100">
                    <button type="button" class="btn btn-default" onclick="printAction('invoice')">Invoice</button>
                    <button type="button" class="btn btn-default" onclick="printAction('receipt')">Receipt</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4">
    	<table id="invoice_table" class="table table-bordered table-striped" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th width="30px">No.</th>
                    <th width="30px">#ID</th>
                    <th width="80px">Date</th>
                    <th width="50px">Currency</th>
                    <th width="80px">Code</th>
                    <th width="100px">Category</th>
                    <th width="100px">Invoice To</th>
                    <th width="100px">Address</th>
                    <th width="100px">Phone</th>
                    <th width="100px">Email</th>
                    <th width="100px">Description</th>
                    <th width="100px">Quantity</th>
                    <th width="100px">Price</th>
                    <th width="100px">Sub Total</th>
                    <th width="100px">Tax</th>
                    <th width="100px">Other</th>
                    <th width="100px">Deduction</th>
                    <th width="100px">Grand Total</th>
                    <th width="100px">Paid By</th>
                    <th width="100px">Status</th>
                    <th width="100px">Received</th>
                </tr>
            </thead>
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
                    <input id="invoice_id" type="hidden" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_date">Date</label>
                            <div class="input-group date-input" id="invoice_date" name="date" data-target-input="nearest">
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
                            <select class="form-control select2 select2-danger" id="invoice_code" name="code" data-placeholder="Code" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Code 1</option>
                                <option>Code 2</option>
                                <option>Code 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_category">Category</label>
                            <select class="form-control select2 select2-danger" id="invoice_category" name="category" data-placeholder="Category" placeholder="Category" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
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
                            <input type="number" class="form-control" id="invoice_phone" name="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_email">Email</label>
                            <input type="email" class="form-control" id="invoice_email" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="invoice_description">Description</label>
                        <textarea id="invoice_description" name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_quantity">Quantity</label>
                            <input type="number" class="form-control" id="invoice_quantity" name="quantity" placeholder="Quantity" onchange="calculateSubTotal()" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_price">Price</label>
                            <input type="number" class="form-control" id="invoice_price" name="price" placeholder="Price" onchange="calculateSubTotal()" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_sub_total">Sub Total</label>
                            <input type="text" class="form-control" id="invoice_sub_total" name="sub_total" placeholder="Total" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_tax">Tax</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="invoice_tax" name="tax" min="0" max="100" placeholder="Tax" onchange="calculateTotal()" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-percent"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_other">Other</label>
                            <input type="number" class="form-control" id="invoice_other" name="other" placeholder="Other" onchange="calculateTotal()" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_deduction">Deduction</label>
                            <input type="number" class="form-control" id="invoice_deduction" name="deduction" placeholder="Deduction" onchange="calculateTotal()" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_total">Grand Total</label>
                            <input type="text" class="form-control" id="invoice_total" name="total" placeholder="Grand Total" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="invoice_paid_by">Paid By</label>
                            <select class="form-control select2 select2-danger" id="invoice_paid_by" name="paid_by" data-placeholder="Paid By" placeholder="Paid By" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>User 1</option>
                                <option>User 2</option>
                                <option>User 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="invoice_status">Status</label>
                            <select class="form-control select2 select2-danger" id="invoice_status" name="status" data-placeholder="Status" placeholder="Status" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option>Paid</option>
                                <option>Unpaid</option>
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
<script src="<?= base_url('assets/modules/invoice/invoice.js') ?>"></script>
<script type="text/javascript">
    const invoiceTable = $("#invoice_table");
    const invoiceModal = $("#invoiceModal");
    const invoiceModalHeader = $("#invoiceModalHeader");
    const invoiceForm = {
        group: $("#invoice_form"),
        controls: {
            id: $("#invoice_id"),
            date: $("#invoice_date > input"),
            currency: $("#invoice_currency"),
            code: $("#invoice_code"),
            category: $("#invoice_category"),
            to: $("#invoice_to"),
            address: $("#invoice_address"),
            phone: $("#invoice_phone"),
            email: $("#invoice_email"),
            description: $("#invoice_description"),
            quantity: $("#invoice_quantity"),
            price: $("#invoice_price"),
            sub_total: $("#invoice_sub_total"),
            tax: $("#invoice_tax"),
            other: $("#invoice_other"),
            deduction: $("#invoice_deduction"),
            total: $("#invoice_total"),
            paid_by: $("#invoice_paid_by"),
            status: $("#invoice_status"),
            received: $("#invoice_received")
        }
    };

    const urls = {
        site: "<?= site_url("/invoice") ?>",
        datatables: "<?= site_url("/invoice/datatables") ?>",
        create: "<?= site_url("/invoice/create") ?>",
        detail: "<?= site_url("/invoice/detail") ?>",
        edit: "<?= site_url("/invoice/edit") ?>",
        delete: "<?= site_url("/invoice/delete") ?>",
    };

    $(function() {
        initDatatables();
    });
</script>