<?php for ($num=1; $num <= $totalPages ; $num++) { ?>
	<?php if ($num != $current_page) { ?>

		<!-- <li class="page-item"> -->
            <span><a href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="page-link"><?= $num ?></a></span>
        <!-- </li> -->
	<?php } else { ?>
		<!-- <li class="page-item active"> -->
            <span><a href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="page-link"><?= $num ?></a></span>
        <!-- </li> -->
	<?php } ?>
<?php } ?>