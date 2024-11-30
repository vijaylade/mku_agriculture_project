 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="">
            <i class="bi bi-list fs-4"></i><span>Types</span>
          </a> 
        </li>
        <li>
          <a href="">
            <i class="bi bi-box-seam fs-4"></i><span>Items</span>
          </a> 
        </li>
        <li>
          <a href="">
            <i class="bi bi-arrows-expand fs-4"></i><span>Packing Size</span>
          </a> 
        </li>
        <li>
          <!-- Product Menu with Sub-options Aligned to the Right -->
          <a class="nav-link collapsed" data-bs-target="#product-submenu" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bag fs-4"></i><span>Product</span><i class="bi bi-chevron-down ms-auto fs-5"></i>
          </a>
          <ul id="product-submenu" class="nav-content collapse ms-auto ps-4" data-bs-parent="#components-nav">
            <li>
              <a href="#">
                <i class="bi bi-droplet fs-3"></i><span> Fertilizers</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi  bi-bug fs-3"></i><span> Pesticides</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span> Seeds</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-archive fs-3"></i><span> Other</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-boxes fs-3"></i><span> All Products</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('customer.create') }}">
            <i class="bi bi-building fs-4"></i><span>Company</span>
          </a> 
        </li>
      </ul>
    </li><!-- End Master Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#account-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-wallet2"></i><span>Account</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="account-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="">
            <i class="bi bi-person-circle fs-4"></i><span>Party</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-diagram-3 fs-4"></i><span>Branch</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-people fs-4"></i><span>Customer</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-person-badge fs-4"></i><span>Employee</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-bank fs-4"></i><span>Bank</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-clipboard fs-4"></i><span>Other Account</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-journal fs-4"></i><span>Sub Other Account Head</span>
          </a>
        </li>
      </ul>
    </li><!-- End Account Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#purchsase-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-wallet2"></i><span>Purchsase</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="purchsase-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <!-- Transactions  Menu with Sub-options Aligned to the Right -->
          <a class="nav-link collapsed" data-bs-target="#transactions-submenu" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bag fs-4"></i><span>Transactions</span><i class="bi bi-chevron-down ms-auto fs-5"></i>
          </a>
          <ul id="transactions-submenu" class="nav-content collapse ms-auto ps-4" data-bs-parent="#components-nav">
            <li>
              <a href="#">
                <i class="bi bi-droplet fs-3"></i><span> delivery challan</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi  bi-bug fs-3"></i><span> new purchase</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span> voucher payment</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-archive fs-3"></i><span> direct voucher entry</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-boxes fs-3"></i><span>transportation charges on purchase dc</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-boxes fs-3"></i><span>transportation charges on purchase</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-boxes fs-3"></i><span>party bill traanfer to other</span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <!-- Reports   Menu with Sub-options Aligned to the Right -->
          <a class="nav-link collapsed" data-bs-target="#reports-submenu" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bag fs-4"></i><span>Reports </span><i class="bi bi-chevron-down ms-auto fs-5"></i>
          </a>
          <ul id="reports-submenu" class="nav-content collapse ms-auto ps-4" data-bs-parent="#components-nav">
            <li>
              <a href="#">
                <i class="bi bi-droplet fs-3"></i><span>Partywise Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi  bi-bug fs-3"></i><span>Datewise Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Party Statement</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Purchase GST Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Party and Datewise Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Product Wise Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Company Wise Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Purchase Audit Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>GSTR 3 B</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Product Type Wise Purchase Audit Report</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-tree fs-3"></i><span>Party Wise Credit Note Details</span>
              </a>
            </li>
          </ul>
        </li>
        
        <li>
          <a href="">
            <i class="bi bi-diagram-3 fs-4"></i><span>party opening balance details</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-people fs-4"></i><span>modify</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-person-badge fs-4"></i><span>party Dc bill not received
            </span>
          </a>
        </li>
      </ul>
    </li><!-- End Purchsase Nav -->


    
  </ul>

</aside><!-- End Sidebar-->