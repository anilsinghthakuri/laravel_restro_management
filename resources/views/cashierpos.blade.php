
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Pos Billing System</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body>
    <audio id="audio" src="beep/beep-07.mp3" ></audio>
    <section class="section__billing">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-6">

                        @livewire('cashierposchoose')


                    </div>

                    <div class="col-md-6">
                        <div class="item__right">
                            @livewire('cashierpossale', ['table' => $table], key($table->id))
                            {{-- @livewire('possale') --}}

                            <section class="footer__part">
                                @livewire('cashierposcheckout',['table' => $table,'grandprice'=> $grandprice], key($table->id))
                            </section>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>



    @livewireScripts
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{asset('js/cashierscript.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>

        function play(){
             var audio = document.getElementById("audio");
             audio.play();
        }

    </script>
</body>
</html>
