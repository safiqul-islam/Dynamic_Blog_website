<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="index.html">Default</a></li>--}}
{{--                        <li><a href="dashboard-saas.html">Saas</a></li>--}}
{{--                        <li><a href="dashboard-crypto.html">Crypto</a></li>--}}
{{--                    </ul>--}}
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('manage_blog_category') }}">Manage Category</a></li>
                        <li><a href="{{ route('add_blog_category') }}">Add Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Blog Sub Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blog-sub-categories.index') }}">Manage Sub Category</a></li>
                        <li><a href="{{ route('blog-sub-categories.create') }}">Add Sub Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blogs.index') }}">Manage Blogs</a></li>
                        <li><a href="{{ route('blogs.create') }}">Add Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('services.index') }}">Manage Services</a></li>
                        <li><a href="{{ route('services.create') }}">Add Service</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Articles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('articles.index') }}">Manage Articles</a></li>
                        <li><a href="{{ route('articles.create') }}">Add Articles</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
