const about = document.getElementById("about");
about.addEventListener("mouseover", (event)=>{
    console.log("mouse over about");}, false);
const proj = document.getElementById("proj");
const projcontent = document.getElementById("projectscontent");
proj.addEventListener("mouseover", (event)=>{
    console.log("mouse over projects");
    projcontent.style.display = "block";
    //event.target.style.display = "block";
}, false);
proj.addEventListener("mouseout", (event)=>{
    projcontent.style.display = "none";
    console.log("mouse not over projects");
}, false);
const contact = document.getElementById("contact");
contact.addEventListener("mouseover", (event)=>{
    console.log("mouse over contact");}, false);