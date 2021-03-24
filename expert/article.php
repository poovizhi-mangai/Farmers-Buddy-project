<!doctype html>
<html>
<style>

div.a {
  text-align: center;
  color: black;
}

body
{
background-image: url("https://nerdymates.com/static/img/regular/article-review-img.jpg");
background-size: cover;
}

</style>
<body >

<form action="article.inc.php" method="POST" >

<div class="a">
<h2>ARTICLE FORM</h2>
<br>
<br>

     <label for="Fname"><b>FIRST NAME:</b></label>
     <input type="text" id="fname" name="fname" required>
    
     <br>
     <br>
     <label for="lname"><b>LAST NAME:</b></label>
     <input type="text" id="lname" name="lname" required>
     <br>
     <br>
     <label for="gender"><b>GENDER</b></label>
     <select id="gender" name="gender">
     <option value="male">Male</option>
     <option value="female">Female</option>
     <option value="trans">Transgender</option>
     </select>
     <br>
     <br>
	 
	 <label for ="title"><b>TITLE:</label>
	 <input type="text" id="title" name="title" required>
	 <br>
	 <br>
     
<h3 style="color:green;">WRITE YOUR ARTICLE HERE!!</h3>
<br>
     <textarea name="message" rows="40" cols="130" required>
     </textarea>
<br>
<br>

    <input type="submit" value="SUBMIT">
<br>
<br>
     <input type="reset" value="RESET">
	 
<br>
<br>
<button>
<a href="index.1.php">
Back</button>
</form >
</body>
</html>