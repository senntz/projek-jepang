const inputContainer = document.getElementById("search-input");

const searchWrapper = document.getElementById("search-wrapper");
const searchContainer = document.getElementById("search-container");
const searchHeader = document.getElementById("header-container");

inputContainer.addEventListener("click", () => {
    searchWrapper.style.display = "block";
});

inputContainer.addEventListener("input", (event) => {
    const inputValue = inputContainer.value.trim();  

    if (inputValue.length === 0) {
        searchHeader.textContent = "No results found";  
        searchContainer.innerHTML = "";  
        return;
    }

    fetch("../home.php", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ key: inputValue })
    })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                searchHeader.textContent = "No results found";
                searchContainer.innerHTML = ""; 
            } else {
                searchHeader.textContent = "Results";
                searchContainer.innerHTML = ""; 

                if (data.length === 0) {
                    searchHeader.textContent = "No results found";
                    searchContainer.innerHTML = "";
                    return;
                }

                data.forEach(item => {
                    const searchDiv = document.createElement("div");
                    searchDiv.innerHTML = `
                    <img src="data:image/jpeg;base64,${item.gambar_tempat}"/>
                    <h1>${item.nama_tempat}</h1>
                    <h3>${item.deskripsi_tempat}</h3>
                `;
                    searchContainer.appendChild(searchDiv);
                });
            }
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });
});