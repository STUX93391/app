<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Buisness') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form action="{{route('subbuisness')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="title" class="">Title</label><br>
                            <input type="text" id="title" class="form-control" name="title"><br>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="address" class="">Address</label><br>
                            <input type="text" id="address" class="form-control" name="address"><br>
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="contact" class="">Contact</label><br>
                            <input type="text" id="contact" class="form-control" name="contact"><br>
                            @if ($errors->has('contact'))
                                <span class="text-danger">{{ $errors->first('contact') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Create">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
