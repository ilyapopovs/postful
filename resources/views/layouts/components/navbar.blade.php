<nav class="sm:sticky top-0 p-6 bg-theme-primary">
    <div class="container flex justify-between">
        <ul class="h-full flex items-stretch">
            <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="{{ route('posts') }}" class="p-3">Posts</a></li>
        </ul>
        <ul class="h-full flex items-stretch">
            @auth
                <li><a href="" class="p-3">{{ auth()->user()->name }}</a></li>
                <li>
                    <form class="inline p-3" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </div>
</nav>