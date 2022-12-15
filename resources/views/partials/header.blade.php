<header class="bg-white">
   <div class="text-center">
      <img src="{{ Vite::asset('resources/img/marchio-sito-test.png')}}" alt="">
   </div>
    <nav class="navbar-nav container navbar-light">
        <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''
            }}" href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'prodotti' ? 'active' : ''
                }}" href="{{ route('prodotti') }}">
                    Prodotti
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'blog' ? 'active' : ''
            }}" href="{{ route('blog') }}">
                    News
                </a>
            </li>
        </ul>
    </nav>
  
</header>