@extends('layouts.backend')

@section('content')
<div class="product-status mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="product-status-wrap"> 
            <h3>LISTA DE CURSOS (DOCENTE)</h3>
            <h4>
            @if ($salon->count())
              Salon: {{$salon[0]->grado}}°{{strtoupper($salon[0]->seccion)}} - {{$salon[0]->nivel}}
            @else
              El salon esta desactivado
            @endif
            </h4>
            <div class="add-product"><a href="#">Nuevo Curso</a></div>
            <div class="asset-inner">
              <!--TABLA-->
              <table>
                <tbody>
                  <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Grado</th>
                    <th>Nivel</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                  </tr>
                  @foreach($cursos as $curso)
                    <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$curso->nombre}}</td>
                      <td>{{$curso->grado}}</td>
                      <td>{{$curso->nivel}}</td>
                      <td>
                        @if($curso->estado_salon)
                          Activo
                        @else
                          Inactivo Activo
                        @endif
                      </td>
                      <td>
                        <a href="{{route('materialIndex', [Auth::user()->id, $curso->id])}}" class="btn btn-primary btn-sm">Material de Apoyo <i class="fa fa-edit"></i>
                        <a href="" class="btn btn-primary btn-sm">Evaluaciones <i class="fa fa-edit"></i>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!--END TABLA-->                          
            </div>          
            <div class="custom-pagination">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
<div class="footer-copyright-area">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="footer-copy-right">
                  <p>Copyright © {{now()->year}}. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
    
@push('styles')
    <!-- normalize CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/data-table/bootstrap-editable.css')}}">
@endpush

@push('scripts')
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('backend/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/tableExport.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/data-table-active.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ asset('backend/js/data-table/bootstrap-table-export.js')}}"></script>

@endpush



@push('sidebar')

  <!-- Mobile Menu end -->
  <div class="breadcome-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="breadcome-list">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="breadcome-heading">
                                @if(Auth::user()->isAbleTo('user-create'))
                                  <a href="{{ route('usuarioCreate') }}" class="btn btn-primary"><i class="fa fa-user-plus"></i>Crear nuevo usuario</a>
                                @endif
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <ul class="breadcome-menu">
                                  <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                  </li>
                                  <li><span class="bread-blod">Dashboard V.1</span>
                                  <li>
                                    <a href="{{route('home')}}">Home</a> <span class="bread-slash">/</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endpush