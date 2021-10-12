<div class="sidebar" data-color="blue" data-image="{{ asset ('assets/img/budur2.jpg') }}">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin" class="simple-text">
                    Balai Konservasi Borobudur
                </a>
            </div>

            <ul class="nav">
                <li class="{{set_active('admin')}}">
                    <a href="/admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{set_active('profiladmin')}}">
                    <a href="/admin/detailAdmin">
                        <i class="pe-7s-user"></i>
                        <p>Profil Admin</p>
                    </a>
                </li>
                <li class="{{set_active('tambahkaryawan')}}">
                    <a href="/admin/tablekaryawan">
                        <i class="pe-7s-note2"></i>
                        <p>Tambah Karyawan</p>
                    </a>
                </li>
                <li class="{{set_active('resetPassword')}}" >
                    <a href="/admin/resetPassword">
                        <i class="pe-7s-note"></i>
                        <p>Reset Password Karyawan</p>
                    </a>
                </li> 
            </ul>
    	</div>
    </div>