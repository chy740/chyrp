<?php
	require_once "common.php";
	header("Content-Type: text/xml; charset=utf-8", true);
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.">\n"; ?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
	<service>
		<engineName>Chyrp</engineName>
		<engineLink>http://chyrp.net/</engineLink>
		<homePageLink><?php echo $config->url; ?></homePageLink>
		<apis>
			<api name="Moveable Type" preferred="false" apiLink="<?php echo $config->url; ?>/includes/xmlrpc.php" blogID="1" />
			<api name="MetaWeblog" preferred="true" apiLink="<?php echo $config->url; ?>/includes/xmlrpc.php" blogID="1" />
		</apis>
	</service>
</rsd>
<?php exit; ?>