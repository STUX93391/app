<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="container bg-white shadow-xl sm:rounded-lg">
            <form action="{{route('subaccount')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <div class="col-xs-4">
                                <input type="text" id="title" class="form-control" name="title"placeholder="Account Title">
                            </div>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="type">Select type:</label>
                            <div class="col-xs-4">
                                <select class="form-control" id="type" name="type">
                                  <option>Basic</option>
                                  <option>Premium</option>
                                  <option>Silver</option>
                                  <option>Gold</option>
                            </select>
                            </div>
                            @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="number">Number</label>
                            <div class="col-xs-4">
                                <input type="text" id="number" class="form-control" name="number"placeholder="Account Number">
                            </div>
                            @if ($errors->has('number'))
                                <span class="text-danger">{{ $errors->first('number') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="balance">Balance</label>
                            <div class="col-xs-4">
                                <input type="integer" id="balance" class="form-control" name="balance"placeholder="Buisness Contact">
                            </div>
                            @if ($errors->has('balance'))
                                <span class="text-danger">{{ $errors->first('balance') }}</span>
                            @endif
                        </div>
                    </div>
                        <div class="form-group">
                            <input type="submit" value="Add" class="btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
    </div>
</x-app-layout>
