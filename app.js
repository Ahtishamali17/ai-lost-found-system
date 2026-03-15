fetch("get_matches.php")

.then(res=>res.json())

.then(data=>{

let html="";

data.forEach(m=>{

html+=`

<div class="card">

<h3>${m.lost}</h3>

<p>Matched with: ${m.found}</p>

<div class="progress">

<div class="progress-bar" style="width:${m.similarity}%">

${m.similarity}%

</div>

</div>

</div>

`;

});

document.querySelector(".container").innerHTML+=html;

});