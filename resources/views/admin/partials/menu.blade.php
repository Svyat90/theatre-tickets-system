<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.pages.index") }}" class="nav-link {{ request()->is("admin/pages") || request()->is("admin/pages/*") ? 'active' : '' }}" >
                        <i class="fa-fw nav-icon fas fa-book">
                        </i>
                        <p>
                            {{ trans('cruds.pages.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is("admin/tags") || request()->is("admin/tags/*") ? 'active' : '' }}" >
                        <i class="fa-fw nav-icon fas fa-book">
                        </i>
                        <p>
                            {{ trans('cruds.tags.title') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ request()->is('admin/spectacles*') || request()->is("admin/categories*") ? 'menu-open' : '' }}">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fa-fw nav-icon fas fa-file-alt"></i>
                        <p>
                            {{ trans('global.spectacles') }}
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? 'active' : '' }}" >
                                <i class="fa-fw nav-icon fas fa-book">
                                </i>
                                <p>
                                    {{ trans('cruds.categories.title') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.spectacles.index") }}" class="nav-link {{ request()->is("admin/spectacles") || request()->is("admin/spectacles/*") ? 'active' : '' }}" >
                                <i class="fa-fw nav-icon fas fa-book">
                                </i>
                                <p>
                                    {{ trans('global.list') }}
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->is('admin/article_categories*') || request()->is("admin/articles*") ? 'menu-open' : '' }}">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fa-fw nav-icon fas fa-file-alt"></i>
                        <p>
                            {{ trans('global.blog') }}
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("admin.article_categories.index") }}" class="nav-link {{ request()->is("admin/article_categories") || request()->is("admin/article_categories/*") ? 'active' : '' }}" >
                                <i class="fa-fw nav-icon fas fa-book">
                                </i>
                                <p>
                                    {{ trans('cruds.categories.title') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.articles.index") }}" class="nav-link {{ request()->is("admin/articles") || request()->is("admin/articles/*") ? 'active' : '' }}" >
                                <i class="fa-fw nav-icon fas fa-book">
                                </i>
                                <p>
                                    {{ trans('cruds.articles.title') }}
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->is('admin/worker_categories*') || request()->is("admin/workers*") ? 'menu-open' : '' }}">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fa-fw nav-icon fas fa-file-alt"></i>
                        <p>
                            {{ trans('global.team') }}
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("admin.worker_categories.index") }}" class="nav-link {{ request()->is("admin/worker_categories") || request()->is("admin/worker_categories/*") ? 'active' : '' }}" >
                                <i class="fa-fw nav-icon fas fa-book">
                                </i>
                                <p>
                                    {{ trans('cruds.categories.title') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.workers.index") }}" class="nav-link {{ request()->is("admin/workers") || request()->is("admin/workers/*") ? 'active' : '' }}" >
                                <i class="fa-fw nav-icon fas fa-book">
                                </i>
                                <p>
                                    {{ trans('cruds.workers.title') }}
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->is('admin/translations*') ? 'menu-open' : '' }}">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fa-fw nav-icon fas fa-file-alt"></i>
                        <p>
                            {{ trans('global.translations') }}
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($languages as $language)
                            <li class="nav-item">
                                <a href="{{ route("admin.translations.edit") }}?path={{ $language->path }}" class="nav-link {{ strpos(urldecode(request()->fullUrl()), '/lang/' . $language->locale) !== false ? 'active' : '' }}">
                                    <i class="fa-fw nav-icon fas fa-file-alt"></i>
                                    <p>{{ $language->locale }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/password') || request()->is('admin/password/*') ? 'active' : '' }}" href="{{ route('admin.password.edit') }}">
                        <i class="fa-fw fas fa-key nav-icon">
                        </i>
                        <p>
                            {{ trans('global.change_password') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
