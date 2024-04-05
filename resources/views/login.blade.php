<x-layout>
    <div class="bg bg-black">

        <div class="grid place-content-center h-screen">
            <div class="w-[500px]">
                <h1 class="text text-5xl text-center uppercase font-bold font text-white ">Sign In</h1>
            </div>
            <form action="/login" method="POST" class="flex flex-col justify-center my-12">
                @csrf
                <div>
                    <x-input titulo="Email" type="text" nombre="email" />
                </div>
                <div>
                    <x-input titulo="Password" type="password" nombre="password" />
                </div>
                <div class="flex justify-center">
                <button type="submit"
                    class="border-2 border-black rounded-lg bg bg-lime-600 font-semibold w-96 py-2 mt-8 text-white">Sign
                    In</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
