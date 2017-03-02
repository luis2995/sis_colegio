@extends('layouts.inicio')
@section('content')
                 <form action="validador">
                  <h2 class="text-center">Iniciar Sesion</h2>
                    <br>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
                        <input type="text" class="form-control" name="Codigo" id="inputEmail3" placeholder="Email" required>

                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                        <input type="password" class="form-control"  name="Contraseña" id="inputEmail3" placeholder="Contraseña" required="">
                    </div>
                    <div class="row">                            
                        <div class="col-sm-6"><input type="checkbox" aria-label="..."> Recordar en este equipo </div> 
                        <div class="col-sm-6 text-right"><a href="">Olvidaste tu contraseña?</a> 

                        </div>
                        <div class="row col-sm-12">                            
                            <center><button type="submit" name="valor" value="login" class="btn btn-default " data-dismiss="modal">Ingresar</button></center>                       
                        </div>
                    </div>
                     </form>    
@stop