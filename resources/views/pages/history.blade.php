<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Operation</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($data->count())
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item->product}}</td>
                                    <td>{{$item->operation}}</td>
                                    <td>{{$item->time}}</td>
                                </tr>
                            @endforeach
                            {{$data->links()}}
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
