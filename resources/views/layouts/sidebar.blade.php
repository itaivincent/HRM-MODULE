<nav class="sidebar sidebar-offcanvas" id="sidebar" >
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Modules</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#employees" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Employees</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="employees">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/employees/create">Create employee</a></li>
                <li class="nav-item"> <a class="nav-link" href="/employees">Manage employees</a></li>
                <li class="nav-item"> <a class="nav-link" href="/employees/parameters">Parameters</a></li>
              </ul>
            </div>
          </li> 
          
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Assets" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Assets</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="Assets">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/assets/create">Add Asset</a></li>
                <li class="nav-item"> <a class="nav-link" href="/assets">Manage Assets</a></li>
                <li class="nav-item"> <a class="nav-link" href="/assignments">Assignments</a></li>
                <li class="nav-item"> <a class="nav-link" href="/manageAssignments">Manage Assignments</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Users" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="Users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add User</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Manage Users</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Parameters</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>