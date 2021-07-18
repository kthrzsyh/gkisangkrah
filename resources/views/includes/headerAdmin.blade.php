<section class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-8 border-b" style="background-color: #141432">

    <div style="font-family: 'Poppins', sans-serif">
        <div class="mx-auto flex flex-wrap flex-row items-center justify-between">
            <a class="flex font-medium items-center" href="/">
                <img src="{{asset('/assets/img/logo.png')}}" width="42" height="42" alt="">
            </a>

            <label for="menu-toggle-1-2" class="cursor-pointer lg:hidden block">
                <svg class="w-6 h-6" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>

            <input class="hidden" type="checkbox" id="menu-toggle-1-2" />

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center" id="menu-1-2">
                <nav class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                    @if(auth()->user()->role == 'superadmin')
                    <a class="block cursor-pointer nav-1-2" href="/admin/user">Users</a>
                    @endif
                    <a class="block cursor-pointer nav-1-2" href="/admin/warta">Warta</a>
                    <a class="block cursor-pointer nav-1-2" href="/admin/pdt">Pendeta</a>
                    <a class="block cursor-pointer nav-1-2" href="/admin/gallery">Gallery</a>
                    @if(auth()->check())
                    <a href="/logout" style="text-align: center;" class="block btn-fill-1-2 items-center border-0 py-3 px-8 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
                        Logout
                    </a>
                    @else
                    <a href="/login" style="text-align: center;" class="block btn-fill-1-2 items-center border-0 py-3 px-8 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
                        Login
                    </a>
                    @endif

                </nav>
            </div>
        </div>
    </div>
</section>