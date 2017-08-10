<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo Auth::user()->name;?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <li><a href="{{url('dashboard')}}"><span>Dashboard</span></a></li>
            <!-- Optionally, you can add icons to the links -->
             @if (Auth::user()->isAdmin)

             <li class="treeview"><a href="#"><span>Users</span><i class="fa fa-angle-left pull-right"></i></a>               
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/user')}}">View Users</a></li>
                    <li><a href="{{url('admin/user/create')}}">New User</a></li>
                    <li><a href="{{url('admin/user/edit')}}">Edit User</a></li>
                    <li><a href="">Delete Users</a></li>
                </ul>
            </li>

             <li><a href="#"><span>Projects</span></a></li>
             <li class="treeview"><a href="{{url('admin/task/task')}}"><span>Tasks</span><i class="fa fa-angle-left pull-right"></i></a>               
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/task')}}">All Tasks</a></li>
                    <li><a href="{{url('admin/task/create')}}">New Task</a></li>
                    <li><a href="">Delete Task</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><span>Notifications</span><i class="fa fa-angle-left pull-right"></i></a>               
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/notification')}}">View All Notifications</a></li>
                    <li><a href="{{url('admin/notification/create')}}">New Notification</a></li>
                    <li><a href="{{url('admin/notification/edit')}}">Edit Notification</a></li>
                    <li><a href="{{url('admin/notification/delete')}}">Delete Notifications</a></li>
                </ul>
            </li>
            @endif

             <li class="treeview"><a href="{{url('user/task/task')}}"><span>Tasks</span><i class="fa fa-angle-left pull-right"></i></a>               
                <ul class="treeview-menu">
                    <li><a href="{{url('users/tasks')}}">All Tasks</a></li>
                    <li><a href="{{url('users/tasks/create')}}">New Task</a></li>
                    <li><a href="">Delete Task</a></li>
                </ul>
            </li>
            <li><a href="#"><span>Link</span></a></li>
            <li><a href="#"><span>Link</span></a></li>
            <li><a href="#"><span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><span>Analytics</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Acquisition</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>