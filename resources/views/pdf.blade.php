




<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #F905ED;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }

    #img{
  width: 100px;
  height: 100px;
  float: 10%;
  left: 20%;
}
    footer .izq {
      text-align: left;
    }

    #content{
	text-align: center;

    }
  </style>
<body>
  <header>
  <img id="img" src="img/jumpstart2.png"/>
    <h1>JUMSTART CHIAPAS</h1>
    <h2>DesarrolloWeb</h2>
  </header>
 
  <div id="content">
    <h1>OTORGA EL PRESENTE</h1>
	@foreach ($cursos as $curso)
    <h2>{{ $curso->Motivo }}</h2>
    <h3>A</h3>



@foreach ($diplomados as $diplomas)
    <h4> {{ $diplomas->Nombre }}  {{ $diplomas->Apellido_p }} {{ $diplomas->Apellido_m }}  </h4>
    
@endforeach


<h3>Por su asistencia en el </h3>


    <h4> {{ $curso->Concepto }} llevado a cabo del {{ $curso->fecha }}   </h4>
    
@endforeach


<h4></h4>	




   <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
             JUMSTART CHIAPAS
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>



   
  
</body>
</html>