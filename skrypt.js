var dishes = [
    {
        name: "szakszuka",
        bottom: "images/szakszuka.png",
        top: "images/szakszuka2.png",
    },
    {
        name: "tarta",
        bottom: "images/tarta.png",
        top: "images/tarta2.png",
    },
    {
        name: "klopsy",
        bottom: "images/klopsy.png",
        top: "images/klopsy2.png",
    },
];

for (var i = 0; i < dishes.length; i++) {
    var div = document.createElement("div")
    div.classList.add('dish');
    div.id = dishes[i].name;
    var img = document.createElement("img");

    var href = document.createElement("a");
    href.href = dishes[i].name + ".html";

    img.src = dishes[i].bottom;
    img.setAttribute("bottomImg", dishes[i].bottom);
    img.setAttribute("topImg", dishes[i].top);
    img.width = 290;
    img.height = 290;
    img.classList.add("dishImg");

    href.appendChild(img);
    div.appendChild(href);

    var src = document.getElementById("gallery");

    src.appendChild(div);
}


document.querySelectorAll('.dishImg').forEach(item => {

    item.addEventListener('mouseover', event => {
        item.src = item.getAttribute("topImg");
    });
    item.addEventListener('mouseout', event => {
        item.src = item.getAttribute("bottomImg");
    });
});
