<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.style')
    <title>Document</title>
    <link rel="stylesheet"
        href="  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet"
        href=" https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

</head>

<body>

    @include('layouts.nav')

    <div class="container">
        <div class="payment">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        Supplier Payment
                    </div>
                    <div class="body--contain">
                        <div class="row g-3 align-items-center">
                            <div class="input-group">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label label-css ">Voucher No</label>
                                </div>
                                <div class="col-4">


                                        <input type="text" name="txtVNo" id="txtVNo" value="502000"
                                        class="form-control valid" readonly="" aria-invalid="false">
                                </div>
                            </div>
                            <div class="input-group">

                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label label-css">Date</label>
                                </div>
                                <div class="col-4">
                                    <input type="date" id="inputPassword6" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label label-css">Payment Type</label>
                                </div>
                                <div class="col-4">

                                    <select class="form-control form-control-xs selectpicker" name="" data-size="7"
                                        data-live-search="true" data-title="Location" id="state_list" data-width="100%">
                                        <option value="" selected>Cash Payment</option>

                                        <option value="">Bank Payement</option>
                                    </select>

                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label label-css">Bank</label>
                                </div>
                                <div class="col-4">

                                    <select class="form-control form-control-xs selectpicker" name="" data-size="7"
                                        data-live-search="true" data-title="Location" id="state_list" data-width="100%">
                                        <option value="" selected>Bank Name</option>
                                        <option value='Anatomy asia'>NIC Asia</option>
                                        <option value='Anatomy kathmandu'>NIC Asia</option>
                                        <option value='Anatomy pokhara'>NIC Asia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label label-css">Remark</label>
                                </div>
                                <div class="col-4">

                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                            </div>


                        </div>


                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>

                                    <th class="head-class" scope="col">Supplier Name*</th>
                                    <th class="head-class" scope="col">


                                            code


                                    </th>
                                    <th class="head-class" scope="col">Amount*</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>
                                        <select class="form-control form-control-xs selectpicker" name="" data-size="7"
                                            data-live-search="true" data-title="Location" id="state_list"
                                            data-width="100%">
                                            <option value="" selected>Select Option</option>
                                            <option value="">Bikash</option>
                                            <option value="">Biki</option>
                                            <option value="">Bikash</option>
                                            <option value="">Bikash</option>
                                            <option value="">Bikash</option>
                                            <option value="">Bikash</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="txtVNo" id="txtVNo" value="502000014"
                                            class="form-control valid" readonly="" aria-invalid="false">
                                    </td>
                                    <td> <input type="number" class="form-control" id="number"></td>
                                </tr>

                                <tr>

                                    <td></td>
                                    <td class="right--text">Total</td>
                                    <td >
                                        <input type="text" name="txtVNo" id="txtVNo" value="78978966589"
                                            class="form-control valid form-text-right" readonly="" aria-invalid="false"></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>



            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>



</body>

</html>
