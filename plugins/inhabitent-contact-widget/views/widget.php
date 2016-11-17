<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $phone) ) > 0): ?>  
    <p>
        <span class = "phone"><i class = "fa fa-phone" aria-hidden="true"> </i> </span><a href = "<?php $phone; ?>"><?php echo $phone; ?></a> 
       
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $email) ) > 0): ?>  
    <p>
        <span class = "email"><i class = "fa fa-envelope" aria-hidden="true"></i></span><a href = "mailto:<?php $email; ?>"><?php echo $email; ?></a>
    </p>
<?php endif; ?>

<?php if ( strlen( trim( $address) ) > 0): ?>  
    <p>
        <span class = "address"><i class="fa fa-map-marker" aria-hidden="true"> </i> </span> <?php echo $address; ?>
    </p>
<?php endif; ?>