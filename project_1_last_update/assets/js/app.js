const form = document.getElementById("categoryForm");
const categoryList = document.getElementById("categoryList");
const saveButton = document.getElementById("botona");
const spinner = document.getElementById("spinner");
const message = document.getElementById("message");
const api = "backend/api/api.php";

// Show a clear green success message or red error message.
function showMessage(text, isError) {
    message.textContent = text;
    message.className = isError
        ? "mb-4 rounded bg-red-100 p-3 font-medium text-red-800"
        : "mb-4 rounded bg-green-100 p-3 font-medium text-green-800";

    // Hide the success or error message after 3 seconds.
    setTimeout(() => {
        message.textContent = "";
        message.className = "";
    }, 3000);
}

// Read categories from PHP and put them into the table.
function showCategories() {
    fetch(api)
        .then(response => {
            if (!response.ok) {
                throw new Error("Could not load categories.");
            }

            return response.json();
        })
        .then(categories => {
            categoryList.replaceChildren(); //Remove everything inside categoryList.

            categories.forEach(category => {
                const row = document.createElement("tr");
                const nameCell = document.createElement("td");

                nameCell.textContent = category.name;
                nameCell.className = "p-4";
                row.appendChild(nameCell);
                categoryList.appendChild(row);
            });
        })
        .catch(error => showMessage(error.message, true));
}

// Send the form to PHP when the user clicks Save.
form.addEventListener("submit", event => {
    event.preventDefault();
    saveButton.disabled = true;
    spinner.classList.remove("hidden");

    fetch(api, {
        method: "POST",
        body: new FormData(form)
    })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                throw new Error(data.message);
            }

            showMessage(data.message, false);
            form.reset();
            showCategories();
        })
        .catch(error => showMessage(error.message, true))
        .finally(() => {
            // Keep the spinner visible for 3 seconds, then hide it.
            setTimeout(() => {
                saveButton.disabled = false;
                spinner.classList.add("hidden");
            }, 3000);
        });
});

// Show the saved categories when the page opens.
showCategories();
