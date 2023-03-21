// public/js/nav.js

const elNav = document.querySelector("nav");

(async () => {
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

        console.log(await response.text());

    } catch (error) {
        console.log(error.message);
    }
})();