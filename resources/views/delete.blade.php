<h1>Delete Data</h1>
<a href="addmember"><button>Add</button></a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Number</td>
        <td>Action</td>
    </tr>
    @foreach ($members as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['mobile'] }}</td>
            <td><a href="{{ 'delete/' . $item['id'] }}">Delete</a> <a href="{{ 'edit/' . $item['id'] }}">Edit</a></td>
        </tr>
    @endforeach
</table>
