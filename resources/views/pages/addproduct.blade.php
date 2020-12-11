<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {!! Form::open(['route'=>'subproduct']) !!}
                    {!! Form::token() !!}
                    {!! Form::hidden('buisness_id', $id) !!}
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', '', ['placeholder'=>'Product Title','class'=>'form-input']) !!}

                    {!! Form::label('code', 'Code') !!}
                    {!! Form::text('code', '', ['placeholder'=>'Product Code','class'=>'form-input']) !!}

                    {!! Form::label('type', 'Type') !!}
                    {!! Form::text('type', '', ['placeholder'=>'Product Type','class'=>'form-input']) !!}



                    {!! Form::label('price', 'Price') !!}
                    {!! Form::text('price', '', ['placeholder'=>'Product Price','class'=>'form-input']) !!}

                    {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
