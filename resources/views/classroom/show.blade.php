<x-layout>
    <x-slot:navTitle>
        <x-nav-title :classroom="$classroom" />
    </x-slot:navTitle>
    <x-slot:navLinks>
        <x-nav-links :classroom="$classroom" />
    </x-slot:navLinks>
    <div class="classroom-details">
        <div class="classroom-image" id="classroom-image">
            {{-- @dd(Storage::exists($classroom->classroom_cover_image)) --}}
            <img src="{{ $classroom->classroom_cover_image }}" alt="">
            <div style="position: relative;">
                <div class="classroom-name">
                    {{ $classroom->name }}
                    <div class="classroom-section">
                        {{ $classroom->section }}
                    </div>
                </div>
                <div class="information-for-classroom">
                    <i class="fa-solid fa-circle-info click"
                        onclick="this.classList.add('click');document.querySelector('#classroom-image > img').classList.remove('remove-readius');document.getElementsByClassName('fa-info')[0].classList.remove('click');document.getElementById('general-information').classList.add('display');document.getElementById('classroom-image').classList.remove('shadow');"></i>
                    <i class="fa-solid fa-info"
                        onclick="this.classList.add('click');document.querySelector('#classroom-image > img').classList.add('remove-readius');document.getElementsByClassName('fa-circle-info')[0].classList.remove('click');document.getElementById('general-information').classList.remove('display');document.getElementById('classroom-image').classList.add('shadow');"></i>
                </div>
            </div>
            <div class="customise" onclick="document.getElementById('customise-apperance').classList.remove('hidden')">
                <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                    <path
                        d="M20.41 4.94l-1.35-1.35c-.78-.78-2.05-.78-2.83 0L3 16.82V21h4.18L20.41 7.77c.79-.78.79-2.05 0-2.83zm-14 14.12L5 19v-1.36l9.82-9.82 1.41 1.41-9.82 9.83z">
                    </path>
                </svg>
                <span>Customise</span>
            </div>
            <div class="general-information display" id="general-information">
                <div class="code">
                    <span>Class code</span>
                    {{ $classroom->code }}
                    <span class="svg">
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"
                            onclick="document.getElementById('code-details').classList.remove('hidden');">
                            <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z">
                            </path>
                        </svg>
                    </span>
                </div>
                <div class="subject">
                    <span>Subject</span>
                    {{ $classroom->subject }}
                </div>
                <div class="room">
                    <span>Room</span>
                    {{ $classroom->room }}
                </div>
            </div>
        </div>
        <div class="code-details hidden" id="code-details">
            <div class="overlay" onclick="this.parentNode.classList.add('hidden')"></div>
            <div class="content" id="code-contents">
                <div class="colse"
                    onclick="document.getElementById('code-details').classList.add('hidden');document.getElementById('code-contents').classList.remove('active');document.getElementById('svg-NMm5M-one').classList.remove('hidden');document.getElementById('svg-NMm5M').classList.add('hidden');">
                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M">
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                        </path>
                    </svg>
                </div>
                <div class="code" id="code-value">{{ $classroom->code }}</div>
                <div class="details">
                    <div class="class-name">{{ $classroom->name }}</div>
                    <div class="class-section">{{ $classroom->section }}</div>
                    <div class="icon" id="copy-code-button" onclick="copyInvitationCodeForClassroom()">
                        <svg enable-background="new 0 0 24 24" focusable="false" height="18" viewBox="0 0 24 24"
                            width="18" class=" NMm5M">
                            <g>
                                <rect fill="none" height="24" width="24"></rect>
                            </g>
                            <g>
                                <path
                                    d="M16,20H5V6H3v14c0,1.1,0.9,2,2,2h11V20z M20,16V4c0-1.1-0.9-2-2-2H9C7.9,2,7,2.9,7,4v12c0,1.1,0.9,2,2,2h9 C19.1,18,20,17.1,20,16z M18,16H9V4h9V16z">
                                </path>
                            </g>
                        </svg>
                        <span>Copy invitaion link</span>
                    </div>
                    <div class="svg">
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"
                            id="svg-NMm5M-one"
                            onclick="document.getElementById('code-contents').classList.add('active');document.getElementById('svg-NMm5M').classList.remove('hidden');this.classList.add('hidden')">
                            <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z">
                            </path>
                        </svg>
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" id="svg-NMm5M"
                            class=" NMm5M hidden"
                            onclick="document.getElementById('code-contents').classList.remove('active');document.getElementById('svg-NMm5M-one').classList.remove('hidden');this.classList.add('hidden')">
                            <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="classroom-content">
            <div class="left-side">
                <div class="code">
                    <div>Class Code
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"
                            onclick="document.getElementById('code-informations').classList.toggle('hidden')">
                            <path
                                d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div class="code-value">
                        {{ $classroom->code }}
                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"
                            onclick="document.getElementById('code-details').classList.remove('hidden');">
                            <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z">
                            </path>
                        </svg>
                    </div>
                    <ul id="code-informations" class="hidden">
                        <li onclick="copyJoinLink(this);document.getElementById('code-informations').classList.toggle('hidden')"
                            data-link="{{ $classroom->join_student_link }}" style="cursor: pointer;">
                            <a>
                                <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                    class=" NMm5M">
                                    <path
                                        d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2z">
                                    </path>
                                    <path d="M8 11h8v2H8z"></path>
                                </svg>
                                <span>Copy class invite link</span>
                            </a>
                        </li>
                        <li onclick="copyInvitationCodeForClassroom();document.getElementById('code-informations').classList.toggle('hidden')"
                            style="cursor: pointer;">
                            <a>
                                <svg enable-background="new 0 0 24 24" focusable="false" height="24"
                                    viewBox="0 0 24 24" width="24" class=" NMm5M">
                                    <g>
                                        <rect fill="none" height="24" width="24"></rect>
                                    </g>
                                    <g>
                                        <path
                                            d="M16,20H5V6H3v14c0,1.1,0.9,2,2,2h11V20z M20,16V4c0-1.1-0.9-2-2-2H9C7.9,2,7,2.9,7,4v12c0,1.1,0.9,2,2,2h9 C19.1,18,20,17.1,20,16z M18,16H9V4h9V16z">
                                        </path>
                                    </g>
                                </svg>
                                <span>Copy class code</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                    class=" NMm5M">
                                    <path
                                        d="M6 13c0-1.65.67-3.15 1.76-4.24L6.34 7.34A8.014 8.014 0 0 0 4 13c0 4.08 3.05 7.44 7 7.93v-2.02c-2.83-.48-5-2.94-5-5.91zm14 0c0-4.42-3.58-8-8-8-.06 0-.12.01-.18.01l1.09-1.09L11.5 2.5 8 6l3.5 3.5 1.41-1.41-1.08-1.08c.06 0 .12-.01.17-.01 3.31 0 6 2.69 6 6 0 2.97-2.17 5.43-5 5.91v2.02c3.95-.49 7-3.85 7-7.93z">
                                    </path>
                                </svg>
                                <span>Reset class code</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg enable-background="new 0 0 24 24" focusable="false" height="24"
                                    viewBox="0 0 24 24" width="24" class=" NMm5M">
                                    <rect fill="none" height="24" width="24"></rect>
                                    <path
                                        d="M19,19H5V5h14V19z M3,3v18h18V3H3z M17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41L8.41,7L12,10.59L15.59,7 L17,8.41L13.41,12L17,15.59z">
                                    </path>
                                </svg>
                                <span>Turn off</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="upcoming">
                    <h6>Upcoming</h6>
                    <span>No work due in soon</span>
                    <a href="">View all</a>
                </div>
            </div>
            <div class="right-side">
                <div class="announce">
                    <img src="{{ Auth::user()->avatar_logo }}" alt="" onclick="console.log('hi')">
                    <span onclick="console.log('hi')">Announce something to your class</span>
                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"
                        onclick="console.log('svg')">
                        <path d="M19 5H4v6h2V7h13M5 19h15v-6h-2v4H5"></path>
                        <path
                            d="M16.29 10.71l-1.41-1.42L18.17 6l-3.29-3.29 1.41-1.42L21 6zm-8.58 12L3 18l4.71-4.71 1.41 1.42L5.83 18l3.29 3.29z">
                        </path>
                    </svg>
                </div>
                @if ($classworks->count())
                    <div class="content-values">
                        @foreach ($classworks as $classwork)
                            <form action="{{ route('classwork.show', [$classroom->id, $classwork->id]) }}"
                                class="card" onclick="sendSubmitions(this)">
                                <div onclick="this.parentNode.submit()">
                                    <span class="svg">
                                        <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                            class=" NMm5M hhikbc">
                                            <path d="M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7z"></path>
                                            <path
                                                d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04a2.008 2.008 0 0 0-1.44 1.19c-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <h3>{{ $classwork->title }}</h3>
                                </div>
                                <div class="date" onclick="this.parentNode.submit()">
                                    {{ $classwork->created_at->format('M j') }}</div>
                                <div class="icon svg-card-settings" onclick="">
                                    <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                        class=" NMm5M">
                                        <path
                                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="card-settings hidden" id="card-settings">
                                    <li>
                                        <a href="" class="disble">Move to up</a>
                                    </li>
                                    <li>
                                        <a href="">Edit</a>
                                    </li>
                                    <li>
                                        <a href="">Copy link</a>
                                    </li>
                                </ul>
                            </form>
                        @endforeach
                    </div>
                @else
                    <div class="no-content">
                        <svg viewBox="0 0 241 149" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" class="Fnu4gf">
                            <path
                                d="M138.19 145.143L136.835 145.664C134.646 146.498 132.249 145.352 131.519 143.164L82.4271 8.37444C81.5933 6.18697 82.7398 3.79117 84.9286 3.06201L86.2836 2.54118C88.4724 1.70786 90.8697 2.85368 91.5993 5.04115L140.691 139.831C141.421 142.018 140.379 144.414 138.19 145.143Z"
                                stroke="#5F6368" stroke-width="2"></path>
                            <path
                                d="M76.6602 10.5686C78.2029 12.2516 83.3923 14.7762 88.4414 13.0932C98.5395 9.72709 96.8565 2.57422 96.8565 2.57422"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M60.1224 147.643C94.7266 135.143 112.55 96.9147 99.938 62.4361C87.4305 27.8532 49.1783 10.1451 14.5742 22.6449L60.1224 147.643ZM65.855 98.4772C77.3203 94.3106 83.2613 81.4983 79.0922 70.0401C74.923 58.4777 62.207 52.5403 50.6376 56.8111L65.855 98.4772Z"
                                fill="#CEEAD6" class="VnOHwf-Ysl7Fe"></path>
                            <path
                                d="M58.1473 128.38L52.2567 130.905M52.2567 110.288L45.5246 112.812M44.6831 92.6157L39.2132 94.7195M38.3717 74.5232L32.9019 76.6269M32.4811 56.4306L26.5905 58.5344M25.749 38.7588L19.8584 40.8626"
                                stroke="white" stroke-width="2" stroke-linecap="round"></path>
                            <path
                                d="M87.5996 128.38C94.472 121.227 105.86 101.199 103.168 78.3098C100.475 55.4206 89.7034 42.1247 84.6543 38.3379"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M225.952 147.956H157.994C154.554 147.956 151.74 145.143 151.74 141.706V73.79C151.74 70.3525 154.554 67.54 157.994 67.54H225.952C229.391 67.54 232.205 70.3525 232.205 73.79V141.706C232.205 145.247 229.495 147.956 225.952 147.956Z"
                                stroke="#5F6368" stroke-width="2"></path>
                            <path
                                d="M232.205 73.79C232.205 70.3525 229.391 67.54 225.952 67.54H157.994C154.554 67.54 151.74 70.3525 151.74 73.79V100.977L232.205 81.4982V73.79Z"
                                fill="#5F6368"></path>
                            <path
                                d="M191.66 131.497C204.957 131.497 215.737 120.724 215.737 107.435C215.737 94.146 204.957 83.373 191.66 83.373C178.363 83.373 167.583 94.146 167.583 107.435C167.583 120.724 178.363 131.497 191.66 131.497Z"
                                fill="white" stroke="#5F6368" stroke-width="2"></path>
                            <path
                                d="M211.303 90.0912L207.095 93.4573M191.527 82.5176V87.1459M174.697 88.8289L178.063 93.4573M165.44 106.921L170.91 107.763M178.063 122.49L174.697 126.697M191.527 128.801V133.429M205.833 122.49L209.62 126.697M213.407 107.763H218.456"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round"></path>
                            <path
                                d="M191.66 114.935C195.804 114.935 199.164 111.578 199.164 107.435C199.164 103.293 195.804 99.9355 191.66 99.9355C187.515 99.9355 184.155 103.293 184.155 107.435C184.155 111.578 187.515 114.935 191.66 114.935Z"
                                fill="#5F6368"></path>
                            <path
                                d="M10.7177 130.977C12.698 130.977 12.698 127.852 10.7177 127.852C8.73733 127.852 8.73733 130.977 10.7177 130.977Z"
                                fill="#5F6368"></path>
                            <path d="M19.4368 106.921L8.49707 82.0967" stroke="#5F6368" stroke-width="2"
                                stroke-linecap="round"></path>
                            <path
                                d="M13.126 93.0719C13.126 90.9273 13.5467 89.2442 14.7268 87.1405C17.0871 82.9328 22.162 83.7743 22.8034 86.3398C23.2241 88.0229 22.3005 91.7688 19.7759 93.072C16.8301 94.5926 14.809 94.755 13.9675 94.755"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round"></path>
                            <path
                                d="M13.2331 93.6244C11.8849 91.9565 10.4997 90.9119 8.25948 90.0176C3.77892 88.2289 0.360966 92.0735 1.47485 94.4719C2.20559 96.0453 3.84062 97.8046 8.06124 97.8046C11.3764 97.8046 12.9821 95.9913 13.6366 95.4624"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round"></path>
                            <path
                                d="M26.5609 148.997C39.7431 148.997 50.4294 138.317 50.4294 125.143C50.4294 111.969 39.7431 101.289 26.5609 101.289C13.3787 101.289 2.69238 111.969 2.69238 125.143C2.69238 138.317 13.3787 148.997 26.5609 148.997Z"
                                fill="#DADCE0"></path>
                            <path
                                d="M16.8671 139.622C18.8475 139.622 18.8475 136.497 16.8671 136.497C14.8867 136.497 14.8867 139.622 16.8671 139.622Z"
                                fill="#5F6368"></path>
                            <path
                                d="M21.245 131.81C23.2254 131.81 23.2254 128.685 21.245 128.685C19.2647 128.685 19.2647 131.81 21.245 131.81Z"
                                fill="#5F6368"></path>
                            <path
                                d="M29.3749 138.685C31.3553 138.685 31.3553 135.56 29.3749 135.56C27.3946 135.56 27.3946 138.685 29.3749 138.685Z"
                                fill="#5F6368"></path>
                            <path
                                d="M23.538 143.477C25.5184 143.477 25.5184 140.352 23.538 140.352C21.5576 140.352 21.5576 143.477 23.538 143.477Z"
                                fill="#5F6368"></path>
                            <path
                                d="M18.3261 102.748C5.92283 107.227 -0.435161 120.977 4.0467 133.373C5.29745 136.914 7.38204 139.935 9.98777 142.435L34.0647 102.54C29.0617 100.873 23.6418 100.769 18.3261 102.748Z"
                                fill="#5F6368"></path>
                            <path
                                d="M149.451 35.8135C150.433 41.143 154.921 51.129 163.336 48.4362C171.751 45.7433 168.666 35.1122 165.861 29.9229"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round"></path>
                            <path
                                d="M167.374 31.082L148.926 37.4361C147.154 32.332 149.864 26.8112 154.971 25.0404C160.078 23.2696 165.602 25.9779 167.374 31.082Z"
                                fill="#1E8E3E" class="VnOHwf-Wvd9Cc"></path>
                            <path
                                d="M199.581 23.0616L194.474 8.99933C195.933 7.95767 197.184 6.60353 198.122 5.04105C198.539 4.31189 198.956 3.47857 198.956 2.64525C198.956 1.81193 198.33 0.87444 197.497 0.87444C197.184 0.87444 196.871 0.978606 196.559 1.08277C194.474 1.91609 193.119 3.89523 191.972 5.87437L189.784 6.70769C190.201 4.52022 189.575 2.12442 188.116 0.45778C187.907 0.249449 187.803 0.145284 187.491 0.0411187C186.969 -0.167212 186.448 0.45778 186.136 0.978606C184.885 3.16607 184.781 5.87437 185.614 8.27017L168.104 14.6242C165.811 15.4576 164.56 18.0617 165.394 20.3533L166.228 22.7491C166.957 24.8324 169.25 25.8741 171.335 25.1449L174.045 32.5407C171.231 33.0615 168.625 34.7281 166.228 36.3948C165.186 37.1239 164.143 37.9573 164.247 39.3114C164.352 40.4572 165.186 41.2905 166.228 41.7072C168.104 42.3322 169.876 41.603 171.648 40.978C173.211 40.3531 174.879 39.7281 176.442 39.1031L176.859 40.3531C173.732 43.0614 171.752 47.1238 171.752 51.6029C171.752 56.3945 173.941 60.6653 177.485 63.3736C175.713 63.5819 173.837 64.1027 172.273 64.936C171.752 65.1444 171.335 65.4569 171.127 65.9777C170.71 66.811 171.439 67.8527 172.377 68.1652C173.315 68.4777 174.253 68.2693 175.192 68.061C176.963 67.7485 184.676 67.2277 188.637 66.4985C194.474 66.4985 212.714 66.4985 216.258 66.4985C224.596 66.4985 231.267 56.8112 231.267 48.4779C231.267 43.478 228.765 38.9989 224.909 36.2906C224.596 30.4574 230.225 31.3948 231.996 31.7073C234.185 32.2282 236.374 33.8948 238.459 32.3323C239.293 31.7073 239.709 30.6657 239.918 29.7282C245.338 7.43685 204.688 -2.97967 199.581 23.0616Z"
                                fill="#DADCE0"></path>
                            <path
                                d="M185.302 16.0826C186.108 16.0826 186.761 15.4297 186.761 14.6243C186.761 13.8189 186.108 13.166 185.302 13.166C184.496 13.166 183.843 13.8189 183.843 14.6243C183.843 15.4297 184.496 16.0826 185.302 16.0826Z"
                                fill="#5F6368"></path>
                            <path
                                d="M211.303 27.3983C213.406 25.7153 218.96 22.8541 224.346 24.8738C229.732 26.8934 232.2 30.7644 232.761 32.4474M211.303 20.2454C213.266 18.0014 219.044 14.3548 226.45 17.7209C231.359 19.9521 236.969 24.8738 239.073 31.1852M200.363 21.9285C199.942 23.4713 199.101 27.4825 199.101 31.1852C199.101 34.8878 199.942 40.0211 200.363 42.1248"
                                stroke="#5F6368" stroke-width="2" stroke-linecap="round"></path>
                            <path d="M165.172 18.1085L168.233 16.9138" stroke="#5F6368" stroke-width="2"
                                stroke-linecap="round"></path>
                            <path d="M172.172 67.3701H216.351" stroke="#5F6368" stroke-width="2"
                                stroke-linecap="round">
                            </path>
                            <path d="M135.145 49.6982L127.151 65.687M116.211 11.8301L118.735 36.6548" stroke="#5F6368"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                        <div class="">
                            <h3>This is where you can talk to your class</h3>
                            <p>Use the stream to share announcements, post assignments and respond to student questions
                            </p>
                            <a href="">
                                <svg focusable="false" width="18" height="18" viewBox="0 0 24 24"
                                    class=" NMm5M">
                                    <path
                                        d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z">
                                    </path>
                                    <circle cx="12" cy="12" r="3.5"></circle>
                                </svg>
                                Stream settings
                            </a>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
    <section class="customise-apperance hidden" id="customise-apperance">
        <div class="overlay" onclick="this.parentNode.classList.add('hidden')"></div>
        <div class="conatiner-content">
            <div class="header">Customise apperance</div>
            <div class="img">
                <img src="{{ $classroom->classroom_cover_image }}" alt="">
            </div>
            <form action="{{ route('classroom.customise.update', $classroom->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="select-img">
                    <p>Select stream header image</p>
                    <div>
                        <div class="select-photo">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                class=" NMm5M">
                                <path
                                    d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m4.41-7.59L11 7.83V16h2V7.83l2.59 2.59L17 9l-5-5-5 5 1.41 1.41z">
                                </path>
                            </svg>
                            Select photo
                        </div>
                        <div class="upload-photo" id="upload-photo">
                            <svg focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                class=" NMm5M">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-5-7l-3 3.72L9 13l-3 4h12l-4-5z">
                                </path>
                            </svg>
                            Upload photo
                        </div>
                    </div>
                </div>
                <div class="theme-title">Select theme colour</div>
                <div class="select-theme">
                    @foreach (App\Enums\ThemeTypes::cases() as $theme)
                        <x-input-radio id="{{ $theme->value }}" value="{{ $theme->value }}" :checked="$classroom->theme->value == $theme->value" />
                    @endforeach
                </div>
                <div class="buttons">
                    <button type="button"
                        onclick="document.getElementById('customise-apperance').classList.add('hidden')">Cancel</button>
                    <button type="submit" style="pointer-events: auto; cursor: pointer;">Save</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        // document.querySelector('body').onscroll = function() {
        //     if (window.scrollY <= 60) {
        //         document.getElementById('nav').classList.remove('nav-scroll');
        //     } else {
        //         document.getElementById('nav').classList.add('nav-scroll');
        //     }
        // }
        // inputs = document.querySelectorAll('form .form-control input')
        // inputs.forEach(input => {
        //     input.onchange = function() {
        //         console.log(this.id);
        //         if (this.id == 'classroom') {
        //             if (this.value == '') {
        //                 document.querySelector('.create-classroom form .buttons button[type="submit"]')
        //                     .classList.remove('active')
        //             } else {
        //                 document.querySelector('.create-classroom form .buttons button[type="submit"]')
        //                     .classList.add('active')
        //             }
        //         }
        //         if (this.value == '') {
        //             document.querySelector(`form .form-control label[for=${this.id}]`).classList.remove(
        //                 'active');
        //             this.classList.remove('active');
        //         } else {
        //             document.querySelector(`form .form-control label[for=${this.id}]`).classList.add('active');
        //             this.classList.add('active');
        //         }
        //     }
        // });
        window.localStorage.setItem('theme', `{{ $classroom->theme->value }}`);
        console.log(window.localStorage.getItem('theme'));
        document.querySelector('#upload-photo').onclick = function() {
            input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('hidden', true);
            input.setAttribute('name', 'upload-photo');
            input.setAttribute('accept', 'image/*');
            console.log('yes');
            input.click();
            this.append(input);
            input.onchange = function() {
                document.querySelector('#customise-apperance img').src = URL.createObjectURL(this.files[0]);
            }
        }
        document.getElementById('show-setting').onclick = function() {
            console.log('hi');
            document.querySelector('aside').classList.toggle('desable');
            if (document.body.style.overflowY == 'hidden') {
                document.body.style.overflowY = 'visible';
            } else {
                document.body.style.overflowY = 'hidden';

            }
        }
        themes = document.querySelectorAll('form .select-theme label');
        themes.forEach(element => {
            element.style.backgroundColor = element.getAttribute('for');
            // element.onclick = function() {
            // this.classList.add('click');
            // }
        })

        function copyInvitationCodeForClassroom() {
            // buttonCopy = document.getElementById('copy-code-button').onclick = function() {
            valueCopy = document.getElementById('code-value');
            range = document.createRange();
            range.selectNode(valueCopy);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            document.getElementById('aleart-container').innerHTML =
                `
            <div class="aleart">Copy Class Code</div>
            `;
            setTimeout(() => {
                document.getElementById('aleart-container').innerHTML = '';
            }, 5000);
            // };
        }
        // console.log(themes[0].id);
        materialSettings = document.querySelectorAll('ul.card-settings');
        buttonSvg = document.querySelectorAll('div.svg-card-settings');
        buttonSvg.forEach((ele, i) => {
            ele.onclick = function() {
                materialSettings.forEach((element, index) => {
                    if (i != index) {
                        element.classList.add('hidden');
                    }
                });
                materialSettings[i].classList.toggle('hidden');
            }
        });
        // function sendSubmitions(ele) {
        //     form = document.createElement('form');
        //     form.setAttribute('action','');
        //     form.setAttribute
        // }
    </script>
</x-layout>
