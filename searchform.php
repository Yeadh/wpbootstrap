<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<div id="custom-search-input">
    <div class="input-group col-md-12">
        <input type="text" class="form-control input" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
    </div>
</div>
</form>