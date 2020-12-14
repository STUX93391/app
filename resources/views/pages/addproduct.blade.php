<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <form action="{{route('subproduct')}}" method="POST">
                @csrf
                <input type="hidden" name="buisness_id" value="{{$id}}">
                <div class="form-group row">
                    <div class="form-group">
                        <label for="title" >Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group">
                        <label for="code" >Code</label>
                        <input type="number" class="form-control" name="code">
                        @if ($errors->has('code'))
                            <span class="text-danger">{{$errors->first('code')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group">
                        <label for="type" >Type</label>
                        <input type="text" class="form-control" name="type">
                        @if ($errors->has('type'))
                            <span class="text-danger">{{$errors->first('type')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group">
                        <label for="price" >Price</label>
                        <input type="number" class="form-control" name="price">
                        @if ($errors->has('price'))
                            <span class="text-danger">{{$errors->first('price')}}</span>
                        @endif
                    </div>
                </div>
                    <input type="submit" class="btn btn-info" value="Add Product">
            </form>
        </div>
    </div>
</x-app-layout>
