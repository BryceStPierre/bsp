<?php
/*
 * Template for displaying search forms.
 */
?>

<form role="search" method="get" class="searchform" id="searchform" action="<?php echo home_url( "/" ); ?>">
  <div class="input-group">
    <input type="text" class="form-control form-control-sm" name="s" placeholder="Search" autocomplete="off">
    <div class="input-group-append">
      <button type="submit" class="btn btn-sm btn-dark" id="searchsubmit">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>