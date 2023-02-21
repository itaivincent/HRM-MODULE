<div class="container-scroller">
    @include('layouts.navbar')
    <div class="container-fluid page-body-wrapper">
    @include('layouts.sidebar')
    <div class="main-panel">
    @yield('content')
   
  </div>
  </div>
</div>