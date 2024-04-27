
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/admin/dashboard">
            {{ $headText }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <!-- Add Employee Link -->
                <li class="nav-item">
                    <a class="nav-link" href="/admin/employee/add">Add Employee</a>
                </li>
                <!-- View Employee Link -->
                <li class="nav-item">
                    <a class="nav-link" href="/admin/employee/view">View Employees</a>
                </li>
                <!-- Logout Link -->
                <li class="nav-item">
                    <a class="btn btn-danger" href="/admin/logout" role="button">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
