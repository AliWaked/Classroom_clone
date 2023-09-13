@props(['classroom'])
{{-- @dd(Route::is('classroom.')) --}}
<div class="meddle">
    <ul>
        <li>
            <a href="{{ route('classroom.show', $classroom->id) }}"
                class="{{ !Route::is('classroom.show') ?: 'active' }}">Streem</a>
        </li>
        <li>
            <a href="{{ route('classwork.index', $classroom->id) }}"
                class="{{ !Route::is('classwork.index') ?: 'active' }}">Classwork</a>
        </li>
        <li>
            <a href="{{route('classroom.people',$classroom->code)}}" class="{{ !Route::is('classroom.people') ?: 'active' }}">Pepole</a>
        </li>
        <li>
            <a href="" class="{{ !Route::is('classroom') ?: 'active' }}">Marks</a>
        </li>
    </ul>
</div>
