<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            td, th {
              padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
              <table>
                <thead>
                  <tr>
                    <th>Tipus</th>
                    <th>Zona</th>
                    <th>Adreça</th>
                    <th>Num. Habitacions</th>
                    <th>Preu</th>
                    <th>Mida</th>
                    <th>Extres</th>
                    <th>Observacions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($houses as $house)
                    <tr>
                      <td>{{$house->tipus}}</td>
                      <td>{{$house->zona}}</td>
                      <td>{{$house->adreca}}</td>
                      <td>{{$house->numHabitacions}}</td>
                      <td>{{$house->preu}}</td>
                      <td>{{$house->mida}}</td>
                      <td>{{implode(', ', unserialize($house->extres))}}</td>
                      <td>{{$house->observacions}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </body>
</html>
