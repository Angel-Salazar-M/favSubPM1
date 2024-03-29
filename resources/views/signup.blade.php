<x-layout>
<div class="grid place-content-center h-screen">
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1 class="text text-5xl text-center uppercase font-bold">Sign up</h1>
    <form action="/register" method="POST" class="flex flex-col justify-center my-12">
        @csrf
    <x-input titulo="Name" type="text" nombre="name"/>
    <x-input titulo="Email" type="text" nombre="Email"/>
    <x-input titulo="Password" type="password" nombre="password"/>
    <x-input titulo="Birthday" type="date" nombre="birthday"/>
<button type="submit" class="border-2 border-black rounded-lg bg bg-blue-200 font-semibold px-5 py-2 mt-8 ">Submit</button>
    </form>
</div>
</x-layout>
