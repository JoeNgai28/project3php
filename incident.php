<html>
<head>
	<title>PHP and JSON Project3</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Profiles</h1>
	<hr>
	<table>
		<tr>
            <th>ID</th>
			<th>Incident Type</th>
			<th>Group</th>
			<th>Apps Impacted</th>
			<th>IN no.</th>
            <th>Date</th>
            <th>Summary</th>
            <th>Issue Type</th>
            <th>RootCause</th>
		</tr>

	<?php
		//while in the table, get the json data
		$d = file_get_contents('assets/data.json');
		//convert the data to a php array so we can work with it
		$d = json_decode($d, true);
		
		//loop through the data to create dynamic html
		foreach($d as $k => $o){
			//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
			echo '<tr>
					<td>'.++$k.'</td>
					<td>'.$o['reportable'].'</td>
					<td>'.$o['platform'].'</td>
					<td>'.$o['application'].'</td>
                    <td>'.$o['incidentno'].'</td>
                    <td>'.$o['date'].'</td>
                    <td>'.$o['summary'].'</td>
                    <td>'.$o['issuetype'].'</td>
                    <td>'.$o['root'].'</td>
				</tr>';
		}
	?>

	</table>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>