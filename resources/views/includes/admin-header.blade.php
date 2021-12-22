<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}" href="/admin/category">Categories</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('admin/course*')) ? 'active' : '' }}" href="/admin/course">Courses</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }}" href="/admin/users">Users</a>
    </li>
</ul>