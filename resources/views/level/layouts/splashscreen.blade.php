<div id="splash">
    <div class="load-logo">
      <div class="d-flex justify-content-center align-items-center h-100">
          <div class="load-logo1" role="status">
            <img src="{{ asset('question/assets/gif/load-logo.gif') }}" alt="logo-loading" class="align-self-center">
          </div>
        </div>
      <div class="d-flex justify-content-center align-items-center h-100">
          <div class="load-logob" role="status">
            <img src="{{ asset('question/assets/gif/load-bounche.gif') }}" alt="bounche-load">
          </div>
        </div>
    </div>
  </div>
  <script>
    window.addEventListener('load', function() {
  var splash = document.getElementById('splash');
  var navbar = document.getElementById('navbar');

  setTimeout(function() {
    splash.style.display = 'none';
    navbar.style.display = 'none';
  }, 3000);
});
  </script>