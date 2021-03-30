<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="NBMEG" class="w-6" src="{{ asset('backend/dist/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> N B M E G<span class="font-medium"></span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
<ul>

@canany(['guest.update'])
    <li>
        <a href="{{ route('profile.index') }}" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
            <div class="side-menu__title"> My Profile </div>
        </a>
    </li>
@endcanany
@canany(['about.all'])
    <li>
        <a href="javascript:;" class="side-menu @yield('about')">
            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
            <div class="side-menu__title"> About <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="@yield('subOpenSlider')">
            <li>
                <a href="{{ route('bangla') }}" class="side-menu @yield('aboutBangla')">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title"> Bangla </div>
                </a>
            </li>

            <li>
                <a href="{{ route('english') }}" class="side-menu @yield('aboutEnglish')">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title "> English </div>
                </a>
            </li>
            <li>
                <a href="{{ route('choose_us') }}" class="side-menu @yield('choose_us')">
                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                    <div class="side-menu__title "> Choose Us </div>
                </a>
            </li>

        </ul>
    </li>
@endcanany
@canany(['slider.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('slider')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title"> Slider <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenSlider')">
        <li>
            <a href="{{ route('slider.index') }}" class="side-menu @yield('sliderAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Sliders </div>
            </a>
        </li>
        @canany(['slider.create'])
        <li>
            <a href="{{ route('slider.create') }}" class="side-menu @yield('sliderCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Slider </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['lecture.all'])
<li>
                <a href="javascript:;" class="side-menu @yield('lecture')">
                    <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="side-menu__title"> Session <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="@yield('subOpenSlider')">
                    <li>
                        <a href="{{ route('session.index') }}" class="side-menu @yield('lectureAll')">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> All Session </div>
                        </a>
                    </li>
                    @canany(['lecture.create'])
                        <li>
                            <a href="{{ route('session.create') }}" class="side-menu @yield('lectureCreate')">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title "> Create Session </div>
                            </a>
                        </li>
                    @endcanany
                </ul>
            </li>
@endcanany
@canany(['client.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('client')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title"> Client Add <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenClient')">
        <li>
            <a href="{{ route('client.index') }}" class="side-menu @yield('clientAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Client </div>
            </a>
        </li>
        @canany(['client.create'])
        <li>
            <a href="{{ route('client.create') }}" class="side-menu @yield('clientCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Client </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['post.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('post')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title">Post <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenPost')">
        @canany(['category.all'])
        <li>
            <a href="{{ route('category.index') }}" class="side-menu @yield('categoryAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Category </div>
            </a>
        </li>
        @endcanany
        @canany(['post.create'])
        <li>
            <a href="{{ route('post.index') }}" class="side-menu @yield('postAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> All Post </div>
            </a>
        </li>
        @endcanany
        <li>
            <a href="{{ route('post.create') }}" class="side-menu @yield('postCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Post </div>
            </a>
        </li>

    </ul>
</li>
@endcanany
{{--        //news.................--}}
@canany(['news.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('news')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title">News <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenNews')">
        @canany(['news_category.all'])
        <li>
            <a href="{{ route('news_category.index') }}" class="side-menu @yield('newsCategoryAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> News Category </div>
            </a>
        </li>
        @endcanany
        <li>
            <a href="{{ route('news.index') }}" class="side-menu @yield('newsAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> All News </div>
            </a>
        </li>
        @canany(['news.create'])
        <li>
            <a href="{{ route('news.create') }}" class="side-menu @yield('newsCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create News </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['member.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('member')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title">Member <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenMember')">
        <li>
            <a href="{{ route('member.index') }}" class="side-menu @yield('memberAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Member </div>
            </a>
        </li>
        @canany(['member.create'])
        <li>
            <a href="{{ route('member.create') }}" class="side-menu @yield('memberCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Member </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['testimonial.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('testimonial')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title">Testimonial <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenMember')">
        <li>
            <a href="{{ route('testimonial.index') }}" class="side-menu @yield('testimonialAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title">All Testimonial </div>
            </a>
        </li>
        @canany(['testimonial.create'])
        <li>
            <a href="{{ route('testimonial.create') }}" class="side-menu @yield('testimonialCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Testimonial </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['team.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('team')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title">Team Member <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenMember')">
        <li>
            <a href="{{ route('team.index') }}" class="side-menu @yield('teamAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Team Member </div>
            </a>
        </li>
        @canany(['team.create'])
        <li>
            <a href="{{ route('team.create') }}" class="side-menu @yield('teamCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Team </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['event.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('event')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title">Event <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenMember')">
        <li>
            <a href="{{ route('event.index') }}" class="side-menu @yield('eventAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Event </div>
            </a>
        </li>
        @canany(['event.create'])
        <li>
            <a href="{{ route('event.create') }}" class="side-menu @yield('eventCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Event </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['role.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('role')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title"> Role<i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenRole')">
        <li>
            <a href="{{ route('roles.index') }}" class="side-menu @yield('roleAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All Roles </div>
            </a>
        </li>
        @canany(['role.create'])
        <li>
            <a href="{{ route('roles.create') }}" class="side-menu @yield('roleCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create Roles </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
        @canany(['user.all'])
<li>
    <a href="javascript:;" class="side-menu @yield('users')">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title"> User <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
    </a>
    <ul class="@yield('subOpenUser')">
        <li>
            <a href="{{ route('users.index') }}" class="side-menu @yield('usersAll')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> All User </div>
            </a>
        </li>
        @canany(['user.create'])
        <li>
            <a href="{{ route('users.create') }}" class="side-menu @yield('usersCreate')">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title "> Create User </div>
            </a>
        </li>
        @endcanany
    </ul>
</li>
@endcanany
@canany(['settings.update'])
<li>
    <a href="{{ route('settings.index') }}" class="side-menu">
        <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
        <div class="side-menu__title"> Settings </div>
    </a>
</li>
@endcanany
<li class="side-nav__devider my-6"></li>

</ul>
</nav>
