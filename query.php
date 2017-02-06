<?php
echo file_get_contents('https://server.arcgisonline.com/arcgis/rest/services/Demographics/USA_2000-2010_Population_Change/MapServer/4/query?where=' . htmlspecialchars($_GET["query"]) . '&outFields=*&returnGeometry=false&f=pjson');
?>