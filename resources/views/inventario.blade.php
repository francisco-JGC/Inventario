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
                <div class="item" id="producto1" onclick="selectedItem(producto1,nombre1)">
                    <input type="checkbox" name="checkbox" id="nombre1" disabled="true">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" class="img">
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
                            <button onclick="updateItem(producto1,nombre1)">
                                <ion-icon name="brush-outline"></ion-icon>
                            </button>
                            <button onclick="removeItem(producto1,nombre1)">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item" id="producto2" onclick="selectedItem(producto2,nombre2)">
                    <input type="checkbox" name="checkbox" id="nombre2" disabled="true">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" class="img">
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
                            <button onclick="updateItem(producto2,nombre2)">
                                <ion-icon name="brush-outline"></ion-icon>
                            </button>
                            <button onclick="removeItem(producto2,nombre2)">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item" id="producto3" onclick="selectedItem(producto3,nombre3)">
                    <input type="checkbox" name="checkbox" id="nombre3" disabled="true">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" class="img">
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
                            <button onclick="updateItem(producto3,nombre3)">
                                <ion-icon name="brush-outline"></ion-icon>
                            </button>
                            <button onclick="removeItem(producto3,nombre3)">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item" id="producto4" onclick="selectedItem(producto4,nombre4)">
                    <input type="checkbox" name="checkbox" id="nombre4" disabled="true">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" class="img">
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
                            <button onclick="updateItem(producto4,nombre4)">
                                <ion-icon name="brush-outline"></ion-icon>
                            </button>
                            <button onclick="removeItem(producto4,nombre4)">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="item" id="producto5" onclick="selectedItem(producto5,nombre5)">
                    <input type="checkbox" name="checkbox" id="nombre5" disabled="true">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('img/fondo.jpg') }}" class="img">
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
                            <button onclick="updateItem(producto5,nombre5)">
                                <ion-icon name="brush-outline"></ion-icon>
                            </button>
                            <button onclick="removeItem(producto5,nombre5)">
                                <ion-icon class="icon" name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>

                
            </div>
            <div class="content-inventario-footer">
                <span><ion-icon name="checkmark-done-outline"></ion-icon> <span id="count-selected-item">{{__('0')}}</span>{{__(' Productos seleccionados')}}</span>
                <button><ion-icon name="trash-outline"></ion-icon> {{__('Eliminar')}}</button>
            </div>
        </div>

    </x-slot>
</x-app-layout>

<script src="{{ asset('js/UI_inventario.js') }}"></script>
