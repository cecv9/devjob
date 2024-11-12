<form class="md:w-1/2 space-y-5" >
<!-- Email Address -->
        <div>
            <x-input-label for="titulo" :value="__('Titulo Vacante')" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" placeholder="Titulo Vacante"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="salario" :value="__('Salario Mensual')" />
            <select id="salario" name="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option>--Seleccione--</option>
            @foreach ($salarios as $salario )
                <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
            </select>
            
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div>
            <x-input-label for="categoria" :value="__('Categoria')" />
            <select id="categoria" name="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option>--Seleccione--</option>
            @foreach ($categorias as $categoria )
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
            </select>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="empresa" :value="__('Empresa')" />
            <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" placeholder="Empresa ej. Netflix, Uber , Shopify"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="ultimo_dia" :value="__('Ultimo Dia para psotularse')" />
            <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div>
            <x-input-label for="descripcion" :value="__('Descripcion del Puesto')" />
          <textarea name="descripcion" id="" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72">

          </textarea>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div>
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <x-primary-button>
            Crear Vacante
        </x-primary-button>

        
</form>
