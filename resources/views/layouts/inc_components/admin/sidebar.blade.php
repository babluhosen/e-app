   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <div>
            <div class="">
            <a class="nav-link" style="color:black; border:2px solid whitesmoke" href="#">
              <i class="mdi mdi-developer-board menu-icon"></i>
              <span class="menu-title">INTERFACE</span>
            </a>
            </div>
           
         
          <!--Category-->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-dots-vertical menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{asset('admin/category')}}">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">View Category</a></li>
              </ul>
            </div>
          </li>
           <!--product-->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-plus-box-outline menu-icon"></i>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-shopping menu-icon"></i>
              <span class="menu-title">Brands</span>
            </a>
          </li>
          </div>
          <div>
          <div class="">
            <a class="nav-link" style="color:black; border:2px solid whitesmoke" href="#">
              <i class="mdi mdi-database menu-icon"></i>
              <span class="menu-title">DATA TABLE</span>
            </a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          </div>
          <div>
          <div class="">
            <a class="nav-link " style="color:black; border:2px solid whitesmoke" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">USER PROFILE</span>
            </a>
            </div>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          </div>
          <!--<li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Sliders</span>
            </a>
          </li>-->
          <div>
          <div class="">
            <a class="nav-link" style="color:black; border:2px solid whitesmoke" href="#">
              <i class="mdi mdi-settings-outline menu-icon"></i>
              <span class="menu-title">TOOLS</span>
            </a>
           
            </div>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-settings-outline menu-icon"></i>
              <span class="menu-title">Site Settings</span>
            </a>
          </li>
          </div>
        </ul>
       
      </nav>
      <!-- partial -->