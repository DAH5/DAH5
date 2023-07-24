---
page_title: Times Tables - Multiplication - Mathematics
section: Mathematics
layout: src/_inc/base.php
---

<h2>Times Tables</h2>
<p>Knowing your times tables can help you multiply numbers together more easily and perform different kinds of calculations in your daily activities.</p>
<p>This page will present a table that you can use as a cheat sheet to learning your multiplications and getting to an answer quickly and easily.</p>

<div style="max-width: 100%; overflow-y: auto; text-align: center; font-family: monospace;">
    <table style="width: 100%">
        <?php for( $y = 1; $y <= 24; $y++ ): ?>
            <tr>
                <?php for( $x = 1; $x <= 24; $x++ ): ?>
                    <?php if( $x == 1 || $y == 1 ): ?>
                        <td><b><?php echo $x * $y; ?></b></td>
                    <?php else: ?>
                        <td><?php echo $x * $y; ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>
