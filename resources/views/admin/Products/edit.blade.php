<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8">


        <div class="py-2 -my-2 overflow-x-auto ">
            <div class="inline-block p-4 bg-white min-w-full overflow-hidden align-middle border border-gray-200 shadow sm:rounded-lg">
               
                <form method="post" action="{{route('admin.products.update', $product->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du produit</label>
                            <input type="text" name="product_name" value="{{$product->product_name}}" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pcolor focus:border-pcolor block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor" placeholder="Nom du produit" required>
                        </div>
                        <div>
                            <label for="product_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ref</label>
                            <input type="text" name="product_code" value="{{$product->product_code}}" id="product_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pcolor focus:border-pcolor block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor" placeholder="Référence" required>
                        </div>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix du produit</label>
                            <input type="number" name="price" value="{{$product->price}}" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pcolor focus:border-pcolr block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor" placeholder="DZD" required>
                        </div>
                        <div>
                            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantité</label>
                            <input type="number" name="product_qty" value="{{$product->product_qty}}" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pcolor focus:border-pcolor block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor" placeholder="" required>
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégories</label>
                            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pcolor focus:border-pcolor block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="brands" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marques</label>
                            <select id="brands" name="brands" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pcolor focus:border-pcolor block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor">
                                <option selected>Choisissez la marque:</option>
                                @foreach ($brands as $brand)
                                    <option value="{{$brand->id}}" @if ($brand->id == $product->brand_id) selected @endif>{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2 w-full">
                            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>
                        <div>
                            
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image</label>
                            <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="image" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or WEBP.</p>
                             <img src="{{ Storage::url($product->product_thumbnail) }}" id="mainThumbnail" alt="">

                        </div>

                        <div class="col-span-2 w-full">
                            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>

                            @php
                            $product = \App\Models\Product::find($product->id);
                        @endphp
                        
                        <div class="w-full flex justify-between">
                            <div class="flex items-center">
                                <input id="new_arrival" name="new_arrival" type="checkbox" value="Nouvel arrivage" class="w-4 h-4 text-pcolor bg-gray-100 border-gray-300 rounded focus:ring-pcolor dark:focus:ring-pcolor dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @if ($product->new_arrival) checked @endif>
                                <label for="new_arrival" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nouvel arrivage</label>
                            </div>
                            <div class="flex items-center">
                                <input id="featured" name="featured" type="checkbox" value="Recommendé" class="w-4 h-4 text-pcolor bg-gray-100 border-gray-300 rounded focus:ring-pcolor dark:focus:ring-pcolor dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @if ($product->featured) checked @endif>
                                <label for="featured" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recommendé</label>
                            </div>
                        </div>

                            <div class="col-span-2 w-full">
                                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>

                        <div class="col-span-2 w-full">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pcolor focus:border-pcolor dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pcolor dark:focus:border-pcolor" placeholder="Écrivez votre description ici...">{{$product->description}}</textarea>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="text-white bg-pcolor focus:ring-4 focus:outline-none focus:ring-pcolor font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-pcolor dark:hover:bg-pcolor dark:focus:ring-pcolor">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>