<!DOCTYPE html>
<html>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diplomas</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
       
 <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
 <script src="js/bootstrap.min.js"></script>
      <script src="js/accionesCurso.js"></script>

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
        <li><a href="http://localhost:8000/cursos">Cursos</a></li>
        <li><a href="http://localhost:8000/">Diplomas</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



    
        
                            
        </div>

       






            
               
               
       
        
        
<div class="container">
<h1>Cursos</h1>
        <div class="row">
      


<div class="col-md-4">

<form id="formulario" action="{{url('agregar')}}" method="post" name="formulario" >
            
            
               


                                 <label id="mensaje" class="control-label">El correo se ha enviado</label>   
                                <div class="form-group">
                                    <label class="control-label " for="localidad">Concepto </label>
                                    <input id="concepto" name="concepto" type="text" class="form-control"/>
                                </div>
                                <!--    <h4>Telefono</h4>-->
                                <div class="form-group">
                                    <label class="control-label " for="ap_p">Fecha </label>                           
                                    <input id="fecha" name="fecha" type="text" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="ap_m">Motivo </label>
                                    <input id="motivo" name="motivo" type="text" class="form-control"/>
                                </div>


                                    
                                    
                                       
                                   
                                    <div class="row">
                            <div class="form-group col-md-4 ">

          <input type="hidden" name="_token"  value="{{{ csrf_token() }}}" />
             <button id="btn-enviar" class="btn btn-primary" type="submit">Agregar Diplomado</button>                
                            </div>
                        </div>

                          



                                  
                                    
                                    
                                     </form>
                          


         </div>                         
 
    <div class="col-md-8">
     
                   
                   
                    

      
          <? php $message=Session::get('message') ?>
 @if(isset($message))
 @if($message=='store')

<div class="alert alert-succes alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Curso creado exitosamente

  </div>
 @endif
 @endif





      <table class="table table-bordered">
        <thead>
          <th>Concepto</th>
          <th>Fecha</th>
          <th>Motivo</th>
           <th >Operaciones</th>
        </thead>


         @if(isset($cat_diplomas))

        @foreach($cat_diplomas as $cat)
        <tbody>
          <td>{{$cat->Concepto}}</td>
           <td>{{$cat->fecha}}</td>
           <td>{{$cat->Motivo}}</td>
       <td >{!!link_to_route('cursos.edit', $title = 'Editar', $cat-> idDiplomas, $attributes = ['class'=>'btn btn-primary '])!!}
    
 <button data-id="{{ $cat->idDiplomas }}" class="btn btn-danger btn-delete"> Eliminar</button> 
             
           </td>

        </tbody>

        @endforeach
 @endif


      </table>

       

         </div>


</div>

        </div>   
           

  




    <script >
        

$(document).ready(function(){
$('#mensaje').hide();


});


    </script>

   


    </body>
</html>
