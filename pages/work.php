<!DOCTYPE html>
<html lang="en">
<?php include 'subcode/head.php'?>
<body>
<div class="parent">
<?php include 'subcode/header.php'?>
<main>
<section class="promida-work-section">
    <div class="container">
        <div class="promida-work">
            <div class="work-header">
                <h1>Our Amazing projects</h1>
                <p>Every project is a piece in Our hearts <br>
Check out Every Category , Every style of Business Crafted perfectly.
</p>
            </div>
        </div>
        <img class="girl" src="../images/portrait-young-woman-who-is-posing-covered-with-black-paint@2x.png" alt="girl">
    </div>
    </section>
    <section class="parent-work">
    <div  id="projects-small">
        <div class="all-projects-small">
                Filter by 
               <span class="All clicked filter">All</span>
            /  <span class="Branding filter">Branding</span> 
            /  <span class="Photography filter">Photography</span>
            /  <span class="Social Media filter">Social Media</span>
            /  <span class="Strategy filter">Strategy</span> 
            /  <span class="UI/UX filter">UI/UX</span>
            /  <span class="Video Production filter">Video Production</span> 
            /  <span class="Web Development filter">Web Development</span></div>
        </div>
        <div class="container projects  ">
        <?php include "subcode/projects.php"?>
        </div>
    </section>
</main>
<?php include 'subcode/footer.php'?>
</div>
<?php include 'subcode/script.php'?>
<script>
    const projects=  document.querySelector('.all-projects-small');

    projects.addEventListener('click', (e) => {
        let list=[...e.target.classList]
        const spans = document.querySelectorAll('span');
        let clickedProjects=[]

        if (list.includes("Branding")) {
            clickedProjects.push("Branding")
        }else if (list.includes("Photography") ) {
            clickedProjects.push("Photography")
        }else if (list.includes("Social")) {
            clickedProjects.push("Social")
        }else if (list.includes("Strategy")) {
            clickedProjects.push("Strategy")
        }else if (list.includes("UI/UX")) {
            clickedProjects.push("UI/UX")
        }else if (list.includes("Video")) {
            clickedProjects.push("Video")
        }else if (list.includes("Web")) {
            clickedProjects.push("Web")
        }else {
            clickedProjects.push("All")
        }
        const filters = document.getElementsByClassName("filter");

        spans.forEach((element,index)=>{
            let classes=[...element.classList]
            if (classes.includes(clickedProjects[0])){
                element.classList.add('clicked');
                let listOfEle = document.getElementsByClassName("project-container");
                for (let item of listOfEle) {
                    if(clickedProjects[0]=== "All"){
                        item.style.display = "flex"
                    }else if (item.classList[1]=== clickedProjects[0]) {
                        item.style.display = "flex"
                   }else{
                        item.style.display = "none"
                    }
                }
                
            }
            else{
                 element.classList.remove('clicked');
            }
        })
    });
</script>
<script>
// Get the modal
let projectsX =document.getElementsByClassName("project-container");
for(let i=0; i < projectsX.length; i++){
let modal = document.getElementsByClassName("modal")[i];

// Get the button that opens the modal
let btn = document.getElementsByClassName("myBtn")[i];

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[i];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}
</script>
</body>
</html>