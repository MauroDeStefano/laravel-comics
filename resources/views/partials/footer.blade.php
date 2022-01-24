<footer>
  <div class="mds-footer-top ">
    <div class="container ">
      <div class="row">
        <div class="mds-list-lists col-6">
        @foreach(config('footer') as $links)
          
          <div class="mds-link-list clearfix">
        
            <h2 class="mds-title-footer col-2">{{$links['name']}}</h2>
               
              @foreach ($links['links'] as $link)
                 <div class="mds-resolver">
                <li class="mds-li-footer">
                  {{$link}}
                </li>
                </div>
              @endforeach
              
          </div>
          @endforeach
        
          <div class="mds-dc-logo col-6">
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="mds-footer-bottom clearfix">
    <div class="mds-container container">
      <div class="mds-sign">
        <a>SIGN-UP NOW!</a>
      </div>
      <div class="mds-social">
        <div> FOLLOW US </div>
        <div class="icon" >
          <img src="" alt="">
        </div>
      </div>
    </div>  
  </div>
</footer>