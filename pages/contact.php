<!DOCTYPE html>
<html lang="en">
<?php include 'subcode/head.php'?>
<body>
<div id="preloader">
        <img src="../images/preloader.png" alt="preloader">
    </div>
<div class="parent">
<?php include 'subcode/header.php'?>
    <main>
        <section class="contact-page">
            <div class="container">
                <div class="tack-with-us">
                    <h1>Let's talk with Us</h1>
                    <p class='des'>Have a project in mind that you think we'd be a great fit for it? we'd love to know what you're</p>
                        <div class="form-links">
                            <p class="new-project show-two">New Project</p>
                            <p class="team">Joining Our Team</p>
                            <p><a  class='inquiries' href="faq.php">General inquiries</a></p>
                        </div>
                    <h4>Contact Info :</h4>
                    <div class="data">
                        <p>Phone Number:(+2)01002387494</p>
                        <p>Email: info@promida.net</p>
                        <p>Address: <a href="https://goo.gl/maps/n66VcQgAd52Cx6tJA">Fuad st. " AL-Horya Rd" Alexandria Egypt </a></p>
                    </div>
                </div>
                <form class="form-talk " id="company-form">
                    <div class="box1">
                        <div class="box">
                            <label for="fname">First name</label>
                            <input type="text" id="fname" name="fname" placeholder="Input your first name here">
                        </div>
                        <div class="box">
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" name="lname" placeholder="Input your last name here"> 
                        </div>
                    </div>
                    <div class="box1">
                        <div class="box">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Input your email here">
                        </div>
                        <div class="box">
                            <label for="cname">Company name</label>
                            <input type="text" id="cname" name="cname" placeholder="Input your company name here">
                        </div>
                    </div>
                    <label for="massage">Massage</label><br>
                    <textarea placeholder="Describe yourself here..." id="massage" name="massage" rows="4" cols="50"> 
                    </textarea>
                    <input class="submit" type="submit" value="Send Massage">
                </form>
                <form class="form-talk show"  id="employee-form">
                    <div class="box1">
                        <div class="box">
                            <label for="fname">First name</label>
                            <input type="text" id="fname" name="fname" placeholder="Input your first name here">
                        </div>
                        <div class="box">
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" name="lname" placeholder="Input your last name here"> 
                        </div>
                    </div>
                    <div class="box1">
                        <div class="box">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Input your email here">
                        </div>
                        <div class="box">
                            <label for="cname">Position</label>
                            <input type="text" id="cname" name="cname" placeholder="Input your company name here">
                        </div>
                    </div>
                    <label for="massage">Massage</label><br>
                    <textarea placeholder="Describe yourself here..." id="massage" name="massage" rows="4" cols="50"> 
                    </textarea>
                    <div class="file">
                        <input type="file" id="actual-btn" hidden/>
                        <label  class="actual-btn" for="actual-btn">Upload CV or portfolio</label>
                        <span id="file-chosen">No file chosen</span>
                        <input class="submit" type="submit" value="Send Massage">

                    </div>
                </form>
            </div>
        </section>

    </main>
<?php include 'subcode/footer.php'?>
</div>
<?php include 'subcode/script.php'?>
<script >
const newProject = document.querySelector('.new-project');
const team= document.querySelector('.team');
    function showForm() {
        newProject.classList.toggle('show-two');
        team.classList.toggle('show-two');
        document.querySelector('#company-form').classList.toggle('show');
        document.querySelector('#employee-form').classList.toggle('show');

}
const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
newProject.addEventListener('click', showForm);
team.addEventListener('click', showForm);
let loader=document.getElementById("preloader");
    window.addEventListener('load',function(){
        loader.style.display="none"
    })
</script>
</body>
</html>