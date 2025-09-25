<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<style>
    @import url("{{asset('css/project.css')}}");
</style>

<div class="container">
    <h1>List of Projects</h1>
    <a href="/projects/create" class="btn btn-success mb-3">Add Projects</a>
    <table border="1" cellpadding="5" cellspacing="0" class="table table-bordered" >
      <thead class="table-succes">
        <tr>
          <th>No.</th>
          <th>Project name</th>
          <th>Budget (THB)</th>
          <th>Lab abbreviation</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($items as $projects)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $projects->project_name }}</td>
            <td>{{ $projects->budget }}</td>
            <td>{{ $projects->lab->abbreviation }}</td>
            <td><a href="/projects/{{ $projects->id }}" class="btn btn-warning text-light">Edit</a>
              <a href="{{route("projects.destroy" , $projects->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @empty
          <tr><td colspan="4">No data</td></tr>
        @endforelse
      </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
