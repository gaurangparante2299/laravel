<h1>Edit Page</h1>

<form action="edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}} >
    <input type="text" name="name" id="" value="{{$data['name']}}"><br><br>
    <input type="text" name="email" id="" value="{{$data['email']}}"><br><br>
    <input type="text" name="mobile" id="" value="{{$data['mobile']}}"><br><br>
    <button type="submit">Update</button>
</form>