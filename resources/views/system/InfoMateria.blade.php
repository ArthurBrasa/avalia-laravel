@extends('default_components.main')

@section('navbar')
    @include('default_components.navbar')
@endsection
@section('content')
      
    <div class="container">
        
    <div>
        <!--  -->
        <div class="d-flex flex-column flex-md-row gap-5">
          {{-- <div class="card shadow-sm p-3 mb-5 bg-body rounded">
            <img class="card-img p-3" width="300px" src='{{asset("imgs/svg/materia/$img.svg")}}' alt="">
            <p class="card-body">{{$nome}}</p>
          </div> --}}

          <x-card-materia-info :name="$materia->name" :img="$materia->id" />
  
          <div class="card p-5 shadow-sm p-3 mb-5 bg-body rounded">
            <div class="row row-cols-3 mb-5">
              <div class="col p-2">
                <span class="bg-black bg-opacity-25 py-1 px-2">Duração:</span>
                <span class="d-block">{{$materia->duracao}}h</span>
              </div>
              <div class="col p-2">
                <span class="bg-black bg-opacity-25 py-1 px-2">Sigla:</span>
                <span class="d-block">{{$materia->sigla}}</span>
              </div>
            </div>
            
            <div>
              <span class="bg-black bg-opacity-25">Descrição:</span>
              <p>{{$materia->descricao}}</p>
            </div>
         
          </div>
  
  
        </div>
      
        {{-- <div class="d-flex justify-content-center">
          <svg width="250px" height="130" viewBox="0 0 562 130" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_866_842)">
            <rect width="553" height="118" rx="59" fill="#FBB0A0"/>
            <path d="M219.644 48.62V74H212.588V59.996L207.8 74H201.896L197.072 59.888V74H190.016V48.62H198.548L204.92 65.108L211.148 48.62H219.644ZM223.229 63.884C223.229 61.796 223.601 59.972 224.345 58.412C225.113 56.852 226.145 55.652 227.441 54.812C228.761 53.972 230.225 53.552 231.833 53.552C233.225 53.552 234.425 53.828 235.433 54.38C236.441 54.932 237.221 55.676 237.773 56.612V53.804H244.829V74H237.773V71.192C237.221 72.128 236.429 72.872 235.397 73.424C234.389 73.976 233.201 74.252 231.833 74.252C230.225 74.252 228.761 73.832 227.441 72.992C226.145 72.152 225.113 70.952 224.345 69.392C223.601 67.808 223.229 65.972 223.229 63.884ZM237.773 63.884C237.773 62.588 237.413 61.568 236.693 60.824C235.997 60.08 235.133 59.708 234.101 59.708C233.045 59.708 232.169 60.08 231.473 60.824C230.777 61.544 230.429 62.564 230.429 63.884C230.429 65.18 230.777 66.212 231.473 66.98C232.169 67.724 233.045 68.096 234.101 68.096C235.133 68.096 235.997 67.724 236.693 66.98C237.413 66.236 237.773 65.204 237.773 63.884ZM261.485 67.988V74H258.425C253.265 74 250.685 71.444 250.685 66.332V59.672H248.201V53.804H250.685V48.908H257.777V53.804H261.449V59.672H257.777V66.44C257.777 66.992 257.897 67.388 258.137 67.628C258.401 67.868 258.833 67.988 259.433 67.988H261.485ZM284.738 63.668C284.738 64.22 284.702 64.772 284.63 65.324H271.274C271.346 66.428 271.646 67.256 272.174 67.808C272.726 68.336 273.422 68.6 274.262 68.6C275.438 68.6 276.278 68.072 276.782 67.016H284.306C283.994 68.408 283.382 69.656 282.47 70.76C281.582 71.84 280.454 72.692 279.086 73.316C277.718 73.94 276.206 74.252 274.55 74.252C272.558 74.252 270.782 73.832 269.222 72.992C267.686 72.152 266.474 70.952 265.586 69.392C264.722 67.832 264.29 65.996 264.29 63.884C264.29 61.772 264.722 59.948 265.586 58.412C266.45 56.852 267.65 55.652 269.186 54.812C270.746 53.972 272.534 53.552 274.55 53.552C276.542 53.552 278.306 53.96 279.842 54.776C281.378 55.592 282.578 56.768 283.442 58.304C284.306 59.816 284.738 61.604 284.738 63.668ZM277.538 61.904C277.538 61.04 277.25 60.368 276.674 59.888C276.098 59.384 275.378 59.132 274.514 59.132C273.65 59.132 272.942 59.372 272.39 59.852C271.838 60.308 271.478 60.992 271.31 61.904H277.538ZM278.906 48.728L269.906 52.256V47.468L278.906 43.4V48.728ZM295.401 57.368C296.193 56.216 297.153 55.304 298.281 54.632C299.409 53.96 300.621 53.624 301.917 53.624V61.148H299.937C298.401 61.148 297.261 61.448 296.517 62.048C295.773 62.648 295.401 63.692 295.401 65.18V74H288.345V53.804H295.401V57.368ZM308.731 51.932C307.483 51.932 306.475 51.596 305.707 50.924C304.963 50.228 304.591 49.364 304.591 48.332C304.591 47.276 304.963 46.4 305.707 45.704C306.475 45.008 307.483 44.66 308.731 44.66C309.955 44.66 310.939 45.008 311.683 45.704C312.451 46.4 312.835 47.276 312.835 48.332C312.835 49.364 312.451 50.228 311.683 50.924C310.939 51.596 309.955 51.932 308.731 51.932ZM312.223 53.804V74H305.167V53.804H312.223ZM315.809 63.884C315.809 61.796 316.181 59.972 316.925 58.412C317.693 56.852 318.725 55.652 320.021 54.812C321.341 53.972 322.805 53.552 324.413 53.552C325.805 53.552 327.005 53.828 328.013 54.38C329.021 54.932 329.801 55.676 330.353 56.612V53.804H337.409V74H330.353V71.192C329.801 72.128 329.009 72.872 327.977 73.424C326.969 73.976 325.781 74.252 324.413 74.252C322.805 74.252 321.341 73.832 320.021 72.992C318.725 72.152 317.693 70.952 316.925 69.392C316.181 67.808 315.809 65.972 315.809 63.884ZM330.353 63.884C330.353 62.588 329.993 61.568 329.273 60.824C328.577 60.08 327.713 59.708 326.681 59.708C325.625 59.708 324.749 60.08 324.053 60.824C323.357 61.544 323.009 62.564 323.009 63.884C323.009 65.18 323.357 66.212 324.053 66.98C324.749 67.724 325.625 68.096 326.681 68.096C327.713 68.096 328.577 67.724 329.273 66.98C329.993 66.236 330.353 65.204 330.353 63.884ZM350.754 74.252C348.93 74.252 347.298 73.952 345.858 73.352C344.442 72.728 343.314 71.888 342.474 70.832C341.658 69.752 341.202 68.54 341.106 67.196H347.946C348.042 67.844 348.342 68.348 348.846 68.708C349.35 69.068 349.974 69.248 350.718 69.248C351.294 69.248 351.75 69.128 352.086 68.888C352.422 68.648 352.59 68.336 352.59 67.952C352.59 67.448 352.314 67.076 351.762 66.836C351.21 66.596 350.298 66.332 349.026 66.044C347.586 65.756 346.386 65.432 345.426 65.072C344.466 64.712 343.626 64.124 342.906 63.308C342.21 62.492 341.862 61.388 341.862 59.996C341.862 58.796 342.186 57.716 342.834 56.756C343.482 55.772 344.43 54.992 345.678 54.416C346.95 53.84 348.474 53.552 350.25 53.552C352.89 53.552 354.966 54.2 356.478 55.496C357.99 56.792 358.866 58.496 359.106 60.608H352.734C352.614 59.96 352.326 59.468 351.87 59.132C351.438 58.772 350.85 58.592 350.106 58.592C349.53 58.592 349.086 58.7 348.774 58.916C348.486 59.132 348.342 59.432 348.342 59.816C348.342 60.296 348.618 60.668 349.17 60.932C349.722 61.172 350.61 61.424 351.834 61.688C353.298 62 354.51 62.348 355.47 62.732C356.454 63.116 357.306 63.74 358.026 64.604C358.77 65.444 359.142 66.596 359.142 68.06C359.142 69.236 358.794 70.292 358.098 71.228C357.426 72.164 356.454 72.908 355.182 73.46C353.934 73.988 352.458 74.252 350.754 74.252Z" fill="black"/>
            </g>
            <defs>
            <filter id="filter0_d_866_842" x="0" y="0" width="562" height="130" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="5" dy="8"/>
            <feGaussianBlur stdDeviation="2"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_866_842"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_866_842" result="shape"/>
            </filter>
            </defs>
            </svg>
        </div> --}}
          
  
      </div>
  
  
      {{-- <div class="d-flex flex-column flex-md-row align-items-center justify-content-md-around">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 250px;">
          <img class="card-img-top p-2" src="{{asset('imgs/svg/img-materia.svg')}}" alt="">
          <p class="card-body">BNHA001 - Prática de Defesa</p>
        </div> 
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 250px;">
          <img class="card-img-top p-2" src="{{asset('imgs/svg/materia-2.svg')}}" alt="">
          <p class="card-body">BNHA002 - Educação Fisíca</p>
        </div>
      </div> --}}
  
    </div>

<div id="disqus_thread" class="container"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://avaliaunb.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection