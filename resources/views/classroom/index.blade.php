<x-layout>
    <x-slot:navIcon>
        <span class="background" onclick="document.getElementById('class-type').classList.toggle('hidden');"><svg
                focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                <path d="M20 13h-7v7h-2v-7H4v-2h7V4h2v7h7v2z"></path>
            </svg>
            <div class="class-type hidden" id="class-type">
                <ul>
                    <li>
                        <a href="">Join class</a>
                    </li>
                    <li>
                        <a
                            onclick="document.getElementById('create-classroom').classList.remove('cancle-create-class')">Create
                            class</a>
                    </li>
                </ul>
            </div>
        </span>
        <span class="notification background">
            <i class="fa-regular fa-bell"></i>
        </span>
    </x-slot:navIcon>

    {{-- classrooms --}}
    <div class="container">
        <div class="cards">
            @forelse ($classrooms as $i => $classroom)
                <x-card :classroom="$classroom" :index="$i" />
            @empty
            @endforelse
        </div>
    </div>

    {{-- create classroom --}}
    <div class="create-classroom {{ $errors->any() ? '' : 'cancle-create-class' }}" id="create-classroom">
        <div class="overlay" onclick="this.parentNode.classList.add('cancle-create-class')"></div>
        <form action="{{ route('classroom.store') }}" method="post" class="content">
            @csrf
            <h4>Create class</h4>

            <x-form-control name='name' value="{{ old('name') }}" id='classroom' label='Class name (required)' />

            <x-form-control name='section' value="{{ old('section') }}" id='section' label='Section' />

            <x-form-control name='subject' value="{{ old('subject') }}" id='subject' label='Subject' />

            <x-form-control name='room' value="{{ old('room') }}" id='room' label='Room' />

            <div class="buttons">

                <x-button type='button' label='Cancle'
                    onclick="document.getElementById('create-classroom').classList.add('cancle-create-class')" />
                <x-button label='Create' />
            </div>
        </form>
    </div>

    <div class="create-classroom {{ $errors->any() ? '' : 'cancle-create-class' }}" id="edit-classroom">

    </div>
    <x-slot:script>
        <script>
            window.localStorage.setItem('theme', '#1111dbd1')
        </script>
    </x-slot:script>

</x-layout>
