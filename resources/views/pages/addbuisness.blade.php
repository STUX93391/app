<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Buisness') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
               {!! Form::open(['route'=>'subbuisness']) !!}
                    {!! Form::token() !!}

                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', '', ['placeholder'=>'Business Title','class'=>'form-input']) !!}

                    {!! Form::label('address', 'Address') !!}
                    {!! Form::text('address', '', ['placeholder'=>'Business Address','class'=>'form-input']) !!}

                    {!! Form::label('contact', 'Contact') !!}
                    {!! Form::text('contact', '', ['placeholder'=>'Business Contact','class'=>'form-input']) !!}

                    {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
               {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
