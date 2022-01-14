<script>
  import { onMount } from 'svelte';
  import { page } from '$app/stores';

  import { getPost } from '../../services/posts';
  import Post from '../../components/Post.svelte'

  let post;
  $: id = $page.params.slug;

  onMount(async () => {
    post = await getPost(id);
    console.log({post});
  });
</script>

<svelte:head>
  <title>Post {id}</title>
</svelte:head>

<main>
  <Post post={post}/>
</main>

<style>
  main {
    text-align : center;
    padding    : 1em;
    max-width  : 240px;
    margin     : 0 auto;
  }

  @media (min-width : 640px) {
    main {
      max-width : none;
    }
  }
</style>
