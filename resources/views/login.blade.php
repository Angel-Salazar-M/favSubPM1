<x-layout>
    <div class="grid place-content-center h-screen">
    <h1 class="text text-5xl text-center uppercase font-bold">Log In</h1>
    <form action="/login" method="POST" class="flex flex-col justify-center my-12">
        @csrf
        <div >
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>
        <button type="submit" class="border-2 border-black rounded-lg bg bg-blue-200 font-semibold px-5 py-2 mt-8 ">Log In</button>
    </form>
    </div>
</x-layout>
