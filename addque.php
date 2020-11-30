<?php include("header.php");
if (!isset($_SESSION["loggedin"])) {
  header('location:index.php');
}
?>
<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<div class="col-lg-12 text-center">
<div class="col-lg-9 mx-auto my-4 text-center">
         <h2><span class="badge badge-light"><i class="fa fa-plus-square mr-2"></i>Add New Question</span></h2>
      </div>

      <form name="addform" action="postque.php" method="POST">
        <input type="hidden" name="qid" value="<?php echo $id; ?>">
        <div class="container my-4">
        <textarea name="content" required>  </textarea>
        <script>
        CKEDITOR.replace( 'content' );
        </script>
        </div>

        <div class="container my-4">
          <div class="row">
            <div class="col-sm m-2">
              <select name="category" class="custom-select">
                <option value="Tech">Tech</option>
                <option value="Literature">Literature</option>
                <option value="Web">Web</option>
                <option value="Political">Political</option>
                <option value="Maths">Maths</option>
                <option value="Science">Science</option>
                <option value="Histoy">Histoy</option>
                <option value="Geography">Geography</option>
                <option value="Economics">Economics</option>
                <option value="Misc">Misc</option>
              </select>
            </div>
            <div class="col-sm m-2">
              <select name="language" class="custom-select">
                <option value="English">English</option>
                <option value="हिन्दी">हिन्दी</option>
                <option value="తెలుగు">తెలుగు</option>
                <option value="தமிழ்">தமிழ்</option>
                <option value="ಕನ್ನಡ">ಕನ್ನಡ</option>
                <option value="ਪੰਜਾਬੀ">ਪੰਜਾਬੀ</option>
                <option value="বাংলা">বাংলা</option>  
              </select>
            </div>
            <div class="col-sm m-2">
              <select name="duration" class="custom-select">
                <option value="0-2 min">0-2 Min</option>
                <option value="2-5 Min">2-5 Min</option>
                <option value="5-10 Min">5-10 Min</option>
              </select>
            </div>
            <div class="col-sm m-2">
              <button type="submit" name="submit" class="btn btn-success">Ask Question</button>
            </div>
          </div>
        </div>
    </div>

  <!-- <div id="questionbox">
    <form name="addform" action="postque.php" method="POST" required>
      <h class="title">Post New Question</h> &emsp; &emsp; &emsp; &emsp; &emsp;
      <input type="submit" id="submit" value="Get answer"><br><br><br>
      <textarea name="content" class="question_text" cols="80" rows="10" placeholder="Enter Question" required></textarea>
      <br>
      <div class="select">
        &emsp;
        <label>Topic</label>&nbsp;&nbsp;
        <select name="category" class="option">
          <option value="Low">Low</option>
          <option value="Medium">Medium</option>
          <option value="High">High</option>
        </select>

        &emsp;&emsp;

        <label>language</label>&nbsp;&nbsp;
        <select name="language" class="option">
          <option value="CSE/IT">CSE/IT</option>
          <option value="ME">ME</option>
          <option value="EE">EE</option>
          <option value="Civil">Civil</option>
          <option value="ECE">ECE</option>
          <option value="PE">PE</option>
          <option value="Misc">Misc</option>
        </select>
        &emsp;&emsp;
        <label>Minutes Read</label>&nbsp;&nbsp;
        <select name="duration" class="option">
          <option value="0-2 min">0-2 Min</option>
          <option value="2-5 Min">2-5 Min</option>
          <option value="5-10 Min">5-10 Min</option>min
        </select>
      

     
      </div>
    </form>
  </div> -->
</body>
</html>