@extends('default_components.main')

@section('content')

<div class="text-center mt-5">
    <h1 class="mt-5 pt-5 text-center">Estamos em Construção</h1>
    {{-- <img src="https://pm1.aminoapps.com/6499/8b4935d8cdc8ae85db31b78bb3f20e0148ad92c6_hq.jpg" width="500px" height="auto" class="" alt=""> --}}
    <img src="https://66.media.tumblr.com/dddcf283cd2c8cbdb861a967bea6c4d8/tumblr_pwuoldlVGN1yqb8n1o1_500.gif" width="auto" style="max-width: 300px" height="auto" class="" alt="">
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