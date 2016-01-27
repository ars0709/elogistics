<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="images/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo ($_SESSION['userid']); ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->  

    <!-- Sidebar Menu -->
    <ul id="gen-Menu" class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>OPERATIONAL</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li> -->

            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>OPERATIONAL</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>OUTBOUND <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>INBOUND<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>MANIFEST<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>DELIVERY SHEET<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>VIEW SHIPMENT<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>SERVICES</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>STATUS <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Confirm</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>POD<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Confirm</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>RETURN SHIPMENT <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>CUSTOMER SERVICES</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>VIEW STATUS</a></li>
                
              </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>TRACE & TRACKING</span></a></li>
            <li class="header">ADMIN</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>BUSINESS PARTNER</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>Customer <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Rates</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
              <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>Vendor <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Rates</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
              <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>Agents <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Rates</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>SETTING</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>Company Information</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Publish Rates</a></li>
              <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>Master Data<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">

                    <li><a href="#"><i class="fa fa-circle-o"></i>Transporation Mode</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Services</a></li>
                    <li><a href="<?php echo G_URL.'?page=uom'; ?>"><i class="fa fa-circle-o"></i>Unit Of Measurements</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o text-red"></i>Location<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Country</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Host</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Destination</a></li>
                  </ul>
                  
                </li>
                  </ul>

                </li>
              <li>
                  <a href="#"><i class="fa fa-circle-o text-red"></i>Agents <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Rates</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View</a></li>
                  </ul>
                </li>
              </ul>
            </li>
           <!--  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->

          </ul>

    <!-- /.sidebar-menu -->


    </section>
    <!-- /.sidebar -->
  </aside>