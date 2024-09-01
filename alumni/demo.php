<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
        <link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <script src="../js/plugins/table.min.js"></script>
    </head>

    <body>

        <div id="example">
        <label for="inputPassword4" class="form-label">Message</label>
              <textarea name="message" class="form-control  align.apply (value)" placeholder="Add Skills,About the job, company Description,Responsibilities"></textarea>
            
        </div>

        <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
        <script> 
            var editor = new FroalaEditor('#example');
        </script>
    </body>

</html>