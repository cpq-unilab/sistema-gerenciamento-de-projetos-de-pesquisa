<div class="relative bg-indigo-600">
    <div class="max-w-screen-2xl mx-auto md:px-4 lg:px-6">
        <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{route('admin.dashboard')}}">
                    <img class="h-10 bg-white rounded p-2 w-auto sm:h-16 " src="{{asset('images/logo-proppg.jpg')}}"
                        alt="Workflow">
                </a>
            </div>

            <a href="{{route('admin.dashboard')}}">
                <h2 class="m-0 text-white">Área administrativa</h2>
            </a>

            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="#" class="whitespace-nowrap text-base font-medium text-white hover:text-gray-200">
                    {{ Auth::user()->name }}
                </a>
                <a href="#"
                    class="ml-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
