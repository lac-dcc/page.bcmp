 // mas vou usar pq é mais legível;
async function funcaoBruno() {
    const response = await fetch('features.json');
    const data = await response.json();
    const tbody = document.createElement("tbody");
    for(let row of data) {
        const tr = document.createElement("tr");
        const td = document.createElement("td");
        td.innerText = row.name;
        tr.appendChild(td);
        tbody.appendChild(tr);
    }
    const bruno = document.getElementById("feature-table");
    const oldTbody = bruno.getElementsByTagName("tbody");
    if(oldTbody && oldTbody.length) {
        oldTbody[0].remove();
    }
    bruno.appendChild(tbody);
}
funcaoBruno();