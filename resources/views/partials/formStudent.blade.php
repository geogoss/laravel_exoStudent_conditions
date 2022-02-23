<section class="w-50 mx-auto">
    <h1>create member</h1>
        <form action="/store" method="POST">
            @csrf
            <label for="">Name:</label><br>
            <input name="name" type="text"><br>

            <label for="">Gender:</label>
            <select name="gender" id="">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select><br>

            <label for="">Email:</label><br>
            <input name="email" type="text"><br>

            <label for="">Age:</label><br>
            <input name="age" type="number"><br>

            <button type="submit">Send</button>
        </form>
</section>