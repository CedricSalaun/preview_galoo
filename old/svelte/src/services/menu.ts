const URL = 'http://localhost:8888/wp-json'

export async function getCategories() {
  try {
    const response = await fetch(`${URL}/wp/v2/categories`);
    return response.json();
  } catch(e) {
    console.error(e);
  }
}

