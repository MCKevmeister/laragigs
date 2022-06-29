<script context="module">
    import Layout from './Layout.svelte'

    export const layout = Layout
</script>

<script>
    import Hero from "./Components/Hero.svelte";
    import Search from "./Components/Search.svelte";
    import ListingItem from "./Components/ListingItem.svelte";

    export let listings
</script>

<Hero />
<Search />

<div class="lg:grid lg:grid-cols-2 gap-2 space-y-4 md:space-y-0 mx-4">
    {#if listings.length === 0}
        <p>No listings found</p>
    {/if}
    {#each listings as listing}
        <ListingItem {...listing}/>
    {/each}
</div>
