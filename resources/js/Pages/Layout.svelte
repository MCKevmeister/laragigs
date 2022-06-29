<script>
    import {inertia} from '@inertiajs/inertia-svelte'
</script>

<title>LaraGigs | Find Laravel Jobs & Projects</title>

<body class="mb-48">
<nav class="flex justify-between items-center mb-4">
    <a href="/" use:inertia><img class="w-24 logo" src="images/logo.png" alt=""/></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        <li>
            <a href="register.html" class="hover:text-laravel" use:inertia> Register</a>
        </li>
        <li>
            <a href="login.html" class="hover:text-laravel" use:inertia>Login</a>
        </li>
    </ul>
</nav>

<main>
    <slot/>
</main>

<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
    <a href="create.html"
       class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
       use:inertia>Post Job</a>
</footer>
</body>

