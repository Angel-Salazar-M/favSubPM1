@props(['titulo', 'type', 'nombre'])
<div class="text-white flex justify-center mb-3 mt-3">
    <h1 class="mr-4">{{ $nombre }}</h1>
    <input type={{ $type }}  class="justify-self-center border-2 w-80 border-slate-200 bg bg-slate-200 rounded-lg px-2 py-2 mt-2 mb-4 text-black font-bold">

    @error( $nombre )
    <p>{{ $message }}</p>
    @enderror
</div>
