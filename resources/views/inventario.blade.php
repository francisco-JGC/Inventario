<link rel="stylesheet" href="{{ asset('style/inventario.css') }}">

<x-app-layout>
    <x-slot name="slot">
        <div class="content-inventario">
            <div class="content-inventario-header">
                <div class="search">
                    <form>
                        <h4>{{__('Inventario')}}</h4>
                        <div>
                            <button type="submit">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                            <input type="text" name="search" placeholder="{{__('Buscar...')}}">
                        </div>
                    </form>
                </div>
                <div class="head">
                    <input type="checkbox" name="" id="checkbox_all">
                    <div class="name">
                        <h3>{{__('Producto')}}</h3>
                    </div>
                    <div class="other">
                        <h3>{{__('Precio')}}</h3>
                        <h3>{{__('Fecha')}}</h3>
                        <h3>{{__('Estado')}}</h3>
                        <h3></h3>
                    </div>
                </div>
            </div>

            <div class="content-inventario-body">
                <div class="item">
                    <input type="checkbox" name="" id="checkbox_unique">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" alt="">
                        </div>
                        <div class="product-desc">
                            <span>{{__('titulo')}}</span>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="price">
                            <span>{{__('C$ 399')}}</span>
                        </div>
                        <div class="date">
                            <span>{{__('hace 2 horas')}}</span>
                        </div>
                        <div class="state">
                            <button>{{__('Activo')}}</button>
                        </div>
                        <div class="option">
                            <a href="#">
                            <ion-icon name="brush-outline"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <input type="checkbox" name="" id="checkbox_unique">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" alt="">
                        </div>
                        <div class="product-desc">
                            <span>{{__('titulo')}}</span>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="price">
                            <span>{{__('C$ 399')}}</span>
                        </div>
                        <div class="date">
                            <span>{{__('hace 2 horas')}}</span>
                        </div>
                        <div class="state">
                            <button>{{__('Activo')}}</button>
                        </div>
                        <div class="option">
                            <a href="#">
                            <ion-icon name="brush-outline"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <input type="checkbox" name="" id="checkbox_unique">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" alt="">
                        </div>
                        <div class="product-desc">
                            <span>{{__('titulo')}}</span>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="price">
                            <span>{{__('C$ 399')}}</span>
                        </div>
                        <div class="date">
                            <span>{{__('hace 2 horas')}}</span>
                        </div>
                        <div class="state">
                            <button>{{__('Activo')}}</button>
                        </div>
                        <div class="option">
                            <a href="#">
                            <ion-icon name="brush-outline"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <input type="checkbox" name="" id="checkbox_unique">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" alt="">
                        </div>
                        <div class="product-desc">
                            <span>{{__('titulo')}}</span>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="price">
                            <span>{{__('C$ 399')}}</span>
                        </div>
                        <div class="date">
                            <span>{{__('hace 2 horas')}}</span>
                        </div>
                        <div class="state">
                            <button>{{__('Activo')}}</button>
                        </div>
                        <div class="option">
                            <a href="#">
                            <ion-icon name="brush-outline"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <input type="checkbox" name="" id="checkbox_unique">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" alt="">
                        </div>
                        <div class="product-desc">
                            <span>{{__('titulo')}}</span>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="price">
                            <span>{{__('C$ 399')}}</span>
                        </div>
                        <div class="date">
                            <span>{{__('hace 2 horas')}}</span>
                        </div>
                        <div class="state">
                            <button>{{__('Activo')}}</button>
                        </div>
                        <div class="option">
                            <a href="#">
                            <ion-icon name="brush-outline"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-inventario-footer">
                <span><ion-icon name="checkmark-done-outline"></ion-icon> <span id="selected-item">{{__('3')}}</span>{{__(' Productos seleccionados')}}</span>
                <button><ion-icon name="trash-outline"></ion-icon> {{__('Eliminar')}}</button>
            </div>
        </div>


    </x-slot>
</x-app-layout>

<script src="{{ asset('js/UI_inventario.js') }}"></script>
