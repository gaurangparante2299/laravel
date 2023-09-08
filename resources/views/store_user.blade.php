<h1>Add New Member</h1>
@if(session('username'))
<h3>Data Saved for {{session('username')}}</h3>
@endif
<form action="storecontroller" method="POST">
    @csrf
    <input type="text" name="username" id="" placeholder="Name"><br><br>
    <input type="text" name="email" id="" placeholder="Email"><br><br>
    <input type="password" name="password" id="" placeholder="Password"><br><br>
    <button type="submit">Add User</button>
</form>