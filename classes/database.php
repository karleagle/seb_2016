<?php

// Class for Contacts
class Contact {
	function __construct($business=null, $contact_id=null) {
		$this->details = Database::getContacts($business, $contact_id);
	}

	function listContacts($business=null) {
		// Set the columns and print the table head
		$table_head = "
		<div class='tableBox left_align'>
			<table class='contactTable'>
			<thead>
				<tr>";
		if (!empty($business)) {
			$table_head .= "
				<th>Business</th>";
		}
		$table_head .= "
			    <th>First name</th>
			    <th>Last name</th>
			    <th>Email</th>
			    <th>Phone</th>
			    <th>Address</th>
			    <th>Invoicing</th>
			  </tr>
			</thead>
			<tbody>";
		echo $table_head;

		// Populate table
		foreach($this->details as $contact)	{
			// Only print the relevant lines
			if (is_null($business)==is_null($contact['business'])) {

				// Set local or international billing
				$billing = "Local";
				if ($contact['international'] != 0) {
					$billing = "International";
				}

				$table_row = "
			 <tr>
				 <td>";
		 		if (!empty($business)) {
		 			$table_row .= $contact['business'] . "</td>
					<td>";
		 		}
				$table_row .= $contact['f_name'] . "</td>
				 <td>" . $contact['l_name'] . "</td>
				 <td>" . $contact['email'] . "</td>
				 <td>" . $contact['phone'] . "</td>
				 <td>" . $contact['address'] . "</td>
				 <td>" . $billing . "</td>
			 </tr>";

				echo $table_row;
			}
		}
		echo "
			</tbody>
		</table>
	</div>";
	}

}

// Hold the calls to the database
class Database {

	/* CONTACTS */
	public static function getContacts($contact_id=null){
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}

		//detail statement and prepare it for execution
		$statement = "SELECT * FROM contacts";

		//return only one contact
		if ($contact_id != null) {
			$statement .= " AND contacts.contact_id = '$contact_id'";
		}

		//add descending order
		$statement .= " ORDER BY contacts.contact_id DESC";

		$handler = $DBH->prepare($statement);
		$handler->execute(); // could be sped up in $DBH->query($statement) - no prepare/execute

		$set=array();

		while ( $row = $handler->fetch(PDO::FETCH_ASSOC) ) {

			$set[] = $row;
		}

		// close connection
		$DBH = null;

		return $set;
	}

}


?>
