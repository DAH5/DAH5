---
page_title: International Rescue
layout: src/fansites/international-rescue/_inc/base.php
---

<?php
$members = array( "Jeff Tracy" => "Founder & CEO", "Scott Tracy" => "Pilot & First Responder", "Virgil Tracy" => "Pilot & Transporter", "Alan Tracy" => "Astronaught", "Gordon Tracy" => "Aquanaught", "John Tracy" => "Communicator" );
?>

<div class="members">
    <?php foreach( $members as $member_name => $member_position ): ?>
    <div class="member <?php echo strtolower( str_replace( " ", "-", $member_name ) ); ?>">
        <div class="img"></div>
        <p><?php echo $member_name; ?></p>
        <p><?php echo $member_position; ?></p>
    </div>
    <?php endforeach; ?>
</div>