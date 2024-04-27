<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- resources/views/components/view-emp.blade.php -->
<div class="col-sm-10" id="employee_data">
    <h2>Employees List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="bg-dark justify-content-center">
        <!-- Custom Pagination Links -->
        @if ($pagination['current_page'] > 1)
            <a href="{{ route('admin-viewEmp', ['page' => 1]) }}"><<</a>
            <a href="{{ route('admin-viewEmp', ['page' => $pagination['current_page'] - 1]) }}"> < </a>
        @endif
        @for ($i = 1; $i <= $pagination['total_pages']; $i++)
            <a href="{{ route('admin-viewEmp', ['page' => $i]) }}" class="{{ $i == $pagination['current_page'] ? 'active' : '' }}">{{ $i }}</a>
        @endfor
        @if ($pagination['current_page'] < $pagination['total_pages'])
            <a href="{{ route('admin-viewEmp', ['page' => $pagination['current_page'] + 1]) }}"> > </a>
            <a href="{{ route('admin-viewEmp', ['page' => $pagination['total_pages']]) }}"> >> </a>
        @endif
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('js/admin/pagination.js') }}"></script>
