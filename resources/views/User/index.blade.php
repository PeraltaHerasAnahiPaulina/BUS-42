@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
   </div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al usuario?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion del usuario</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                   
                   
                   
                   
                    <a class="btn btn-primary" href="/user">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista de usuarios</h3>
                            <div class="d-flex justify-content-end">
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Img_user</th>
                                            <th>Matricula</th>
                                            <th>ID_Cuatrimestre</th>
                                            <th>ID_Direction</th>
                                            <th>ID_Trajectory</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Img_user</th>
                                            <th>Matricula</th>
                                            <th>ID_Cuatrimestre</th>
                                            <th>ID_Direction</th>
                                            <th>ID_Trajectory</th>
                                            <th>Accion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!--para que no la tome invalida nos vamos al controller en inedes y hacemos la consulata eloquent laravel-->
                                        @foreach($Users as $User)
                                        <tr>
                                            <td>{{$Users->ID}}</td>
                                            <td>{{$Users->Name}}</td>
                                            <td>{{$Users->Img_user}}</td>
                                            <td>{{$Users->Matricula}}</td>
                                            <td>{{$Users->ID_Cuatrimestre}}</td>
                                            <td>{{$Users->ID_Direction}}</td>
                                            <td>{{$Users->ID_Trajectory}}</td>
                                            <td>{{$Users->Accion}}</td>
                                            
                                            <td>
                                        <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="Users/{{$User->ID}}"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="Users/{User}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>

       

    </div>

  
</div>

</div>


</div>
<!-- End of Main Content -->
@include('layouts.footer')
