<!doctype html>
<html>
    <head>
        <title>FEEDBACK</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;            
            }
            body {
                background-color: lavender;
            }
            span {
                color:red;
            }
            .container {
                width: 50%;
                margin: 35px auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
                text-align: center;
                margin-top: 15px;
                padding: 20px;
                background-color: white;
            }
            div h1 {
                text-align: center;
                margin-top: 50px;
                margin-bottom: 20px;
            }
            label {
                font-size:larger;
                padding:20px;
            }
            .row{
                padding:5px;
            }
            input[type=button],input[type=submit] {
                margin: 0 5px;
                font-size:larger;
            }
            input[type=text],textarea {
                width: 70%;
                padding: 7px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
             }
            @media screen and (max-width:1200px) {
               .container {
                     width:70%;
               }
            }
            @media screen and (max-width:900px) {
               .container {
                     width:80%;
               }
            }
            @media screen and (max-width:600px) {
               .container {
                     width:90%;
               }
            }
        </style>
    </head>
    <body>
        <div>
            <h1>FEEDBACK FORM</h1>
        </div>
        <div class="container">
        <form name="feedback" method="POST" action="feedback.inc.php" onsubmit="return feedback_validate()">
          <div class="row">
            <label><span>*</span> Was the website really helpful for you ?</label><br>
                <input type="radio" id="yes1" name="qn1" value="yes">
                    <label for ="yes1">Yes</label>
                <input type="radio" id="no1" name="qn1" value="no">
                    <label for ="no1">No</label>
          </div>
            <br>
          <div class="row">
            <label><span>*</span> Does the website need any enhancements ?</label><br>
                <input type="radio" id="yes2" name="qn2" value="yes">
                    <label for ="yes2">Yes</label>
                <input type="radio" id="no2" name="qn2" value="no">
                    <label for ="no2">No</label>
          </div>
                <br>
          <div class="row">
                <label>If yes, what enhancements ?</label><br>
                <input type="text" name="qn21">
          </div>
            <br>
          <div class="row">
            <label><span>*</span> Your feedback</label><br>
            <textarea rows="5" cols="30" name="fb" required></textarea>
          </div>
            <br><br>
            <div class="row"> 
                <span class="col">
                    <a href="cancel_fb.php">
                    <input type="button" class="but" value="Cancel"></a>
                </span>
                <span class="col">
                    <input type="submit" class="but" name="submit" value="Submit">
                </span>
            </div>
        </form> 
        <script >
          function feedback_validate() {
             if (!document.getElementById('yes1').checked && !document.getElementById('no1').checked) {
                  alert("FILL THE FORM ( question 1 not filled )");
                  return false;
             }
             if (!document.getElementById('yes2').checked && !document.getElementById('no2').checked) {
                  alert("FILL THE FORM ( question 2 not filled )");
                  return false;
              }
             var txt = document.feedback.qn21.value;
             if (document.getElementById('yes2').checked && (!txt || txt.length === 0 )) {
                  alert("Enter suggestions for enhancements");
                  return false;
             }
              return true;
          } 

        </script>
    </body> 
</html>