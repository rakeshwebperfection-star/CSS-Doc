let pages = [];

// Load data
fetch("search.php")
.then(res => res.json())
.then(data => {
    pages = data.map(p => ({
        ...p,
        words: (p.title + " " + p.content)
            .toLowerCase()
            .replace(/[^a-z0-9 ]/g, " ")
            .split(/\s+/)
    }));
});


// 🔍 SMART SEARCH
function searchData(query) {
    let qWords = query.toLowerCase().split(" ");

    let results = pages.map(p => {
        let score = 0;

        qWords.forEach(q => {
            if (p.title.toLowerCase().includes(q)) score += 5;
            if (p.words.includes(q)) score += 1;
        });

        return { ...p, score };
    });

    return results
        .filter(r => r.score > 0)
        .sort((a, b) => b.score - a.score);
}


// 🔍 Suggestions
function showSuggestions() {
    let input = document.getElementById("searchInput");
    let box = document.getElementById("suggestionsBox");

    if (!input || !box) return;

    let query = input.value.trim();

    box.innerHTML = "";

    if (!query) {
        box.style.display = "none";
        return;
    }

    let results = searchData(query).slice(0, 6);

    if (results.length === 0) {
        box.innerHTML = "<div>No results</div>";
        box.style.display = "block";
        return;
    }

    results.forEach(p => {
        let div = document.createElement("div");
        div.innerText = p.title;

        div.onclick = () => {
            window.location.href = p.url;
        };

        box.appendChild(div);
    });

    box.style.display = "block";
}


// 🔎 Submit
function handleSearch(e) {
    e.preventDefault();

    let query = document.getElementById("searchInput").value.trim();

    let results = searchData(query);

    if (results.length > 0) {
        window.location.href = results[0].url;
    } else {
        alert("No result found");
    }
}