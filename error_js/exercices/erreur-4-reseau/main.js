document.getElementById("load-posts").addEventListener("click", async () => {
  const result = document.getElementById("result");

  try {
    const response = await fetch("http://localhost:9999/api/posts.json");
    if (!response.ok) {
      throw new Error(`Erreur HTTP : ${response.status}`);
    }

    const posts = await response.json();
    result.textContent = posts.map((post) => post.title).join("\n");
  } catch (error) {
    console.error("Échec du chargement :", error);
    result.textContent = "Impossible de charger les articles.";
  }
});