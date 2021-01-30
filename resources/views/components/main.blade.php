<div >
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show alert" role="alert">
        @foreach ($errors->all() as $error)
             <strong>{{ $error }}</strong><br>
         @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <img src="svg/back-{{$bg}}.svg" class="back" />
        <div class="container-fluid backstg" style="background-image: url('img/new_background.jpg')">
            <div class="col-sm-12">
                <img src="svg/icicle-{{$color}}.svg" class="icicle">
                <h1 class="jumbtext" style="color: #{{$color}}"> Coldman</h1>
                <img src="svg/water-{{$color}}.svg" class="water-1">
                <img src="svg/water-{{$color}}.svg" class="water-2">
                <img src="svg/water-{{$color}}.svg" class="water-3">
            </div>
        </div>

        <div class="container-fluid" style="background-color:#{{$bg}} !important">
            <br>
        <div class="col-sm">
        <h4 style="color: #{{$color}};position:relative" class="text">Munkatársaink 20 éves tapasztalattal,valamint a legkorszerűbb
                 eszközök használatával segítenek megvalósítani ügyfeleink minden klímával kapcsolatos igényét.</h4>
         <br>
        </div>
        </div>
        <img src="svg/cloud-{{$bg}}.svg"  />
        <div class="sky" style="background-color: #0d1b2a">

        </div>
        <img src="svg/snow2.svg" >
        <div class="container-fluid service">
            <div class="row justify-content-center">
            <div class="col-sm-9">
               <h1>Szolgáltatások</h1>
                <br>
                <h4 class="text">
                    Szolgáltatásink közé tartozik az ingyenes felmérés,
                     majd az ezt követő szintén ingyenes és személyreszabott írásos árajánlat tétel.
                      Klímaberendezéseket közvetlenül tud tőlünk vásárolni, de előre megvásárolt berendezéseket is
                      telepítünk igény szerint. Árajánlatunkba beletartozik minden olyan költség, amely a telepítéssel
                      jár (rézcső, esztétikai takaró elemek stb.)
                </h4>
                <br>
            </div>
            <div class="col-sm-3">
                <img src="svg/premium-service.svg" class="service_img"/>
            </div>
            </div>
        </div>

        <div class="container-fluid product" id="product" style="background-image: url('img/rocks.jpg')">
            <div class="col-sm-12">
                <br>
                <h1 class="title">Akciók</h1>
                <br>
            </div>
        <div class="col-sm-12">
                @foreach ($airconditioners->chunk(3) as $air_ch)
                <div class="row">
                 @foreach ($air_ch as $airconditioner)
                    <div class="col-sm-8 col-md-4 align-self-center" style="padding-top: 10px">
                        <img src="svg/icicle.svg"  class="thumb_icicle" />
                       <div class="img-thumbnail">
                          <img src="img/{{$airconditioner->image}}" class="rounded mx-auto d-block air_image" >
                           <div class="caption" >
                             <h3>{{$airconditioner->name}} </h3>
                             <h5 style="padding-top: 5px">Előnyök: </h5>
                             <ul>
                             @foreach (explode(',',$airconditioner->description) as $item)
                                <li style="font-weight: 500">{{$item}}</li>
                             @endforeach
                             </ul>
                             <div class="row">
                                 <div class="col-sm-6"><img src="svg/cold.svg" height="30px"/> <span class="tum_text">{{$airconditioner->coldclass}} </span></div>
                                 <div class="col-sm-6"><img src="svg/hot.svg" height="30px"/> <span class="tum_text">{{$airconditioner->hotclass}}</div>
                             </div>
                             <br>
                             <div class="row">
                                <div class="col-sm-6"><img src="svg/coldenergy.svg" height="30px"/> <span class="tum_text">{{$airconditioner->coldperfomance}} </span></div>
                                <div class="col-sm-6"><img src="svg/hotenergy.svg" height="30px"/> <span class="tum_text">{{$airconditioner->hotperfomance}}</div>
                            </div>
                           </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
             @endforeach
            </div>
            <br>
        </div>
        <div class="container-fluid install">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-8">
                    <h1>Telepítés</h1>
                    <br>
            <h4 class="text">Munkatársaink az előzetes felmérés után kivonulnak a helyszínre,
                ahol újra átbeszélik a kért szerelést. Ezután a közvetlen környezetben,
                 ha szükséges, mindent lefednek takarófóliákkal az értékek épségének megőrzése érdekében.
                  A megfelelő felszerelésünk végett a porszennyezettség szinte minimális lesz, aminek eltakarítását minden esetben
                   mi végezzük a munka befejeztével. Munkatársaink precíz és gyors munkavégzés mellett törekednek arra, hogy a fal átfúrás minél
                    hamarabb befejeződjön, így biztosítva az átlagosnál nem hangosabb munkavégzést. Munkafolyamatunk egyik utolsó lépéseként a rézcsövekben
                    található levegőt kivákuumoljuk, ezzel biztosítva a berendezés még nagyobb hatékonyságát. A munka befejeztével kollégáink igény szerint
                    bemutatják a távirányítós vezérlő működését, és szívesen megválaszolják az esetlegesen felmerülő kérdéseket is.
                    <br>
                </div>
                <div class="col-sm-4">
                    <img src="svg/loading.svg" class="loading_img"/>
                </div>
            </div>
        </div>
        <img src="svg/icicles_service.svg"/>
        <div class="container-fluid serv" >
            <div class="row justify-content-center align-items-center">
            <div class="col-sm-6 serv_text">
                <h1>Szervizelés</h1>
                <br>
                <h4 class="text">A berendezéseket ajánlott évente kétszer karbantartani a hűtési és a fűtési szezon kezdete előtt.
                    Szervizelésünk során mind a beltéri mind a kültéri egységet megtisztítjuk a lerakódott portól és szennyeződésektől.
                    Erre a folyamatra egy kifinomult gőztisztító gépet használunk, amely forró gőzt juttat az egységek minden részébe.
                    Igény és állapot szerint használunk különféle tisztító és gombaölő szereket, bár ezekre manapság egyre kevésbé van szükség
                     az X-Fan funkciónak köszönhetően.
                </h4>
            </div>
            <div class="col-sm-3">
                <img src="svg/service.svg" class="serv_img"/>
            </div>
        </div>
        </div>
        <img src="svg/cave_water.svg" />

        <div class="container-fluid underwater">
            <div class="row  justify-content-center ">
            <div class="col-sm-6">
              <h1> Miért mi?</h1>
               <h4 class="text"> Munkatársaink megfelelő képesítéssel rendelkező szakemberek,
                 akik a szakszerű és igényes munkavégzés közben a legkisebb részletet is figyelembe vesznek,
                  majd a munkájuk végeztével mindent úgy hagynak ott, ahogyan az eredeti állapotában volt.</h4>
            </div>
        </div>
        </div>

        <div class="container-fluid underwater" id="reference" style="padding-top: 40px">
            <div class="row  justify-content-center align-items-center">
                <div class="col-sm-6">
                    <br>
                    <h1>Referenciák</h1>
                </div>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide underwater" data-ride="carousel" >
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="6" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="7" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="8" class="carli"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="9"class="carli"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="container" >
                    <img src="img/reference/0.jpg" class="d-block w-100">
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <img src="img/reference/1.jpg" class="d-block w-100 " >
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <div class="row justify-content-center align-items-center">
                    <img src="img/reference/2.jpg" class="d-block w-100 carimg" >
                     </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <div class="row justify-content-center align-items-center">
                    <img src="img/reference/3.jpg" class="d-block w-100 carimg" >
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <div class="row justify-content-center align-items-center">
                    <img src="img/reference/4.jpg" class="d-block w-100 carimg" >
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <img src="img/reference/5.jpg" class="d-block w-100 " >
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <div class="row justify-content-center align-items-center">
                    <img src="img/reference/6.jpg" class="d-block w-100 carimg" >
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <div class="row justify-content-center align-items-center">
                    <img src="img/reference/7.jpg" class="d-block w-100 carimg" >
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <img src="img/reference/8.jpg" class="d-block w-100" >
                  </div>
              </div>
              <div class="carousel-item">
                <div class="container" >
                    <div class="row justify-content-center align-items-center">
                    <img src="img/reference/9.jpg" class="d-block w-100 carimg" >
                    </div>
                  </div>
              </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>
        </div>

            <div class="container-fluid underwater p-3" style="height: 150px">
                <div class="col-sm-12" style="position: relative;">
                    <img src="svg/fishes.svg" class="fishes"/>
                </div>
            </div>
        <div class="container-fluid underwater2 p-3" id="underwater">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-3" style="position: relative">
                    <img src="svg/bubble.svg" class="bubble1">
                    <img src="svg/blowfish.svg" class="fish">
                </div>
            <div class="col-sm-6">
                <h2 style="color: #f2f2f2">Írjon nekünk</h2>
                <br>
                <form method="POST" action="{{route('sendmail')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="sendername" placeholder="Üzenetküldő neve">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="sendernumber" placeholder="Üzenetküldő telefonszáma">
                      </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="sendermail" placeholder="Üzenetküldő e-mail címe" >
                    </div>
                    <div class="form-group">
                        <textarea rows="3" class="form-control" name="sendertext" placeholder="Üzenet szövege" ></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-mail-bulk"></i> Küldés</button>
                  </form>
        </div>
        <div class="col-sm-3" style="position: relative">
            <img src="svg/bubble.svg" class="bubble2">
            <img src="svg/fish2.svg" class="fish">
        </div>
    </div>
</div>

<div class="container-fluid deepwater p-3" id="contact" style="padding-top: 20px;padding-bottom: 40px">
    <d class="row justify-content-center align-items-center">
    <div class="col-sm-6">
        <br>
        <h1>Kapcsolat</h1>
        <br>
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-6">
                <h4><i class="fas fa-envelope"></i> coldmanklima@gmail.com</h4>
                <h4><i class="fas fa-mobile-alt"></i> 06706305381</h4>
            </div>
            <div class="col-sm-6">
                <img src="svg/octopus.svg" class="octopus"/>
            </div>
        </div>
    </div>
    <br>
    </div>
<img src="svg/seabottom.svg" />
<div class="container-fluid" style="background-color: #D2996F">
    <div class="col-sm-12">
        <br>
        <h2>KLÍMASZERELÉST ÉS KLÍMATISZTÍTÁST AZ ALÁBBI TELEPÜLÉSEKEN ÉS KÖRNYÉKÜKÖN VÁLLALUNK:</h2>
        <br>
        <h5 class="text">
            Aszód, Bag, Berkenye, Budapest, Csomád, Csörög, Dunakeszi, Erdőkertes, Fót, Galgagyörk, Galgamácsa,
            Göd, Gödöllő, Iklad, Keszeg, Kismaros, Kisnémedi, Kosd, Kóspallag, Márianosztra, Mogyoród, Nagymaros, Nógrád,
            Nőtincs, Ősagárd, Penc, Püspökszilágy, Rád, Rétság, Szada, Szendehely, Szentendre, Szob, Szokolya, Sződ, Sződliget,
            Vác, Vácduka, Vácegres, Váchartyán, Váckisújfalu, Vácrátót, Veresegyház, Verőce, Zebegény
        </h5>
        <br>
    </div>
</div>
</div>
