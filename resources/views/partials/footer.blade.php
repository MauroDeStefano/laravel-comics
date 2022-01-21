<footer>
  <div class="footer-top">
    <div class="container">
      <div class="link-list ">
        @foreach(config('footer') as $links)
          
        <div>
          <h2>{{$links['name']}}</h2>
          <ul>
            @foreach ($links['links'] as $link)
              <li>
                {{ $link['name'] }}
              </li>
            </ul>
            @endforeach
        </div>
      </div>
      @endforeach
      
      <div class="dc-logo">
      </div>
    </div>
  </div>
  {{-- <div class="footer-bottom clearfix">
    <div class="container">
      <div class="sign">
        <a>SIGN-UP NOW!</a>
      </div>
      <div class="social">
        <div> FOLLOW US </div>
        <div class="icon" v-for="(icon, ii) in socialIcons" :key="`socialIcons${ii}`">
          <img :src="icon.name" alt="">
        </div>
      </div>
    </div>  
  </div> --}}
</footer>