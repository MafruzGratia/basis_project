<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="col-md-6">
    <h2>Add Employee</h2>
    <form id="employeeForm" action="/admin/dashboard"  method="POST" >

        <div class="form-group">
            <label for="employeeName">Name:</label>
            <input  type="text" class="form-control" id="employeeName" name="EmpName" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="employeeEmail">Email:</label>
            <input  type="email" class="form-control" id="employeeEmail" name="EmpEmail" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="employeePassword">Password:</label>
            <input type="text" id="employeePassword" autocomplete="off" onfocus="this.type='password'" placeholder="Enter Password" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" src="{{ asset('js/admin/RegisterEmp.js') }}"></script>
