<h1>User Login</h1>

<form action="submit" method="POST">
    @csrf
    <!-- {{method_field('DELETE')}} -->
    <input type="text" name="username" id="" placeholder="Enter Username"><br><br>
    <input type="password" name="password" id="" placeholder="Enter password"><br><br>
<button type="submit">login</button>
</form>