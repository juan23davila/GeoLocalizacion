<!DOCTYPE html>
<!--Esto es una modificacion-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GeoIp</title>
        <link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="fondo">
            
            <div id="global">
                <h2>Pagina para localizar un país de un servidor</h2>
                
                <div id="t">
                <form action="http://www.webservicex.net/geoipservice.asmx/GetGeoIP" method="get" enctype="multipart/form-data">
                    <table border="0" cellpadding="0" cellspacing="0" id="tabla">
                        <tr>
                            <td>
                                Localizar la siguiente IP:
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <input name="IPAddress" type="text" maxlength="50">
                            </td>
                            <td>
                                <input name="Enviar" type="submit" value="Enviar">
                            </td>
                        </tr>
                    </table> 
                </form>
                </div>
        </div>
    </body>
</html>