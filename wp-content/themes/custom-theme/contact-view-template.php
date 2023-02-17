<?php
/**
 * Template Name: View Contacts
 */

 get_header();?>

 <?php 
    global $wpdb;
    $table = $wpdb->prefix.'contacts';
    $contacts = $wpdb->get_results("SELECT * FROM $table");
 ?>
<p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Full-Name</th>
            <th>Email</th>
            <th>Telephone-Number</th>
            <th>Message</th>
        </tr>
    </thead>
    <?php
    foreach($contacts as $contact){?>
        <tr>
            <td><?php echo $contact->fullname;?></td>
            <td><?php echo $contact->email;?></td>
            <td><?php echo $contact->telephone;?></td>
            <td><?php echo $contact->message;?></td>
        </tr>

   <?php }?>
</table>
</p>

 <?php get_footer(); ?>