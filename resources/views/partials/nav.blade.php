<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Tableau de bord</a> </div>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input input placeholder-theme-13" placeholder="Recherche...">
            <i data-feather="search" class="search__icon"></i> 
        </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8 relative">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
            <img alt="Evote" src="{{ asset('storage/dist/images/profile-12.jpg') }}">
        </div>
        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
            <div class="dropdown-box__content box bg-theme-38 text-white">
                <div class="p-4 border-b border-theme-40">
                    <div class="font-medium">Forester CODJO</div>
                    {{-- <div class="text-xs text-theme-41">Software Engineer</div> --}}
                </div>
                <div class="p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Votre profil </a>
                    {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a> --}}
                    {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a> --}}
                    {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a> --}}
                </div>
                <div class="p-2 border-t border-theme-40">
                    <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Déconnexion </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>