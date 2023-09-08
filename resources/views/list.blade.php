<h1>List Page</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Last name</td>
    </tr>
    @foreach ($emp as $s)
        <tr>
            <td>{{ $s['id'] }}</td>
            <td>{{ $s['name'] }}</td>
            <td>{{ $s['lastname'] }}</td>
        </tr>
    @endforeach
</table>
