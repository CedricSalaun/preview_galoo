<script>
  export let post = {};
</script>

<main>
  <h1>{post.title?.rendered}</h1>
  <p>{@html post.content?.rendered}</p>
</main>

<style>
  main {
    text-align: center;
    padding: 1em;
    max-width: 240px;
    margin: 0 auto;
  }

  h1 {
    color: #ff3e00;
    text-transform: uppercase;
    font-size: 4em;
    font-weight: 100;
  }

  p {
    font-family: gmsj, serif;
    color: #FFBF00;
    font-size: 1em;
    font-weight: 10;
  }

  @media (min-width: 640px) {
    main {
      max-width: none;
    }
  }
</style>
