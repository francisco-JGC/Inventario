<div class="nav">
    <div class="toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="nav-logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </div>
    <div class="nav-links" id="nav-links">
        <li>
            <a href="{{ route('dashboard') }}" class="link" data="/dashboard">
                <ion-icon class="icon" name="home-outline"></ion-icon>
                <span>
                    {{ __('Inicio') }}
                </span>
            </a>
        </li>

        <li>
            <a href="{{ route('nuevo_producto') }}" class="link" data="/nuevo_producto">
                <ion-icon class="icon" name="duplicate-outline"></ion-icon>
                <span>
                    {{ __('Nuevo Producto') }}
                </span>
            </a>
        </li>

        <li>
            <a href="{{ route('inventario') }}" class="link" data="/inventario">
                <ion-icon class="icon" name="grid-outline"></ion-icon>
                <span>
                    {{ __('Inventario') }}
                </span>
            </a>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">

                    <ion-icon class="icon" name="log-out-outline"></ion-icon>

                    <span>
                        {{ __('Cerrar Sesion') }}
                    </span>
                </x-dropdown-link>
            </form>
        </li>
    </div>


    <div class="dark-mode">
        <input type="checkbox" name="dark-mode" id="dark-mode">
        <label for="dark-mode">
            <ion-icon class="icon" name="sunny-outline"></ion-icon>
            <span>
                {{ __('Claro') }}
            </span>
        </label>
        <label for="dark-mode" class="indicator"></label>
        <label for="dark-mode">
            <ion-icon class="icon" name="moon-outline"></ion-icon>
            <span>
                {{ __('Oscuro') }}
            </span>
        </label>
    </div>
</div>
