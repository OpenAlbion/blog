<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-red-600 {{ $page->isActive('/blog') ? 'active text-red-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} History" href="/blog/categories/history"
        class="ml-6 text-gray-700 hover:text-red-600 {{ $page->isActive('/blog/categories/history') ? 'active text-red-600' : '' }}">
        သမိုင်းကြောင်းများ
    </a>

    <a title="{{ $page->siteName }} Patch" href="/blog/categories/patch"
        class="ml-6 text-gray-700 hover:text-red-600 {{ $page->isActive('/blog/categories/patch') ? 'active text-red-600' : '' }}">
        Patch များ
    </a>
</nav>
