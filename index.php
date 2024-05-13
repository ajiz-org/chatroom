<?php

$link = mysqli_connect("localhost", "root", "", "chatroom");
$result = mysqli_query($link, "SELECT name, id FROM users");

?>


<div style="display: flex; gap: 30px">
	<ul>

		<?php
		while (True) {
			$row = mysqli_fetch_row($result);

			if ($row == null)
				break;

		?>
			<li><a target="msgs" href="msgs.php?uid=<?= $row[1] ?>"><?= $row[0] ?></a></li>

		<?php
		}
		?>


	</ul>

	<iframe name="msgs" style="flex:1; height: 90vh"></iframe>

</div>