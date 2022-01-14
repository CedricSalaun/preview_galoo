<script>
  import Post from '../../components/Post.svelte'
</script>

<svelte:head>
  <title>Post</title>
</svelte:head>

<main>
<!--  <Post/>-->
</main>

<style>
  main {
    text-align : center;
    padding    : 1em;
    max-width  : 240px;
    margin     : 0 auto;
  }

  h1 {
    color          : #FF3E00;
    text-transform : uppercase;
    font-size      : 4em;
    font-weight    : 100;
  }

  @media (min-width : 640px) {
    main {
      max-width : none;
    }
  }
</style>
