@php

    $sidebarData = [
        [
            'title' => 'داشبورد',
            'icon' => 'ri-home-line',
            'iconFill' => 'ri-home-fill',
            'link' => '/dashboard',
            'admin' => false,
        ],
        [
            'title' => 'مدریت حساب ها',
            'icon' => 'ri-group-line',
            'iconFill' => 'ri-group-fill',
            'link' => '/dashboard/manage-account',
            'admin' => true,
        ],
        [
            'title' => 'مدریت پست ها',
            'icon' => 'ri-article-line',
            'iconFill' => 'ri-article-fill',
            'link' => '/dashboard/manage-posts',
            'admin' => true,
        ],
        [
            'title' => 'پست های من',
            'icon' => 'ri-file-list-3-line',
            'iconFill' => 'ri-file-list-3-fill',
            'link' => '/dashboard/post/my-post',
            'admin' => false,
        ],
        [
            'title' => 'پروفایل',
            'icon' => 'ri-user-6-line',
            'iconFill' => 'ri-user-6-fill',
            'link' => '/dashboard/my-profile',
            'admin' => false,
        ],
        [
            'title' => 'خروج',
            'icon' => 'ri-logout-circle-r-line',
            'iconFill' => 'ri-logout-circle-r-fill',
            'link' => '/auth/logout',
            'admin' => false,
        ],
    ];

@endphp
<aside class="bg-transparent w-full h-full border-r-2 border-gray-800 font-vazir pt-5">

    <div class="flex gap-2 justify-center md:justify-start md:pl-10 xl:pl-12">
        <div class="w-3 h-3 rounded-full bg-red-500"></div>
        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
        <div class="w-3 h-3 rounded-full bg-green-500"></div>
    </div>

    <nav class="w-full h-10/12 text-slate-400 mt-10">
        <ul id="sidebar" class="w-full h-full flex flex-col md:items-start gap-5">
            @foreach ($sidebarData as $item)
                @if ($item['admin'])
                    @can('viewAny', auth()->user())
                        <li
                            class="flex items-center 
                md:text-sm xl:text-lg w-full 
                font-bold
                md:w-10/12 md:mx-auto 
                pl-0 md:pl-3 lg:pl-4 xl:pl-5
                transition-colors
                delay-150 
                active:border-r-2
                active:rounded-none
            
                {{ $item['link'] === '/auth/logout' && 'text-red-400' }}
                active:md:bg-blue-200
                active:md:text-black
                active:text-blue-200
                active:border-blue-200
                hover:md:bg-blue-200
                hover:md:text-black
                rounded-md h-10 cursor-pointer gap-3">
                            <i class="mx-auto md:mx-0"></i>
                            <a href="{{ $item['link'] }}" class="hidden md:block">{{ $item['title'] }}</a>
                        </li>
                    @endcan
                @endif
                @if (!$item['admin'])
                    <li
                        class="flex items-center 
                                md:text-sm xl:text-lg w-full 
                                font-bold
                                md:w-10/12 md:mx-auto 
                                pl-0 md:pl-3 lg:pl-4 xl:pl-5
                                transition-colors
                                delay-150 
                                active:border-r-2
                                active:rounded-none
                                {{ $item['link'] === '/auth/logout' && 'text-red-400' }}
                                active:md:bg-blue-200
                                active:md:text-black
                                active:text-blue-200
                                active:border-blue-200
                                hover:md:bg-blue-200
                                hover:md:text-black
                                rounded-md h-10 cursor-pointer gap-3">
                        <i class="mx-auto md:mx-0"></i>
                        <a href="{{ $item['link'] }}" class="hidden md:block">{{ $item['title'] }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>

</aside>
