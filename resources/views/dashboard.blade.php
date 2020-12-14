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
                                    <td>Rs {{$one->balance}}</td>
                                    <td>
                                        <form action="{{route('viewproducts',$one->buisness_id)}}" method="get">
                                            @csrf

                                            <input type="submit" value="View Products" class="btn btn-info">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('deletebuisness',$one->buisness_id)}}" method="post">
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                            {{$all->links()}}
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
