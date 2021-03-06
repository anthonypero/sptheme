<div class="submitted">

    <span class="submitted__label">Posted on <?php echo get_the_date( 'F jS, Y' ); ?></span>

    <?php if ( has_category() || has_tag() ) : echo 'in&nbsp;&nbsp;'; if ( has_category() ) : ?>

    <span class="submitted__cat">
        <?php the_category( '' ); ?> 
    </span>

    <?php if ( has_category() && has_tag() ) : ?><span class="submitted__label">&nbsp;and&nbsp;&nbsp;</span><?php endif; ?>

    <?php if ( has_tag() ) : ?>

    <span class="submitted__tag">
        <?php the_tags( '', '', '' ); ?> 
    </span>

    <?php endif; /* Closes if has_tag() */ ?>
    <?php endif; /* Closes if has_category() */ ?>
    <?php endif; /* Closes if has_category() || has_tags() */ ?>
</div>