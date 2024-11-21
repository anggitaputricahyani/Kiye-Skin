<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ (request()->is('v1')) ? 'active' : '' }}">
            <a href="{{ route('page.admin')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Produk</li>

        <li class="sidebar-item {{ (request()->is('v1/product')) ? 'active' : '' }}">
            <a href="" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>List Produk</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/product/create')) ? 'active' : '' }}">
            <a href="{{ url('produks') }}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Produk</span>
            </a>
        </li>

        
        <li class="sidebar-title">Kelola Kuisioner</li>

        <li class="sidebar-item {{ (request()->is('v1/product')) ? 'active' : '' }}">
            <a href="" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>Pertanyaan</span>
            </a>
        </li>
        

        <li class="sidebar-title">Laporan</li>

<li class="sidebar-item {{ (request()->is('v1/product')) ? 'active' : '' }}">
    <a href="" class='sidebar-link'>
        <i class="bi bi-box2-fill"></i>
        <span>Laporan Penjualan</span>
    </a>
</li>

<li class="sidebar-item {{ (request()->is('v1/product/create')) ? 'active' : '' }}">
    <a href="" class='sidebar-link'>
        <i class="bi bi-box-arrow-in-up"></i>
        <span>Laporan Hasil Test</span>
    </a>
</li>





        <li class="sidebar-title">Tools Admin</li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="{{ url('users') }}" target="" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Daftar User</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="https://api.whatsapp.com/send/?phone=%2B6281914353767&text&type=phone_number&app_absent=0" target="" class='sidebar-link'>
                <i class="bi bi-whatsapp"></i>
                <span>Hubungi Author</span>
            </a>
        </li>

    </ul>
</div>
