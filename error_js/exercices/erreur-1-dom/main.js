const form = document.getElementById("comment-form");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  document.getElementById("result").textContent =
    `Commentaire envoyé : ${form.elements.comment.value}`;
});