// public/js/nav.js

const elNav = document.querySelector("nav");

const links = async () => {
    try {
        const url = "/myblock/nav";
        const body = {
            type: "index",
            auth: false
        };

        const response = await fetch(url, {
            method: "POST",
            headers: { "Content-Type" : "application/json" },
            body: JSON.stringify(body)
        });

        if (!response.ok) {
            throw new Error("Network response was not ok");
        }

        const data = await response.json();

        return data;

    } catch (error) {
        return error;
    }
}

console.log(links());