<!DOCTYPE html>
<html lang="es">

<head>
  <meta content="width=device-width" name="viewport">
  <title></title>
  <style type="text/css">
    @media only screen and (max-width:600px) {

      .es-content table,
      .es-footer table,
      .adapt-img {
        width: 100% !important;
        height: auto !important
      }
    }
  </style>
</head>

<body>
  <section>
    <div style="background-color:#F6F6F6">
      <table>
        <table style="width:100%">
          <td style="padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px">
          </td>
        </table>
        <table style="width:100%">
          <table align="center" style="background-color:#FFFFFF">
            <td style="width:560px">
              <table>

                <tr>
                  <td align="center">
                    <h2 style="font-family:sans-serif;font-weight:normal;color:#333333">

                    </h2>
                  </td>
                </tr>

                <tr>
                  <td align="center">
                    <img class="adapt-img"
                      src="https://ppgujj.stripocdn.email/content/guids/CABINET_cb17faf79a04ced871d05d750d0716fc/images/2821623604677424.png"
                      width="560">
                  </td>
                </tr>

                <tr>
                  <td align="left" style="padding-top:20px">
                    <p>
                      <em>
                        <p><em><strong>Nombre: </strong> {{$contacto['nombre']}}<br>
                            <br><strong>Numero de Telefono: </strong>
                            {{$contacto['telefono']}}<br>
                            @error('telefono')
                            <p><strong>{{$message}}</strong></p>
                            @enderror

                            <br>
                            <strong>Correo: </strong> {{$contacto['correo']}}</em></p>
                  </td>
                  @error('correo')
                  <p><strong>{{$message}}</strong></p>
                  @enderror
                </tr>
                </em>
                <br>
                </p>
            </td>
            </tr>
            <td align="left" style="padding-top:20px">
              <p><strong> Mensaje: </strong> </strong> {{$contacto['mensaje']}}<br>

                @error('mensaje')
                <p><strong>{{$message}}</strong></p>
                @enderror
                </i>

              </p>
            </td>
            </tr>

          </table>
          </td>
        </table>
      </table>



      <table width="100%">
        <table width="100%">

          <td align="center" style="padding:20px">
            <table width="75%" height="100%">
              <td style="border-bottom:1px solid #CCCCCC;height:1px;width:100%"></td>
            </table>
          </td>

          <tr>
            <td align="center" style="padding-top:10px;padding-bottom:10px">
              <p style="font-family:sans-serif;line-height:17px;color:#333333;font-size:11px">
                JORROFADI INSTALACIONES Y PROYECTOS S.A DE C.V., CANCÚN, QUINTANA ROO,
                <br>
                TEL CELULAR 044 (998) 1022645
              </p>
            </td>
          </tr>

          <td align="center" style="padding-top:10px;padding-bottom:10px">
            <p style="font-family:sans-serif;line-height:17px;color:#333333;font-size:11px">
              © 2021 JORROFADI INSTALACIONES Y PROYECTOS S.A DE C.V.
            </p>
          </td>

        </table>
      </table>



      <table width="100%">
        <td align="center" style="color:#CCCCCC">
          <a
            href="http://viewstripo.email/?utm_source=templates&utm_medium=email&utm_campaign=basic&utm_content=one_column">
            <img
              src="https://ppgujj.stripocdn.email/content/guids/CABINET_cb17faf79a04ced871d05d750d0716fc/images/2821623604677424.png"
              alt width="125">
          </a>
        </td>
      </table>

      </table>
    </div>
  </section>

</body>

</html>