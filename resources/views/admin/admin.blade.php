<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9419b934fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">

        <!-- Bootstrap -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link  rel="stylesheet" href="{{URL::to('css/admin.css')}}"/>
    </head>
    <body>
        @if(session('sikertelen'))
        <div class="alert alert-danger" role="alert">
            <strong>{{session('sikertelen')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        @if (session('siker'))
        <nav class="navbar navbar-expand-lg " style="background-color: #82c8ec !important">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link link" href="{{route('back')}}">Kilépés</span></a>
              </div>
            </div>
          </nav>
        <div class="container-fluid">
            <div class="col-sm-12">
            @if (session('orders') != "[]")
            <table class="table">
                <thead>
                <tr>
                    <th style="padding-left: 15px">Név</th>
                    <th style="padding-left: 15px">Telefonszám</th>
                    <th style="padding-left: 15px">E-mail</th>
                    <th style="padding-left: 15px">Üzenet</th>
                </tr>
                </thead>
                @foreach (session('orders') as $order)
                <tr><td style="padding-left: 15px">{{ $order->name }} </td>
                    <td style="padding-left: 15px">{{ $order->number }} </td>
                    <td style="padding-left: 15px">{{ $order->mail }} </td>
                    <td style="padding-left: 15px">{{ $order->text }} </td>
                    <td style="padding-left: 15px"><a href="/{{$order->id}}"><button class="btn btn-primary">Törlés</button></a></td>
                </tr>
                @endforeach
            </table>
            </div>
            @else
            <div class="col-sm-6">
            <div class="col-sm-6 nincs">
                <h1> Nics elem</h1>
            </div>
            </div>
            @endif
        </div>
         @else
            <div class="container-fluid login ">
                <div class="row justify-content-md-center align-items-center">
                <div class="col-sm-6">
                    <h1 style="text-align:center">Login</h1>
                    <hr class="line">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group" >
                      <label for="exampleInputEmail1">E-mail</label>
                      <input type="text" class="form-control" id="name" name="mail" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jelszó</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                      </div>
                    <button type="submit" class="btn btn-primary">Belépés</button>
                  </form>
                </div>
                <div class="col-sm-3">
                    <img src="svg/login.svg" class="login_img"/>
                </div>
            </div>
            </div>
        @endif
    </body>
</html>
