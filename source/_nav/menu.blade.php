<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Home" href="/"
        class="ml-6 text-blue-200 hover:text-white {{ $page->isActive('/') ? 'active' : '' }}">
        Home
    </a>
    
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-blue-200 hover:text-white {{ $page->isActive('/blog') ? 'active' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} Contact" href="/#contact"
        class="ml-6 text-blue-200 hover:text-white {{ $page->isActive('/contact') ? 'active' : '' }}">
        Contact
    </a>
</nav>
