<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php require_once('assets/partials/nav.php'); ?>
	<h1>Enter A Performer</h1>
	<hr>
	<form action="assets/process.php" method="post">
        <select id="platform" name="platform">
            <option>Chose One</option>
            <script>
                var platform = new Array("MO","GLS","ISS","DW","RA","PE","Client","Reports");
                for (i=0; i<platform.length; i++){
                    document.write('<option value="'+ platform[i]+'">' + platform[i] + '</option>');
                }
            </script>
        </select> Platform <br><br>
               <select id="platform" name="platform">
            <option>Chose One</option>
        <script>
            var platform = new Array("TMAN","ROSSCO","MERCER","FEEDER","GLSEngine","Mosiki","ERP","RecX","ISS","ISSReport");
            for (i=0; i<platform.length; i++){
                document.write('<option value="'+ platform[i]+'">' + platform[i] + '</option>');
            }
        </script>
        </select> Application <br><br>
        <label>
			<input type="radio" name ="type" value="internal"> Internal
		</label>
		<label>
			<input type="radio" name="type" value="external"> External
		</label><br><br>
        <label>
        <input type="text" name="Owner" placeholder="Bill Smith" >
        </label>Owner    
		<br><br>
		<label>
        <label>
        <input type="time" name="sla_time">
        </label>Deadline    
		<br><br>
		
            
        <label>           
			<input type="radio" name ="genre" value="Rock"> Rock
		</label>
		<br>
		<label>
			<input type="radio" name="genre" value="Hip-Hop"> Hip-Hop
		</label>
		<br>
		<label>
			<input type="radio" name="genre" value="Salsa"> Salsa
		</label>
		<br>
		<input type="submit" value="submit">
	</form>
	<hr>
    <?php require_once('assets/partials/footer.php'); ?>
</body>
</html>