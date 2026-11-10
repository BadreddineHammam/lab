let result = document.getElementById("categoryList");
let form = document.getElementById("categoryForm");
let spinner = document.getElementById("spinner");
let botona = document.getElementById("botona");
let message = document.getElementById("message");

function showMessage(text, isError) 
{
    message.textContent = text;
    message.className = isError
        ? "bg-red-500 text-white p-3"
        : "bg-green-500 text-white p-3";

    setTimeout(() => {
        message.textContent = "";
        message.className = "";
    }, 3000);
}

function show() {
    fetch("../controller/contro.php")
        .then(async response => {
            const data = await response.json();

            // Read the PHP error message even when the response has an error status.
            if (!response.ok) {
                throw new Error(data.message || "The categories could not be loaded.");
            }

            return data;
        })
        .then(categories => 
        {
            result.replaceChildren();

            categories.forEach(category => {
                const row = document.createElement("tr");
                const nameCell = document.createElement("td");
                nameCell.textContent = category.name;
                row.appendChild(nameCell);
                result.appendChild(row);
            });
        })
        .catch(error => {
            showMessage(error.message, true);
        });
}

function add() {
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        spinner.classList.remove("hidden");
        botona.disabled = true;

        fetch("../controller/contro.php", {
            method: "POST",
            body: new FormData(form)
        })
            .then(async response => {
                const data = await response.json();

                // Show the clear message returned by the PHP controller on errors.
                if (!response.ok) {
                    throw new Error(data.message || "The category could not be saved.");
                }

                return data;
            })
            .then(data => {
                showMessage(data.message, false);
                show();
                form.reset();
            })
            .catch(error => {
                showMessage(error.message, true);
            })
            .finally(() => {
                spinner.classList.add("hidden");
                botona.disabled = false;
            });
    });
}

addEventListener("DOMContentLoaded", function () {
    show();
    add();
});
