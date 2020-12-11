<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <form action="{{route('subaccount')}}" method="POST">
                    @csrf
                    <input type="hidden" name="buisness_id" value="{{$busid}}">
                    <label for="title">Title</label><br>
                    <input type="text" id="title" name="title"placeholder="Account Title"><br>
                    <label for="type">Type</label><br>
                    <input type="text" id="type" name="type" placeholder="Account Type"><br>
                    <label for="number">Number</label><br>
                    <input type="text" id="number" name="number"placeholder="Account Number"><br>
                    <label for="balance">Balance</label><br>
                    <input type="integer" id="balance" name="balance"placeholder="Buisness Contact"><br>
                    <input type="submit" value="Add" class="btn btn-info">

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
