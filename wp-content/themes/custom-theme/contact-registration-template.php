<?php
/**
 * Template Name: Contact Registration
 */

 get_header();?>

 <div class="row justify-content-center">
    <form action="" method="post" style="width:40vw; box-shadow:3px 3px 3px 3px grey; padding:30px;">
        <div class="form-group">
            <input type="text" name="name" class="form-control input-sm mb-3" id="name" placeholder="input your full names here" required>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control input-sm mb-3" id="email" placeholder="input your email here" required>
        </div>
        <div class="form-group">
            <input type="number" name="telephone" class="form-control input-sm mb-3" id="telephone" placeholder="input your telephone number here" required>
        </div>
        <div class="form-group">
            <input type="text" name="message" class="form-control input-sm mb-3" id="message" placeholder="input your message here" required>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <input type="submit" value="Register" name="submitbtn" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>
 </div>

 <?php get_footer(); ?>