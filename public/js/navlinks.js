const navLinks = document.querySelector("#nav-links");

async function fetchLinks () {
    try {
        const url = "/myblock/nav/links";
        const body = {
            type: "index",
            auth: false
        };

        const response = await fetch(url, {
            method: "POST",
            headers: { "Content-Type" : "application/json" },
            body: JSON.stringify(body)
        });

        if (response.ok) {
            const data = await response.json();
            return data;
        }

    } catch (error) {
        console.log(error);
    }
};

async function writeLinks() {
    const data = await fetchLinks();

    if (data) {
        data.forEach(el => navLinks.innerHTML += `<li><a href="#" class="nav-link">${el}</a></li>`);
    }
}

writeLinks();