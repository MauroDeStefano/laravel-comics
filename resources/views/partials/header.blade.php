<header class="container">
  <div>
    <img src="/img/dc-logo.png" alt="">
  </div>
    <nav>
      @foreach (config('nav') as $btn )
      <a>
        {{-- class="{{ (Route::currentRouteName() === $btn['route']) ? 'active' : '' }}" href="{{ route($link['route']) }}" --}}
        {{ $btn['name'] }} 
      </a>  
      @endforeach
      
    </nav>
</header>