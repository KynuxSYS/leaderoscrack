﻿<?php
	header("refresh: 4;  url=$site_url/index.php");

	include ('../ayarlar/ayar.php');	

	include ('../head.php');
?>
<body>
	<?php
		include('../logo.php');
	?>
    <div id="wrapper">
		<?php
			include ('../header.php');
		?>
        <div id="sol">
            <div class="icBaslik"><div class="icBaslikYazi"><i class="fa fa-times fa-3x"></i><font size="6"> SAYFA BULUNAMADI!</font></div></div>
            <div class="ic">
                <div class="flag note note--error">
                    <div class="flag__image note__icon">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="flag__body note__text">
                        Aradığınız sayfa bulunamadı!
                    </div>
                </div>
            </div>
        </div>
		<?php

			include ('../right.php');

		include ('../footer.php');
		
	?>
    </div>
</body>
</html>
