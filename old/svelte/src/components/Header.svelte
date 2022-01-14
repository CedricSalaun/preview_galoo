<script>
  import { fade, fly } from 'svelte/transition';
  import { getContext, onMount } from 'svelte';
  import { getCategories } from '../services/menu';

  let categories = [];
  const current = getContext('nav');

  onMount(async() => {
    categories = await getCategories();
    console.log({ categories });
  });

  function navigate($id) {

  }

</script>

<header>
  <div class="logo-container">
    <h3 transition:fade>
      OVERBOOK.ME
    </h3>
  </div>
  <ul>
    {#each categories as category, index (category.id)}
      <li class:active="{$current === category.id}"
          on:click={() => navigate(category.id)}
          in:fly="{{ y: 20, duration: 200 }}"
          out:fade>
        <a href="{`/${category.taxonomy}/${category.slug}`}">
          {category.name}
        </a>
      </li>
    {/each}
  </ul>
</header>

<style>
  header {
    display         : flex;
    justify-content : space-between;
    align-items     : center;
  }

  ul > li {
    list-style : none;
    text-align : left;
    cursor     : pointer;
  }
</style>
