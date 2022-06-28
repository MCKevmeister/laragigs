<script>
    // import { inertia } from '@inertiajs/inertia-svelte'
</script>

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="images/favicon.ico"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        import tailwind from "laravel-mix/src/Mix";

        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2e",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
<nav class="flex justify-between items-center mb-4">
    <a href="index.html"><img class="w-24 logo" src="images/logo.png" alt=""/></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        <li>
            <a href="register.html" class="hover:text-laravel"> Register</a>
        </li>
        <li>
            <a href="login.html" class="hover:text-laravel">Login</a>
        </li>
    </ul>
</nav>
<article>
    <slot/>
</article>
</body>
