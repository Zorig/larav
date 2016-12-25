<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Сайт</title>
  <link href="{{ asset('css/ink.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ink-ie.min.css') }}" rel="stylesheet">
</head>
<body>
  <div class="ink-grid">
    <!--[if lte IE 9 ]>
    <div class="ink-alert basic" role="alert">
        <button class="ink-dismiss">&times;</button>
        <p>
            <strong>You are using an outdated Internet Explorer version.</strong>
            Please <a href="http://browsehappy.com/">upgrade to a modern browser</a> to improve your web experience.
        </p>
    </div>
    -->

    <!-- Add your site or application content here -->

    <header class="">
      <nav class="ink-navigation">
          <ul class="menu horizontal black">
              <li class="active"><a href="/">Нүүр</a></li>
              <li><a href="{{ route('blog.list')}}">Блог</a></li>
              @if (Route::has('login'))
                @if (Auth::check())
                  <li class="align-right"><a href="#">Гарах</a></li>
                @else
                <li class="align-right"><a href="#">Нэвтрэх</a></li>
                @endif
              @endif
          </ul>
      </nav>
    </header>
  </div>
  <div class="ink-grid">
    @yield('content')
  </div>
  <footer class="clearfix">
      <div class="ink-grid">
          <ul class="unstyled inline half-vertical-space">
              <li class="active"><a href="#">About</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Contacts</a></li>
          </ul>
          <p class="note">Identification of the owner of the copyright, either by name, abbreviation, or other designation by which it is generally known.</p>
      </div>
  </footer>
  <script src="{{ asset('js/ink.min.js') }}"></script>
  <script src="{{ asset('js/holder.js') }}"></script>
</body>
</html>
