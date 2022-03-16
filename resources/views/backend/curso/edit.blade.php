@extends('layouts.backend')

@section('content')
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="card analytics-sparkle-line reso-mg-b-30">
                    <div class="card-header">Editar curso</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('cursoUpdate', $curso)}}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="nombre">Nombre</label>
                                      <input type="text" name="nombre" value="{{$curso->nombre}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label for="Grado">Grado</label>
                                      <select data-placeholder="grado" class="chosen-select" name="grado" tabindex="-1">
											                    <option value="1"
                                          @if($curso->grado==1)
                                            selected="selected"
                                          @endif
                                          >primer grado</option>
											                    <option value="2"
                                          @if($curso->grado==2)
                                            selected="selected"
                                          @endif
                                          >segundo grado</option>
											                    <option value="3"
                                          @if($curso->grado==3)
                                            selected="selected"
                                          @endif
                                          >tercer grado</option>
											                    <option value="4"
                                          @if($curso->grado==4)
                                            selected="selected"
                                          @endif
                                          >cuarto grado</option>
                                          <option value="5"
                                          @if($curso->grado==5)
                                            selected="selected"
                                          @endif
                                          >quinto grado</option>
                                          <option value="6"
                                          @if($curso->grado==6)
                                            selected="selected"
                                          @endif
                                          >sexto grado</option>
										                  </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="nivel">Nivel</label>
                                      <select data-placeholder="Nivel" class="chosen-select" name="nivel" tabindex="-1">
										                    <option value="1"
                                        @if($curso->nivel==1)
                                          selected="selected"
                                        @endif
                                        >Primaria</option>
										                    <option value="2"
                                        @if($curso->nivel==2)
                                          selected="selected"
                                        @endif
                                        >Secundaria</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="estado">Estado</label><br>
                                      <input type="radio" class="form-check-input" id="estado1" name="estado" value="1" 
                                      @if($curso->estado)
                                          checked
                                      @endif
                                      >
                                      <label for="estado1">Activo</label><br>
                                      <input type="radio" class="form-check-input" id="estado2" name="estado" value="0"
                                      @if(!$curso->estado)
                                          checked
                                      @endif
                                      >
                                      <label for="estado2">Desactivado</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-success">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('backend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
@endpush

@push('scripts')
    <!-- jquery
		============================================ -->
    <script src="{{ asset('backend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('backend/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('backend/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('backend/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('backend/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('backend/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('backend/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('backend/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('backend/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{ asset('backend/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('backend/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('backend/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{ asset('backend/js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('backend/js/datapicker/datepicker-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('backend/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{ asset('backend/js/morrisjs/morris.js')}}"></script>
    <script src="{{ asset('backend/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('backend/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('backend/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{ asset('backend/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('backend/js/calendar/moment.min.js')}}"></script>
    <script src="{{ asset('backend/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('backend/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('backend/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('backend/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('backend/js/tawk-chat.js')}}"></script>
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
                                  
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <ul class="breadcome-menu">
                                  <li><a href="{{route('home')}}">Home</a> <span class="bread-slash">/</span>
                                  </li>
                                  <li>
                                    <a title="Cursos" href="{{route('cursoIndex')}}"><span class="bread-blod">Cursos</span></a>
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