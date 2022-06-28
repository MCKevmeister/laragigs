<script context="module">
    import Layout from './Layout.svelte'

    export const layout = Layout
</script>

<script>
    import Listing from "./Listing.svelte";

    export let listings
</script>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    <div>
        {#if listings.length === 0}
            <p>No listings found</p>
        {/if}
        {#each listings as listing}
           <Listing {... listing}/>
        {/each}
    </div>
</div>
