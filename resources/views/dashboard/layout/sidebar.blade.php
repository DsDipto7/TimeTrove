<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="{{asset('Admin')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Dashtreme </h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li @if(Request::segment(2)=='dashboard') class="active" @endif> 
       <a href="{{url('/backRoute')}}" @if(Request::segment(2)=='dashboard') class="active" @endif>
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>
     @if(Auth::user()->role == 1)
     <li @if(Request::segment(2)=='watch') class="active" @endif>
       <a href="{{url('/_admin/watch')}}"  @if(Request::segment(2)=='watch') class="active" @endif>
         <i class="zmdi zmdi-8tracks"></i> <span>Watch</span>
       </a>
     </li>
     @endif


     @if(Auth::user()->role == 2)
    <li @if(Request::segment(2)=='invoice' ) class="active" @endif>
      <a href="{{url('/_user/invoice')}}" @if(Request::segment(2)=='invoice' ) class="active" @endif>
        <i class="zmdi zmdi-8tracks"></i> <span>Invoice</span>
      </a>
    </li>
    @endif

     {{-- <li>
       <a href="icons.html">
         <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
       </a>
     </li>

     <li>
       <a href="forms.html">
         <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
       </a>
     </li> --}}

     {{-- <li>
       <a href="tables.html">
         <i class="zmdi zmdi-grid"></i> <span>Tables</span>
       </a>
     </li> --}}

     {{-- <li>
       <a href="calendar.html">
         <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
         <small class="badge float-right badge-light">New</small>
       </a>
     </li> --}}

     {{-- <li>
       <a href="profile.html">
         <i class="zmdi zmdi-face"></i> <span>Profile</span>
       </a>
     </li> --}}
{{-- 
     <li>
       <a href="{{url('/_auth/login'}}" target="_blank">
         <i class="zmdi zmdi-lock"></i> <span>Login</span>
       </a>
     </li> --}}

      {{-- <li>
       <a href="register.html" target="_blank">
         <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
       </a>
     </li> --}}

     {{-- <li class="sidebar-header">LABELS</li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
     <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> --}}

   </ul>
  
  </div>
  <!--End sidebar-wrapper-->