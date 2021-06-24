<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <span class="fs-4">Практика</span>
      </a>
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none btn btn-outline-secondary" href="{{ route('home') }}">Главная</a>



        @guest
        <a class="me-3 py-2 text-dark text-decoration-none btn btn-outline-secondary" href="{{ route('register') }}">Регистрация</a>
        <a class="me-3 py-2 text-dark text-decoration-none btn btn-outline-secondary" href="{{ route('login') }}">Войти</a>
        @else
        @if(Auth::user()->id == 6)
        <a class="me-3 py-2 text-dark text-decoration-none btn btn-outline-secondary" href="{{ route('contact-data') }}">Сообщения</a>
        @endif
        <a class="me-3 py-2 text-dark text-decoration-none btn btn-outline-secondary" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            Выйти
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a class="me-3 py-2 text-dark text-decoration-none btn btn-outline-secondary" href="{{ route('feedback') }}">Обратная связь</a>
        @endguest
      </nav>
    </div>
