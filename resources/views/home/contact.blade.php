<form method="POST" action="/contact">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>

    <input type="submit" value="Send">
</form>
