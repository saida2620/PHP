<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
	<title>TSFileBrowser</title>
    <script type="text/javascript" src="/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
	tinymce.init({
	    selector: "textarea#minEditor",
	    theme: "modern",
		element_format : "html",
	    width: 700,
	    height: 300,
		resize: "both",
		language : 'da',
	    plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	         "save table contextmenu directionality emoticons template paste textcolor"
	   ],
	   content_css: "/tinymce/css/content.css",
	   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons"
	 });
    </script>
</head>

<body>

<form action="index.php" method="post">
    <textarea id="minEditor" name="area"></textarea>
</form>

</body>
</html>