<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <form method="post"
                @if($method=="create")
                  action="{{route('users.store')}}"
                @elseif($method=='edit')
                  action="{{route('users.update',$users->id)}}"
                @endif
            >
                @csrf
                @if($method == 'edit')
                  @method('PUT')
                @endif
                <div class="content">
                    <label>
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" value="{{isset($users) ? $users->name : ''}}"/>
                    <label>
                        Correo
                    </label>
                    <input type="text" id="email" name="email" value="{{isset($users) ? $users->email : ''}}"/>
                    <label>
                        Contraseña
                    </label>
                    <input type="password" id="password" name="password" value=""/>
                    <label>
                        Rol
                    </label>
                    <select id="roles_id" name="roles_id">
                        <option value="1" {{isset($users) && $users->roles_id == 1 ? 'selected' : ''}}>Admin</option>
                        <option value="2" {{isset($users) && $users->roles_id == 2 ? 'selected' : ''}}>Auxiliar</option>
                    </select>
                    <label>
                        Permisos
                    </label>
                    <select id="permissions_id" name="permissions_id">
                        <option value="1" {{isset($users) && $users->permissions_id == 1 ? 'selected' : ''}}>Crud</option>
                        <option value="2" {{isset($users) && $users->permissions_id == 2 ? 'selected' : ''}}>Show</option>
                    </select>
                    @if($method == 'show')
                      <a href="{{action('UserController@index')}}" >Volver</a>
                    @else
                      <input type="submit" id="save" name="save" value="Guardar">
                    @endif
                </div>
            </form>
        </div>
    </body>
</html>
