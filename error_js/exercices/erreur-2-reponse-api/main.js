const button = document.getElementById("load-posts");
const result = document.getElementById("result");

button.addEventListener("click", async () => {
  try {
    const response = await fetch("./error-response.html");
    const posts = await response.json();
    result.textContent = JSON.stringify(posts, null, 2);
  } catch (error) {
    console.error("Erreur pendant le chargement :", error);
    result.textContent = error.message;
  }
});