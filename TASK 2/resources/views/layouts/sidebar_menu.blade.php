<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Beranda </a>
      <li><a><i class="fa fa-dropbox"></i> Produk <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('produk.tambah')}}">Tambah Produk</a></li>
          <li><a href="{{route('produk.index')}}">List Produk</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-users"></i> Customer <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('customer.tambah')}}">Tambah Customer</a></li>
          <li><a href="{{route('customer.index')}}">List Customer</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-money"></i> Sales Order <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('order.tambah')}}">Tambah Order</a></li>
          <li><a href="{{route('order.index')}}">List Order</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>


