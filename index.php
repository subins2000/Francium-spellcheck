<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    <form method="POST">
      <label>
        Word :
        <br/>
        <input type="text" name="word"/>
      </label><br/><br/>
      <button>Submit</button>
    </form>
    <?php
    require __DIR__ . "/class.spellcheck.php";
    if(isset($_POST['word']) && $_POST['word'] != null){
      $word = htmlspecialchars($_POST['word']);
      echo "<h2>Result for word '". $word ."'</h2>";
      $word = \Fr\SC::check($word);
      
      if($word == null){
        echo "No corrections";
      }else{
        echo "Did you mean: <b>$word</b>";
      }
    }
    ?>
  </body>
</html>
