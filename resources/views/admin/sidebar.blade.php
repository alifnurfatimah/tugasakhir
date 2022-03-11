<nav class="navbar navbar-dark bg-dark active">     
    <a class="navbar-brand pl-4 float-start" href="#">         
        <img src="{{asset('images/logo.png')}}" />     
    </a> 
 
    <!-- Tombol hide sidebar -->     
    <a @click="navOpen = !navOpen" style="cursor:pointer" class="mr-3 floatend">         
    <span class="btn-close btn-close-white float-end"></span>     
</a> 
</nav> 
<ul class="nav">     
    <!-- Menu item -->     
    <x-menu-link route="admin.dashboard" icon="fas fa-tachometeralt">Dashboard</x-menu-link>     
    <x-menu-dropdown icon="fas fa-database" label="Master">         
        <x-menu-link route="admin.jurusan" icon="fas fa-caretright">Jurusan</x-menu-link> 
        <x-menu-link route="admin.periode" icon="fas fa-caretright">Periode</x-menu-link>     
    </x-menu-dropdown>     
    <x-menu-link route="admin.pendaftar" icon="fas fa-user-edit">PPDB</x-menulink>     
    <x-menu-link route="admin.informasi" icon="fas fa-file-alt">Informasi</xmenu-link>     
    <x-menu-link route="admin.slide" icon="fas fa-image">Slide</x-menu-link>     
    <x-menu-link route="admin.widget" icon="fas fa-puzzle-piece">Widget</x-menu-link>
</ul> 