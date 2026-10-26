const responseBody = {
  status: "success",
  data: [
    { title: "Premier article" },
    { title: "Deuxième article" }
  ]
};

document.getElementById("show-posts").addEventListener("click", () => {
  const posts = responseBody;
  const list = document.getElementById("posts");

  list.replaceChildren();
  posts.forEach((post) => {
    const item = document.createElement("li");
    item.textContent = post.title;
    list.append(item);
  });
});