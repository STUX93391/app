<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Buisnesses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
               <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Account Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($all->count())
                            @foreach($all as $one)
                                <tr>
                                    <td>{{$one->buisness_id}}</td>
                                    <td>{{$one->title}}</td>
                                    <td>{{$one->address}}</td>
                                    <td>{{$one->contact}}</td>
                                    <td>{{$one->balance}}</td>
                                    <td><a class="btn btn-primary" href="{{URL::route('viewproducts',$one->buisness_id)}}">{{ __('View Products') }}</a></td>
                                    <td><a class="btn btn-danger" href="{{URL::route('deletebuisness',$one->buisness_id)}}">{{ __('Delete') }}</a></td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No results fount!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
