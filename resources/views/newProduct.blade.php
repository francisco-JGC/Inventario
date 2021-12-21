<link rel="stylesheet" href="{{ asset('style/newProduct.css') }}">

<x-app-layout>    
    <x-slot name="slot">
        <div class="content-new_product">
            <div class="product-tittle">
                <h3>{{__('Nuevo Producto')}}</h3>
            </div>
            <form class="data-product" id="form">
                <input type="submit" value="{{__('Guardar')}}" class="button">
                <div class="name data-box">
                    <label for="name">{{__('Nombre')}} <ion-icon name="alert-circle-outline" class="icon"></label><br>
                    <input type="text" name="name" id="name" autofocus>
                </div>
                <div class="desc data-box">
                    <label for="desc">{{__('Descripción')}} <ion-icon name="alert-circle-outline" class="icon">
                    </label><br>
                    <textarea name="desc" id="desc"></textarea>
                </div>
                <div class="img data-box">
                    <label for="">{{__('Imagen de portada')}} <ion-icon name="alert-circle-outline" class="icon">
                            </label><br>
                    <input type="file" name="img" id="img">
                    <div>
                        <label for="img"><ion-icon name="cloud-upload-outline" class="icon"></ion-icon> {{__('Seleccionar imagen')}}</label><br>

                        <img id="render-img">
                    </div>
                    <br>
                </div>
                <div class="extra-price data-box">
                    <div>
                        <label for="price">{{__('Precio')}} <ion-icon name="alert-circle-outline" class="icon">
                        </label><br>
                        <input type="number" name="price" id="price"><br>
                    </div>
                    <div>

                        <label for="amount">{{__('Cantidad')}} <ion-icon name="alert-circle-outline" class="icon">
                        </label><br>
                        <input type="number" name="amount" id="amount"><br>
                    </div>

                    <div>
                        <label for="priceU">{{__('Precio Unitario')}} <ion-icon name="alert-circle-outline" class="icon">
                        </label><br>
                        <input type="number" name="priceU" id="priceU"></div>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>

<script src="{{ asset('js/UI_newproduct.js') }}"></script>
