
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <title>Pos Billing System</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('font/fonts.css')}}">

</head>
<body>
    <audio id="audio" src="beep/beep-07.mp3" ></audio>
    <section class="section__billing">
        <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">
                        <div class="item__right">
                            @livewire('possale')

                            <section class="footer__part">
                                @livewire('pos')
                            </section>
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

                                            <label for="R__amount" class="form-label">Received Amount *</label>
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

                                            <label for="P__amount" class="form-label">Paying Amount *</label>
                                            <input type="number" class="form-control" id="P__amount">

                                        </div>
                                        <div class="mb-3">

                                            <label for="Payed__by" class="form-label">Payed  By *</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Choose the payment method</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Gift Card</option>
                                                <option value="3">credit Card</option>
                                            </select>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ms-auto">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Payment Note:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                          </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 ms-auto">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Sale Note:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                          </div>
                                    </div>
                                    <div class="col-md-6 ms-auto">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">staff Note:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                          </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Check Out Bill</button>
                    </div>
                </div>

        </div>
    </section>

    <script>
        function play(){
             var audio = document.getElementById("audio");
             audio.play();
        }
    </script>

    @livewireScripts
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
