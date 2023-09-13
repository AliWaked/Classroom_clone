<x-layout>
    <section class="create-classwork">
        <form action="" method="post">
            @csrf
            <nav>
                <div class="left">
                    <div class="colse" onclick="document.querySelector('.create-classwork').classList.add('remove')"><svg
                            focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg></div>
                    <div class="icon">
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M hhikbc">
                            <path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7z"></path>
                            <path
                                d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04a2.008 2.008 0 0 0-1.44 1.19c-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z">
                            </path>
                        </svg>
                    </div>
                    <div class="header">Assigement</div>
                </div>
                <div class="right">
                    <div class="assign">
                        <button type="submit">Assign</button>
                    </div>
                    <div class="menu">
                        <div class="icon" onclick="document.querySelector('.menu > ul').classList.toggle('remove')">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                                <path d="M7 10l5 5 5-5H7z"></path>
                            </svg>
                        </div>
                        <ul class="remove">
                            <li>Assign</li>
                            <li>Schedule</li>
                            <li>Save draft</li>
                            <hr>
                            <li>Discard draft</li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="left">
                    <div
                        style="margin-right: 35px;background:#fff;padding:25px 15px;border:1px solid #66666633;border-radius: 5px; margin-top:35px; margin-bottom:25px;">
                        <x-form-control name='title' value="{{ old('name') }}" id='classwork_title'
                            label='Title' />
                        <div class="text-editor">
                            <div id="editorjs"></div>
                            <p class="title">Instructions (options)</p>
                        </div>
                    </div>
                    <div class="attach">
                        <div class="title">Attach</div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 192 192"
                                        height="192" viewBox="0 0 192 192" width="192">
                                        <rect fill="none" height="192" width="192" />
                                        <g>
                                            <g>
                                                <path
                                                    d="M128.33,122l7.59,26.17l19.89,21.42c0,0,0,0,0,0v0c2.69-1.55,4.98-3.8,6.59-6.59l18.48-32 c1.61-2.78,2.41-5.89,2.41-9l-28.38-5.5L128.33,122z"
                                                    fill="#EA4335" />
                                                <path
                                                    d="M123.48,18.41c-2.69-1.55-5.78-2.41-9-2.41H77.53c-3.2,0-6.32,0.88-9,2.41l0,0l7.96,26.81l19.44,20.64 L96,66l0,0l19.58-20.89L123.48,18.41C123.48,18.41,123.48,18.41,123.48,18.41C123.48,18.41,123.48,18.41,123.48,18.41z"
                                                    fill="#188038" />
                                                <path
                                                    d="M63.67,122l-28.33-6.5L8.72,122c0,3.1,0.8,6.2,2.4,8.99L29.6,163c1.61,2.78,3.9,5.03,6.59,6.59 l19.59-20.18L63.67,122L63.67,122z"
                                                    fill="#1967D2" />
                                                <path
                                                    d="M155.47,69l-25.4-44c-1.61-2.79-3.9-5.04-6.59-6.59L96,66l32.33,56h54.95c0-3.11-0.8-6.21-2.41-9 L155.47,69z"
                                                    fill="#FBBC04" />
                                                <path
                                                    d="M128.33,122H63.67l-27.48,47.59c2.69,1.55,5.78,2.41,9,2.41h101.61c3.22,0,6.31-0.86,9-2.41L128.33,122z"
                                                    fill="#4285F4" />
                                                <path
                                                    d="M96,66L68.53,18.41c-2.69,1.55-4.97,3.79-6.58,6.57l-50.83,88.05c-1.6,2.78-2.4,5.88-2.4,8.97h54.95L96,66 z"
                                                    fill="#34A853" />
                                            </g>
                                        </g>
                                        <g />
                                        <g />
                                        <g />
                                    </svg>
                                </div>
                                <div class="title">Drive</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 192 192"
                                        height="192" viewBox="0 0 192 192" width="192">
                                        <rect fill="none" height="192" width="192" />
                                        <g>
                                            <g>
                                                <path
                                                    d="M177.44,55.09c-1.96-7.31-7.72-13.08-15.03-15.03C149.17,36.5,96,36.5,96,36.5s-53.17,0-66.41,3.56 c-7.31,1.96-13.08,7.72-15.03,15.03C11,68.33,11,96,11,96s0,27.67,3.56,40.91c1.96,7.31,7.72,13.08,15.03,15.03 C42.83,155.5,96,155.5,96,155.5s53.17,0,66.41-3.56c7.31-1.96,13.08-7.72,15.03-15.03C181,123.67,181,96,181,96 S181,68.33,177.44,55.09z"
                                                    fill="#FF0000" />
                                                <polygon fill="#FFFFFF" points="79,121.5 123.17,96 79,70.5" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="title">YouTube</div>
                            </li>
                            <li>
                                <div class="icon create">
                                    <svg width="36" height="36" viewBox="0 0 36 36">
                                        <path fill="#34A853" d="M16 16v14h4V20z"></path>
                                        <path fill="#4285F4" d="M30 16H20l-4 4h14z"></path>
                                        <path fill="#FBBC05" d="M6 16v4h10l4-4z"></path>
                                        <path fill="#EA4335" d="M20 16V6h-4v14z"></path>
                                        <path fill="none" d="M0 0h36v36H0z"></path>
                                    </svg>
                                </div>
                                <div class="title">Create</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                        class=" NMm5M min-color">
                                        <path
                                            d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m4.41-7.59L11 7.83V16h2V7.83l2.59 2.59L17 9l-5-5-5 5 1.41 1.41z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="title">Upload</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                        class=" NMm5M min-color">
                                        <path
                                            d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2z">
                                        </path>
                                        <path d="M8 11h8v2H8z"></path>
                                    </svg>
                                </div>
                                <div class="title">Link</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="for">
                        <h4>For</h4>
                        <div class="content">
                            <div>
                                <div class="chose"
                                    onclick="document.getElementById('select-classroom-in-classwork').classList.toggle('remove')">
                                    test</div>
                                <div class="icon"
                                    onclick="document.getElementById('select-classroom-in-classwork').classList.toggle('remove')">
                                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                        class=" NMm5M">
                                        <path d="M7 10l5 5 5-5H7z"></path>
                                    </svg>
                                </div>
                                <ul class="remove" id="select-classroom-in-classwork">
                                    <li></li>
                                </ul>
                            </div>

                            <div>
                                <div class="chose"
                                    onclick="document.getElementById('select-students-in-classwork').classList.toggle('remove')">
                                    All Student</div>
                                <div class="icon"
                                    onclick="document.getElementById('select-students-in-classwork').classList.toggle('remove')">
                                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                        class=" NMm5M">
                                        <path d="M7 10l5 5 5-5H7z"></path>
                                    </svg>
                                </div>
                                <ul id="select-students-in-classwork" class="remove">
                                    <li class="">
                                        <input type="checkbox" name="students[]" id="">
                                        <label for="">
                                            <div class="icon"><i class="fa-solid fa-user-group"></i> <span>All
                                                    Students</span></div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="points">
                        <h4>Points</h4>
                        <div class="input">
                            <input type="text" name="points">
                            <ul>
                                <li>Unmarked</li>
                            </ul>
                        </div>
                    </div>
                    <div class="points">
                        <h4>Topics</h4>
                        <div class="input">
                            <input type="text" name="points">
                            <ul>
                                <li>Unmarked</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <x-slot:script>
        <script>
            const editor = new EditorJS({
                holder: 'editorjs',
                // placeholder: 'Write something...',
                initialBlock: 'paragraph',
                inlineToolbar: true,
            });
            setTimeout(() => {
                document.getElementsByClassName('codex-editor__redactor')[0].style.padding = '0';
                document.querySelector('#editorjs .ce-block__content').style.maxWidth = '100%';
            }, 1);
            document.getElementById('editorjs').onclick = function() {
                this.classList.add('active');

            }
        </script>

    </x-slot:script>
</x-layout>
