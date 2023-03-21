const elNav = document.querySelector("nav");

const fetchLinks = async () => {
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
    response = await fetchLinks();

    if (response) {
        response.forEach(el => document.write(`${el}<br>`));
    }
}

writeLinks();