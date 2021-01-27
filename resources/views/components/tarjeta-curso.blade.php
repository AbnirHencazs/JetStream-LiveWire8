<div class="bg-white shadow-lg rounded-lg px-4 py-6">
    <a href="{{ route('course', $course->slug) }}">
        <img src="{{ $course->image }}" alt="{{ $course->slug }}" class="rounded-md mb-2">
        <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
        <p class="text-md text-gray-500">{{ $course->excerpt }}</p>
        <!--excerpt será un campo virtual ya que no existe en la tabla pero lo utilizaremos desde laravel-->

        <img src="{{ $course->user->avatar }}" alt="{{ $course->user->name }}" class="rounded-full mx-auto h16 w-16">
    </a>
</div>