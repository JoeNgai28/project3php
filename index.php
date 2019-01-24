<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php require_once('assets/partials/nav.php'); ?>
	<h1>Incident Management Reporting</h1>
	<hr>
	<form action="assets/process.php" method="post">
        <label>Incident Type <br>
			<input type="radio" name ="reportable" value="RMI"> RMI
		</label>
		<label>
			<input type="radio" name="reportable" value="QMI"> QMI
		</label><br><br>
        <select id="platform" name="platform">
            <option>Chose Platform</option>
            <script>
                var platform = new Array("MO","GLS","ISS","DW","RA","PE","AIS360","ESP");
                for (i=0; i<platform.length; i++){
                    document.write('<option value="'+ platform[i]+'">' + platform[i] + '</option>');
                }
            </script>
        </select> Platform
        <br><br>
         <select id="app" name="application">
            <option>Chose Application</option>
                <script>
                    var platform = new Array("TMAN","ROSSCO","MERCER","FEEDER","GLSEngine","Mosiki","ERP","RecX","ISS","ISSReport");
                    for (i=0; i<platform.length; i++){
                        document.write('<option value="'+ platform[i]+'">' + platform[i] + '</option>');
                    }
                </script>
        </select> Application
        <br><br>
        <label>
        <input type="text" name="incidentno" placeholder="IN1234567">
        </label>Incident No.
        <br><br>
        <label>
        <input type="date" name="date">
        </label>Reported Date
        <br><br>
        <label>Incident Summary<br>
            <textarea rows="4" cols="50" name="summary" placeholder="Incident description"></textarea>
        </label><br><br>            
        <select id="issuetype" name="issuetype">
            <option>Chose Type</option>
            <script>
                var platform = new Array("Application","Infrastructure","Manaual","Corp-Infra","Database","Network","Business","Client");
                for (i=0; i<platform.length; i++){
                    document.write('<option value="'+ platform[i]+'">' + platform[i] + '</option>');
                }
            </script>
        </select> Issue Type
        <br><br>
       <label>Root Cause<br>
            <textarea rows="4" cols="50" name="root" placeholder=""></textarea>
        </label><br><br>                   
        
		<input type="submit" value="submit" style="background-color:grey">
	</form>
	<hr>
    <?php require_once('assets/partials/footer.php'); ?>
</body>
</html>