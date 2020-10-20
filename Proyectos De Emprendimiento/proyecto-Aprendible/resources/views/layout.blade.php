<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo','Aprendible')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contacto</a></li>
            <li><a href="portafolio">Portafolio</a></li>
        </ul>
    </nav>
  <!--<h1>Home</h1>-->
 <!--Bienvenido@ < ?php //echo $nombre ?? = "Invitado" ?>-->
      <!--esta es la forma en que imprimimos variables con blade.-->
      <!--Hola, { { $nombre ?? = "Invitado"}} -->

<!--cada vista tendra un contenido diferente, entonces hago lo siguiente.
Aqui es donde quiero que el contenido se agregue dinamicamente!-->
<!--un yield recibe como parametro un nombre para referenciarla, ya que en la pagina, se pueden trabajar varios yields-->
  @yield('content')
</body>
</html>