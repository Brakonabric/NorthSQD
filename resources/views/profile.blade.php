<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Cart</title>

<body>
    @include('templates/navbar')
    <div class="userBox">
        <form method=POST action={{route('profilePost')}}>
        @csrf
        <div class="userData">
            <div class="name-surname">
            <p>Name:</p><p class="notEditThing trickyText"> {{ $user->name }}</p><input class="editThing" name="name" type="text" value={{ $user->name }}>
            </div>
            <div class="name-surname">
            <p>Surname:</p> <p class="notEditThing trickyText"> {{ $user->surname }}</p><input class="editThing" name="surname" type="text" value={{ $user->surname }}>
            </div>
            <div class="name-surname">
            <p>email: {{ $user->email }}</p>
            </div>
        </div>
        <div class="coolButtons">
            <button class="notEditThing optionsbut" type="button" onclick="showEdit()">Edit</button>
            <div class="optionsbut logout" id="logout"><a href={{route('logout')}}>Logout</a></div>
            <button class="editThing optionsbut" type="button" onclick="cancel()">Cancel</button>
            <input class="editThing optionsbut" type="submit" value="Save"></input>
        </div>
    </form>
    </div>
    @include('templates/footer')
</body>
<script>
    function showEdit() {
        const editItems=Array.from(document.getElementsByClassName("editThing"));
        const notEditItems=Array.from(document.getElementsByClassName("notEditThing"));
        const logout=document.getElementById("logout");

        editItems.forEach(item => {
            item.style.display='inline-block';
        });
        notEditItems.forEach(item => {
            item.style.display='none';
        });
        logout.style.display="none";


    }
    function cancel() {
        const editItems=Array.from(document.getElementsByClassName("editThing"));
        const notEditItems=Array.from(document.getElementsByClassName("notEditThing"));
        const logout=document.getElementById("logout");

        editItems.forEach(item => {
            item.style.display='none';
        });
        notEditItems.forEach(item => {
            item.style.display='inline-block';
        });
        logout.style.display="inline-flex";
    }

</script>

</html>
