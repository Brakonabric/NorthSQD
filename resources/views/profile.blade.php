<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Profile</title>
</head>

<body>
    @include('templates/navbar')
    <div class="container">
        <div class="card">
            <h2>User Profile</h2>
            <form method="POST" action="{{ route('profilePost') }}">
                @csrf
                <div class="userData">
                    <div class="field">
                        <label for="name">Name:</label>
                        <p class="notEditThing">{{ $user->name }}</p>
                        <input class="editThing" id="name" name="name" type="text" value="{{ $user->name }}">
                    </div>
                    <div class="field">
                        <label for="surname">Surname:</label>
                        <p class="notEditThing">{{ $user->surname }}</p>
                        <input class="editThing" id="surname" name="surname" type="text" value="{{ $user->surname }}">
                    </div>
                    <div class="field">
                        <label>Email:</label>
                        <p class="email">{{ $user->email }}</p>
                    </div>
                </div>
                <div class="buttons">
                    <button class="notEditThing btn" type="button" onclick="showEdit()">Edit</button>
                    <div class="btn logout" id="logout"><a href="{{ route('logout') }}">Logout</a></div>
                    <button class="editThing btn" type="button" onclick="cancel()">Cancel</button>
                    <input class="editThing btn" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
    @include('templates/footer')
    <script>
        function showEdit() {
            const editItems = Array.from(document.getElementsByClassName("editThing"));
            const notEditItems = Array.from(document.getElementsByClassName("notEditThing"));
            const logout = document.getElementById("logout");

            editItems.forEach(item => {
                item.style.display = 'inline-block';
            });
            notEditItems.forEach(item => {
                item.style.display = 'none';
            });
            logout.style.display = "none";
        }

        function cancel() {
            const editItems = Array.from(document.getElementsByClassName("editThing"));
            const notEditItems = Array.from(document.getElementsByClassName("notEditThing"));
            const logout = document.getElementById("logout");

            editItems.forEach(item => {
                item.style.display = 'none';
            });
            notEditItems.forEach(item => {
                item.style.display = 'inline-block';
            });
            logout.style.display = "inline-flex";
        }
    </script>
</body>

</html>
