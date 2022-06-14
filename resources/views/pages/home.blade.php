@extends('layouts.default')

@section('content')

<head>
  <title> Joshua Angelo Cruz </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  scroll-behavior: smooth;
}

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 50px;
  box-shadow: 0 1px 5px 1px rgba(0, 0, 0, 0.2);
  width: 100vw;
  position: fixed;
  background-color: white;
  transition: all 0.5s ease-in-out;
}

.logo h1 {
  cursor: pointer;
}

.nav__links {
  display: flex;
  align-items: center;
  justify-content: center;
}

.nav__link {
  margin: 0 10px;
  color: black;
  padding: 5px 15px;
  border-radius: 100px;
  transition: all 0.5s ease-in-out;
  text-decoration: none;
}

.nav__link.active,
.nav__link:hover {
  background-color: black;
  color: white;
}

.section {
  min-height: 100vh;
  display: block;
  align-items: center;
  justify-content: center;
}

.section:nth-child(odd) {
  background-color: rgb(235, 235, 235);
}

#about {
    padding-top: 130px;
    margin-left: 70px;
    margin-right: 70px;
    text-align: center;
}

#about h1 {
    margin-top: 20px;
    font-size: 40px;
}

#about p {
    font-size: 25px;
}

#about img {
    width: 280px;
    height: 280px;
    display: flex;
    border: solid 5px #000;
    border-radius: 100%;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#lessons {
    padding-top: 100px;
    padding-left: 70px;
    padding-right: 70px;
    text-align: center;
}

#lessons h1 {
    margin-top: 20px;
    font-size: 40px;
}

#lessons h2 {
    margin-top: 15px;
    font-size: 30px; 
    margin-top: 15px;
    font-size: 30px;
    color: #451b85;
}

#lessons h3 {
    font-size: 30px;
    font-size: 30px;
    color: #851b1b;
}

#lessons p {
    font-size: 18px;
    padding-bottom: 40px;
}

#sixyrs {
    padding-top: 130px;
    margin-left: 70px;
    margin-right: 70px;
    text-align: center;
}

#sixyrs h1 {
    margin-top: 20px;
    font-size: 40px;
    margin-bottom: 20px;
}

#sixyrs p {
    font-size: 25px;
}
  </style>

</head>

<body>

<div class="navbar">
        <div class="logo">
          <h1>Joshua Angelo Cruz</h1>
        </div>
      
        <div class="nav__links">
          <a href="#about" class="active nav__link">About Me</a>
          <a href="#lessons" class="nav__link">Favorite Lessons</a>
          <a href="#sixyrs" class="nav__link">6 Years From Now</a>
        </div>
      </div>
      
      <div id="about" class="section">
        <h1>Hello, I'm Joshua</h1>   
        <img src="https://scontent.fcrk3-2.fna.fbcdn.net/v/t39.30808-6/277348706_4224090114359926_5450290464038706564_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEAiUoV8IjY1YOJOaaDwSH_gTnA189lVZeBOcDXz2VVl0GYxf5wqVgChWmJndFsDlyMGn7sANFFuBXThh28N16l&_nc_ohc=zCDS-3qbnI8AX98ICzj&_nc_ht=scontent.fcrk3-2.fna&oh=00_AT_younczVI_hL5DVL9dM_l4vHIOibs2l7gCCfbp4zvKug&oe=62ADB6DD" alt="">
            <p>I am a Computer Science student from Pamantasan ng Lungsod ng Pasig.
                I'm an aspiring programmer and data scientist.                
            </p>

            
  
      </div>

      <div id="lessons" class="section">

        <h1>My Favorite Lessons</h1>

        <h2>CS405: Open Source Programming with Framework</h2>

        <h3>Introduction to Laravel</h3>

        <p>Laravel is an open-source web MVC framework for PHP.

            Laravel is a robust framework that provides easy development of PHP web applications
            with features like a modular packaging system with a dedicated dependency manager,
            access to relational databases, and other utilities for application deployment and
            maintenance.</p>

        <h2>CS202: Parallel and Distributed Programming</h2>

        <h3>Introduction to Github</h3>
    
        <p>GitHub is a code hosting platform for version control and collaboration. It lets you and
            others work together on projects from anywhere. <br>
            
            Github is a web-based platform used for version control. Git simplifies the process of
            working with other people and makes it easy to collaborate on projects. <br>
            
            Team members can work on files and easily merge their changes in with the master
            branch of the project.<br>
            
            Git & GitHub skill has slowly made its way from preferred skills to must have skills in
            multiple job roles.</p>
    




      </div>
      
      <div id="sixyrs" class="section">    
        <h1>6 Years From Now</h1>

        <p>I see myself enjoying the life I wanted and deserve. Still working and pursuing the field of Computer Science.
            And with all the skills and experiences I acquired in my previous works, I'll make sure I will succeed.</p>
    
      </div>

  <script>
// active navbar link
const sections = document.querySelectorAll(".section");

window.addEventListener("scroll", function (event) {
  sections.forEach((section) => {
    let top = window.scrollY + 250;
    let offset = section.offsetTop;
    let height = section.offsetHeight;
    let id = section.getAttribute("id");

    if (top >= offset && top < offset + height) {
      document.querySelectorAll(".active").forEach((a) => {
        a.classList.remove("active");
      });

      document.querySelector("[href*=" + id + "]").classList.add("active");
    }
  });
});

</script>

</body>
</html>

@stop
