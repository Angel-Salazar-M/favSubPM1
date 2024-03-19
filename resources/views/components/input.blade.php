@props(['titulo', 'type', 'nombre'])
<div class="">
    <label class="pr-2">{{$titulo}}</label>
    <input type={{ $type }} name={{ $nombre }} class="border-2 border-black rounded-lg px-5 py-3 mt-2 mb-2">

    @error( $nombre )
    <p>{{ $message }}</p>
    @enderror
</div>
