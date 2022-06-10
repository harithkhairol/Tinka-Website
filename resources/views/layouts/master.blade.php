<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ env('APP_NAME') }} | @yield('title')</title>
  
  <!-- Favicons -->
  <link href="{{asset('assets/img/tinkablue.png')}}" rel="icon">
  <link href="{{asset('assets/img/tinkablue.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css	">

  <!-- Index Lightbox CSS File -->
  <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
  
  @stack('css')
  <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.tinka.world/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .fab-container{
        position:fixed;
        bottom:0px;
        right:50px;
        cursor:pointer;
        }

        #fab1{
          margin-right: 60px;
          margin-bottom: 100px;
        }

        .iconbutton{
        width:50px;
        height:50px;
        border-radius: 100%;
        background: #1DEE3A;
        box-shadow: 10px 10px 5px #aaaaaa;
        }

        .iconbutton i{
        display:flex;
        align-items:center;
        justify-content:center;
        height: 100%;
        color:white;
        }

        .button{
        width:60px;
        height:60px;
        background:#A11692;
        }

        .options{
        list-style-type: none;
        position:absolute;
        bottom:10px;
        right:0;
        }

        .options li{
        display:flex;
        justify-content:flex-end;
        padding:5px;
        }

        .btn-label{
        padding:2px 5px;
        margin-right:10px;
        align-self: center;
        user-select:none;
        background-color: #00a99d;
        color:white;
        border-radius: 3px;
        width: 110px;
        text-align: center;
        box-shadow: 10px 10px 5px #aaaaaa;
        }

        * {
        box-sizing: border-box;
        }

        .column {
        float: right;
        width: 33.33%;
        padding: 1px;
        }

        /* Clearfix (clear floats) */
        .row::after {
        content: "";
        clear: both;
        display: table;
        }

        a { 
            text-decoration: none; 
            color: white;
        }

        div.fill-screen {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            text-align: center;
        }
        img.make-it-fit {
            max-width: 99%;
            max-height: 99%;
        }

        
    </style>

</head>
<body>
  @yield('content')

   <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  
  <script type="text/javascript">
    // Get the button, and when the user clicks on it, execute myFunction
    document.getElementById("lang-en").onclick = function() {
      window.location.href = "{{ route('language.switch', 'en') }}";
    };

    document.getElementById("lang-my").onclick = function() {
      window.location.href = "{{ route('language.switch', 'ms') }}";
    };
  </script>
  
<!--   <script>
    (function(d,t) {
      var BASE_URL="https://chat.tinka.world";
      var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=BASE_URL+"/packs/js/sdk.js";
      s.parentNode.insertBefore(g,s);
      g.onload=function(){
        window.chatwootSDK.run({
          websiteToken: 'YAdBRtEWsFLEfSc6dUMSg5D5',
          baseUrl: BASE_URL
        })
      }
    })(document,"script");
  </script> -->

<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '220494408726921');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=220494408726921&ev=PageView&noscript=1"/></noscript>  

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MJ9WKHCCYE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MJ9WKHCCYE');
</script>
  @stack('js')
</body>
</html>
