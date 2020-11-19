@php
$roleku = Auth::user()->level;
$judulmenu = DB::table('menutitles')->where('role_id', $roleku)->first();
($judulmenu);
$menus = DB::table('menus')->where('role_id',$roleku)->orderBy('order','asc')->get();
@endphp

<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        {{-- Sidebar brand logo --}}
        @if (config('adminlte.logo_img_xl'))
            @include('adminlte::partials.common.brand-logo-xl')
        @else
            @include('adminlte::partials.common.brand-logo-xs')
        @endif

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    {{-- <li class="nav-header text-uppercase">{{ $judulmenu->name }}</li>
                    --}}
                    @foreach ($menus as $m)
                        <li class="nav-item">
                            <a href="{{ $m->url }}" class="nav-link">
                                <i class="nav-icon {{ $m->icon }}"></i>
                                <p>
                                    {{ $m->name }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

</aside>
