@extends('default_components.main')

@extends("default_components.navbar")

@php
    
@endphp
@section('content')
    <div class="container">
        <h1>{{$nome}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis necessitatibus asperiores consequuntur repudiandae similique ullam ut accusantium? Iusto minus maxime placeat doloremque, magnam quidem animi qui repudiandae quod voluptates!</p>
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