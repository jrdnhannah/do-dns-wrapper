<form action="{{ route('auth.post_register') }}" method="post">
    <input type="email"     placeholder="Email"     name="email" />
    <input type="password"  placeholder="Password"  name="password" />
    <button type="submit">Register</button>
</form>