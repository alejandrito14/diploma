<!DOCTYPE html>
<html>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diplomas</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>


    <body>

        <div class="container">
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost:8000/curso">Cursos</a></li>
        <li><a href="http://localhost:8000/">Diplomas</a></li>

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



    
        
                            
        </div>

       






            <div class="content">
               
               
       
        <div class="container"> 
        <h1>Diplomados</h1>
          <?php $message=Session::get('message') ?>

 @if(isset($message))
 @if($message=='agregado')

<div class="alert alert-succes alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Se ha enviado Diploma

  </div>
 @endif
 @endif

            <form id="formulario" action="{{url('ingresar')}}" method="post" name="formulario" >
            
            
                <div class="col-md-4">


                                 <label id="mensaje" class="control-label">El correo se ha enviado</label>   
                                <div class="form-group">
                                    <label class="control-label " for="localidad">Nombre </label>
                                    <input id="nombre" name="nombre" type="text" class="form-control"/>
                                </div>
                                <!--    <h4>Telefono</h4>-->
                                <div class="form-group">
                                    <label class="control-label " for="ap_p">Apellido Paterno </label>                           
                                    <input id="apellido_p" name="apellido_p" type="text" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="ap_m">Apellido Materno </label>
                                    <input id="apellido_m" name="apellido_m" type="text" class="form-control"/>
                                </div>


                                 <div class="form-group">
                                    <label class="control-label " for="tipo">Correo </label>
                                    <input id="correo" name="correo" type="text" class="form-control"/>
                                </div>
                                @if(isset($Concepto))
                                <div class="form-group">
                                    <label  class="control-label" >Curso</label>
                                     {!! Form::select('curso',$Concepto,null,[ 'placeholder'=>'Selecciona','id' => 'curso','class'=>'form-control'])!!}    
                                 <label for="curso"></label> </div>
                                @endif
                     <div class="row">
                            <div class="form-group col-md-4 col-md-offset-8">

          <input type="hidden" name="_token"  value="{{{ csrf_token() }}}" />
             <button id="btn-enviar" class="btn btn-primary" type="submit">Enviar Diploma</button>                
                            </div>
                        </div>

                            </div>




            </form>

        </div>
        
    <script >
        

$(document).ready(function(){
$('#mensaje').hide();


});


    </script>



    </body>
</html>
