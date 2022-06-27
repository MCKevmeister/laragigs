<script>
    import {Link} from "@inertiajs/inertia-svelte";

    export let listings
    export let heading
</script>


<h1>{heading}</h1>

<div>
    {#if listings.length === 0}
        <p>No listings found</p>
    {/if}
    {#each listings as {id, title, description}}
        <Link href="/listing/{id}">
            <h2>{title}</h2>
        </Link>
        <p>{description}</p>
    {/each}
</div>
