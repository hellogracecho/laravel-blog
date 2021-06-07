@props(['trigger'])
<div x-data="{ show: false }" @click.away="show=false">
    <!-- trigger -->
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    <!-- links -->
    <div x-show="show" class="apperance-none lg:absolute mt-2 py-2 w-full bg-gray-100 rounded-xl z-50">
      {{ $slot }}
    </div>
</div>