<script context="module">
    import Layout from './Layout.svelte'

    export const layout = Layout
</script>

<script>

import Search from "./Components/Search.svelte";

export let title;
export let description;
</script>

<Search />

<h2>{title}</h2>
<p>{description}</p>
