<h1>Lab Management</h1>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Lab Name</th>
        <th>Lab Abbreviation</th>
        <th>Location</th>
    </thead>
    <tbody>
        @foreach($items as $lab)
        <tr>
            <td>{{ $lab->id }}</td>
            <td>{{ $lab->lab_name }}</td>
            <td>{{ $lab->abbreviation }}</td>
            <td>{{ $lab->location }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
