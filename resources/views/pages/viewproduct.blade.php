<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Products') }}
        </h2>
        <a class="btn btn-primary" href="{{route('addproduct',$id)}}">Add Product</a>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Business ID</th>
                            <th>Title</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($listpro->count())
                            @foreach($listpro as $pro)
                                <tr>
                                    <td>{{$pro->id}}</td>
                                    <td>{{$pro->buisness_id}}</td>
                                    <td>{{$pro->title}}</td>
                                    <td>{{$pro->code}}</td>
                                    <td>{{$pro->type}}</td>
                                    <td>{{$pro->price}}</td>
                                    <td>
                                        <form action="{{route('deleteproduct',$pro->id)}}" method="post">
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('buyproduct',$pro->id)}}" method="post">
                                            @csrf
                                            <input type="submit" value="Buy" class="btn btn-info">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{$listpro->links()}}
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
