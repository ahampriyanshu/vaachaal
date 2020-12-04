<?php include("header.php");
if (!isset($_SESSION["loggedin"])) {
  header('location:index.php');
}
?>
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<div class="col-lg-9 mx-auto text-center">
  <div class="my-4 text-center">
    <h2><span class="badge badge-dark"><i class="fa fa-plus-square mr-2"></i>Add New Question</span></h2>
  </div>

  <form name="addform" action="postQuestion.php" method="POST">
    <input type="hidden" name="qid" value="<?php echo $id; ?>">
    <textarea name="content" required>  </textarea>
    <script>
      CKEDITOR.replace('content');
    </script>

    <div class="container mx-auto my-4">
      <div class="row">
        <div class="form-group col-sm m-2">
          <select name="category" class="form-control">
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
        <div class="form-group col-sm m-2">
          <select name="language" class="form-control">
            <option value="English">English</option>
            <option value="हिन्दी">हिन्दी</option>
            <option value="తెలుగు">తెలుగు</option>
            <option value="தமிழ்">தமிழ்</option>
            <option value="ಕನ್ನಡ">ಕನ್ನಡ</option>
            <option value="ਪੰਜਾਬੀ">ਪੰਜਾਬੀ</option>
            <option value="বাংলা">বাংলা</option>
          </select>
        </div>
        <div class="form-group col-sm m-2">
          <select name="duration" class="form-control">
            <option value="0-2 min">0-2 Min</option>
            <option value="2-5 Min">2-5 Min</option>
            <option value="5-10 Min">5-10 Min</option>
          </select>
        </div>
        <div class="col-sm m-2">
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
</div>
<?php include("footer.php"); ?>