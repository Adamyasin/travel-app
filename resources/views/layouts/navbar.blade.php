<nav class="bg-blue-600 p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-lg font-semibold">Travel App</h1>

        <!-- Dropdown Logout -->
        <div class="relative">
            <button id="user-menu" class="text-white focus:outline-none">
                {{ Auth::user()->name }} ▼
            </button>
            <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-40 bg-white rounded shadow-lg">
                <form method="POST" action="{{ route('logout') }}" class="p-2">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('user-menu').addEventListener('click', function() {
        const dropdownMenu = document.getElementById('dropdown-menu');
        dropdownMenu.classList.toggle('hidden');
    });
</script>
