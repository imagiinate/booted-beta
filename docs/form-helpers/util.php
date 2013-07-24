<!DOCTYPE html>
<html>
  <!--
    I used this file to generate 7 PNG files, each containing 
    100 or fewer Google fonts. I then knit those files together
    in Photoshop to create the sprite used for the options in
    the Google font picker.
  -->
  <body>
    <img id="save">
    <canvas id="canvas" width="240" height="30"></canvas>
    <script src="../../assets/js/form-helpers/bootstrap-formhelpers-googlefonts.codes.js"></script>
    <script>
      var families = [];
      for (var i = 600; i < 700; i++) {
        if (!GoogleFontsList.items[i]) {
          break;
        }
        families.push(GoogleFontsList.items[i].family);
      }
      var WebFontConfig = {
        'google': { 'families': families },
        'active': function() {
          var canvas = document.getElementById('canvas');
          canvas.height = ( 30 * families.length ) + 5;
          var ctx = canvas.getContext('2d');
          for (var i = 0; i < families.length; i++) {
            ctx.font = "20px '" + families[i] + "'";
            ctx.fillStyle = '#000';
            ctx.fillText(families[i], 10, ((i + 1) * 30) - 5);
          }
          setTimeout(function() {
            document.getElementById('save').src = canvas.toDataURL();
          }, 5000);
        }
      };
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
  </body>
</html>