<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="btn__full_width p-2"><button type="button" class="btn btn-primary btn-lg">VISA</button>
                </div>
                <div class="btn__full_width p-2"><button type="button" class="btn btn-info btn-lg">IME</button></div>
                <div class="btn__full_width p-2"><button type="button" class="btn btn-danger btn-lg">KHALTI</button>
                </div>
                <div class="btn__full_width p-2"><button type="button" class="btn btn-success btn-lg">E-SEWA</button>
                </div>
                <div class="btn__full_width p-2"><button type="button" class="btn btn-info btn-lg">MASTER CARD</button>
                </div>
                <div class="btn__full_width p-2"><button type="button" class="btn btn-primary btn-lg"
                        data-bs-toggle="modal" data-bs-target="#cash_toggle">CASH</button></div>
            </div>
        </div>
    </div>
</div>


<!-- cash modal  -->
<div class="modal fade" id="cash_toggle" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cash_toggleLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cash_toggleLabel">Billing Sale</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body ">
                <div class="container-fluid">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">

                                    <label for="R__amount" class="form-label">Received Ammount*</label>
                                    <input type="number" class="form-control" id="R__amount">

                                </div>
                                <div class="mb-3">

                                    <label for="R__change" class="form-label">Change:</label><br>
                                    <span id="R__change--number" class="form-text">
                                        4000
                                    </span>

                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="mb-3">

                                    <label for="P__amount" class="form-label">Paying Ammount*</label>
                                    <input type="number" class="form-control" id="P__amount">

                                </div>
                                <div class="mb-3">

                                    <label for="Payed__by" class="form-label">Payed  By*</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ms-auto">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                  </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 ms-auto">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                  </div>
                            </div>
                            <div class="col-md-6 ms-auto">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                  </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
