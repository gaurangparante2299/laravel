<h1>datalist</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile</td>
    </tr>
    @foreach ($members as $d)
        <tr>
            <td>{{ $d->id}}</td>
            <td>{{ $d->name}}</td>
            <td>{{ $d->email}}</td>
            <td>{{ $d->mobile}}</td>
        </tr>
    @endforeach
</table>
