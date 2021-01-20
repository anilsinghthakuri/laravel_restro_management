
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <audio id="audio" src="beep/beep-07.mp3" ></audio>
    <section class="section__billing">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-6">
                        <div class="item__right">
                            @livewire('possale')

                            <section class="footer__part">
                                @livewire('pos')
                            </section>
                        </div>


                        <section class="footer__part">

                            @livewire('pos')

                        </section>

                        </div>

                    </div>

                    <div class="col-md-6">

                        @livewire('poschoose')


                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
