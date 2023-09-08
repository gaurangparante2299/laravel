<h1>User login</h1>


<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user id" id="">
    <br>
    <span style="color: red;">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="password"  >
    <br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>
</form>