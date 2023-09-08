<h1>List1.php</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile</td>
    </tr>
    @foreach ($member as $s)
        <tr>
            <td>{{ $s['id'] }}</td>
            <td>{{ $s['name'] }}</td>
            <td>{{ $s['email'] }}</td>
            <td>{{ $s['mobile'] }}</td>
        </tr>
    @endforeach
</table>
<div>
    {{$member->links()}}
</div>
<style>
    .w-5{
        display: none;
    }
</style>