@extends('layout')
 
@section('content')
<div class="container" style="padding-top: 2.5em;">
<h2 style="color=#273a3f; text-align: left; font-weight: bold;">Kontakt</h2>
<hr />
    <div class="row d-flex justify-content-around" >
        <div class="width:90%;
                    mb-5
                    p-3
                    rounded-lg
                    shadow
                    d-flex
                    justify-content-between
                    align-items-baseline
                    "                
             style="background-size: 100%;
                 background-position: center;">
            <div class="w-75">
                <div class="">
                </div>
                <div class="">
                    <p class="text-muted">Broj telefona: 051504285</p>
                    <p class="text-muted">Broj mobitela: 0915099899</p>
                    <p class="text-muted"><label>E-mail:</label>    <button type="button" class="btn btn-outline-secondary"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsmGWxMRxdzRztxwxcFnWgGKBlBwQhDRTGhqQmqcCrMmJxxmqSggNvddPrqmGlMszdvnZRtg" style = "color: #334c52;">zlatkovaadresa@gmail.com</a></button></p>
                    <p class="text-muted">Adresa: <a href=https://www.google.com/maps/place/Furi%C4%87evo+17,+51216,+Vi%C5%A1kovo/@45.3708443,14.3840801,17z/data=!3m1!4b1!4m5!3m4!1s0x4764a6817857afef:0x432d246078a4d787!8m2!3d45.3708443!4d14.3862688" style = "color: #334c52; decoration: underline">Furićevo 17, Viškovo, 51216</a></p><br>
                </div>
            </div>
            <div class="w-75">
                <div class="d-flex justify-content-around p-1">
                    <div class="text-muted"><p>Radno vrijeme:</p>
                        <p>pon - pet: 8 - 13 h i 17 - 20 h</p>
                            <p>subota: 8 - 12 h</p>
                           <p> nedjelja: ZATVORENO
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-75">
                    <div>
                        <a href="https://facebook.com/Petwellnesscentar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Facebook_F_icon.svg/640px-Facebook_F_icon.svg.png" height="80%" width="30%"></a><br>
                    </div>                 
            </div>
        </div>
    </div>
</div>
<br />
<div class="container">
    <h2 style="color=#273a3f; text-align: left; font-weight: bold;">Naš tim</h2>
    <hr />
    <div class="parent" style="display: flex; padding-left: 2em; padding-right: 2em;">
            <div class="half1" style="flex: 1; float: left;"><div id='demo-carousel'></div></div>
            <div class="half2" style="width: 50%; float: right; text-align: center;"><h4>Marko Markić, dr. vet. med.</h4>
                    <p class="text-muted">Diplomirao na Veterinarskom fakultetu u Zagrebu 2015. godine.</p><br>
                    <h4>Ana Anić, dr. vet. med.</h4>
                    <p class="text-muted">Diplomirala na Veterinarskom fakultetu u Zagrebu 1996. godine.</p><br>
                    <h4>Stipe Stipić, veterinarski tehničar</h4>
                    <p class="text-muted">Završio Medicinsku školu u Zagrebu 1987. godine.</p><br>
                    <h4>Mira Mirić, veterinarski tehničar</h4>
                    <p class="text-muted">Završila Medicinsku školu u Rijeci 2011. godine.</p>
            </div>
    </div>
</div>
@endsection
 

