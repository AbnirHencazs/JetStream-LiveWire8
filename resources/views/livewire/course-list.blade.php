<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
        <x-tarjeta-curso :course="$course"/>
    @endforeach
</div>
