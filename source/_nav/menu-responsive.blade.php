<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/blog') ? 'active text-red-500' : 'text-gray-800 hover:text-red-500' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} History"
                href="/blog/categories/history"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/blog/categories/history') ? 'active text-red-500' : 'text-gray-800 hover:text-red-500' }}"
            >သမိုင်းကြောင်းများ</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Patch"
                href="/blog/categories/patch"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/blog/categories/patch') ? 'active text-red-500' : 'text-gray-800 hover:text-red-500' }}"
            >Patch များ</a>
        </li>
    </ul>
</nav>
