<div class="modal fade" id="searchmodal" tabindex="-1" role="dialog">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span aria-hidden="true">&times;</span>
    </button>

    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?php echo esc_url(home_url()); ?>">
                    <div class="input-group">
                        <input type="search" name="s" class="form-control" placeholder="<?php echo esc_attr__('Search Here', 'political'); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submiy"><i class="im im-magnifier"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>