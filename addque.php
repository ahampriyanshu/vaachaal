<?php  session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php 
	include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Question</title>
<link href="forum.css" rel="stylesheet" type="text/css">
<style>
html, body {
  background-color: rgba(231,238,239,0.9);
  overflow-x: hidden;
  padding-left: 100px;
}
.question_text{
    position: relative;
    width: 50%;
    font-size: 15px;
    line-height: 1.4;
    min-height: 30px;
    margin-bottom: 8px;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
}
.select {
  position: relative;
  letter-spacing: 0px;
  font-family: courier;
  color: red;
}
.select option{
  font-family: courier;
  color: white;
  font-weight: bold;
}
.option{
  font-family: courier;
  color: white;
  font-weight: bolder;
  font-size: 15px;
  background-color:#833AB4;
  padding: 7px; 
 
}
.title{
  font-size: 40px;
  letter-spacing: 1px;
  font-family: courier;
  color: white;
 }
 #submit {
  background-color:#4CAF50;
  color: white;
  font-weight: bold;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-weight: light;
  font-family:'Trebuchet MS', sans-serif;
  border-radius: 5%;
}
#questionbox{
    position: relative;
    padding-left: 10px;
    width: 80%;
    }

#submit:hover, #submit:focus {
  background-color: #833AB4;
}
</style>
</head>
<body><br>
  <div id="questionbox" >
<form name="addform" action="postque.php" method="POST" required>
<h class="title">Post New Question</h> &emsp; &emsp; &emsp; &emsp; &emsp; 
<input type="file" name="file">
<input type="submit" id="submit" value="Get answer"><br><br><br>
<textarea name="content" class="question_text" cols="80" rows="10" placeholder="Enter Question" required></textarea>
<br><br>

--balloon-color: rgba(16,16,16,0.95);
--balloon-font-size: 12px;
--balloon-move: 4px;
--color-bg: #f3f7f7;
--color-bg-2: #e7eeef;
--color-white: #fff;
--color-shade-lighter: #f3f7f7;
--color-shade-light: #e7eeef;
--color-shade-medium: #b7c9cc;
--color-shade-dark: #738f93;
--color-text-light: #b7c9cc;
--color-text-medium-dark: #39424e;
--color-text-dark: #0e141e;
--color-text-dark-faded: #576871;
--modal-overlay-color: rgba(231,238,239,0.9);
--active-tab-color: #000;
--select-border-color: #b3b3b3;
--font-family-text: OpenSans, Arial, Helvetica, sans-serif;
--font-family-input: SourceCodePro, monaco, Courier, monospace;
color: #39424e;
-webkit-font-smoothing: antialiased;
border: 0;
font: inherit;
font-size: 100%;
margin: 0;
outline: 0;
padding: 0;
vertical-align: baseline;
        <div class="select">
          &emsp;
            <label>Level of hardness</label>&nbsp;&nbsp;
            <select name="level" class="option">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
           &emsp;&emsp;
            <label>Time Required</label>&nbsp;&nbsp;
            <select name="tym" class="option">
              <option value="0-2 min">0-2 Min</option>
              <option value="2-5 Min">2-5 Min</option>
              <option value="5-10 Min">5-10 Min</option>min
            </select>
       &emsp;&emsp;
          
            <label>Branch</label>&nbsp;&nbsp;
            <select name="branch" class="option">
              <option value="CSE/IT">CSE/IT</option>
              <option value="ME">ME</option>
              <option value="EE">EE</option>
              <option value="Civil">Civil</option>
              <option value="ECE">ECE</option>
              <option value="PE">PE</option>
              <option value="Misc">Misc</option>
                </select>
          </div><br><br>
</form></div>
 <script src="essentials/ckeditor/ckeditor.js" ></script>    
 <script type="text/javascript">
     CKEDITOR.replace('content');
 </script>
</body>
</html>