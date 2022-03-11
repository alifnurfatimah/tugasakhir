<!doctype html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>     
        <meta charset="utf-8">     
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <!-- CSRF Token -->     
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 
    <title>{{ config('app.name', 'Laravel') }}</title> 
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer data-turbolinkstrack="reload"></script> 
 
    <!-- Fonts -->     
    <link rel="dns-prefetch" href="//fonts.gstatic.com">     
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="styleshee t"> 

    <!-- Styles -->     
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" data-turbolinkstrack="reload">        
    
    <!-- Style plugin pikaday dan quill -->     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pika day.css">     
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" > 
 
    @livewireStyles 
</head> 
<body> 
<!-- Buat data navOpen dengan alpine js dan disimpan datanya pada  local storage --> 
<div x-data="{ 'navOpen' : JSON.parse(localStorage.getItem('nav')) || false }"      
    x-init="$watch('navOpen', (val) => localStorage.setItem('nav', val))"> 
 
 <!-- class open disesuaikan dengan nilai data navOpen -->     
 <div id="app" class="wrapper position-relative" x-
 bind:class="{ 'open' : navOpen}">         
 <div class="sidebar bg-secondary">             
     @include('layouts.admin.sidebar') <!-- include sidebar -->         
    </div>
    
    <div class="content">               
        @include('layouts.admin.header') <!-- include header -->   
            
        <main class="page-content p-4">                                             
                
            @if(isset($header)) <!-- Hanya ditampilkan jika slot header            dibuat pada konten halaman -->                      
            <div class="d-flex justify-content-between pt-2">                         
                <div><h3 class="p-3">{{ $header }}</h3></div>                         
                <div>                             
                    <nav class="p-3" aria-label="breadcrumb">                                 
                        <ol class="breadcrumb">                                     
                            <li class="breadcrumbitem"><a href="/admin/">Home</a></li>
                            <li class="breadcrumb-item active" ariacurrent="page">{{$header}}</li>                                 
                        </ol>                             
                    </nav>                         
                </div>                     
            </div>                 
            @endif                                  
            
            {{ $slot }} <!-- tempat konten halaman -->              
        </main>         
    </div>     
</div> 
</div>     
@stack('scripts') 
    @livewireScripts 
 
    <!-- skrip turbolink adapter untuk livewire -->     
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/l ivewire-turbolinks.js" data-turbolinks-eval="false" data-turboeval="false"></script>          
    
    <!-- skrip plugin pikaday dan quill -->     
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>     
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> 
</body> 
</html>