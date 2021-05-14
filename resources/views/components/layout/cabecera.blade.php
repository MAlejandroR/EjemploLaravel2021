<header {{$attributes->merge(["class"=>"flex flex-row justify-between p-4"])   }}>
    <img src="{{asset('images/logo.png')}}" alt="Logo">
    <h1 class="text-enlaces text-6xl">CPI FP Los Enlaces</h1>
    @auth
        <div>
        <h2 class="text-green-50">Registrado como {{auth()->user()->name}}</h2>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <input type="submit" value="Logout">
        </form>
        </div>

    @endauth
    @guest
        <div>
        <x-form.a destino="{{ route('login') }}" >
            Login
        </x-form.a>
            <x-form.a destino="{{ route('register') }}" >
            Registrarme
        </x-form.a>
        </div>
    @endguest
</header>


