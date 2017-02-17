<div class="row">
    <div class="col-xs-12">
        <h2>Users
            <small>All registrations are done on the app.</small>
        </h2>
        <hr/>
    </div>
    <div class="col-xs-12 users-list">
        <ul class="list-group">
            <?php foreach (range(0, 12) as $l) { ?>
                <li class="list-group-item horizontal-flex-start">
                    <i class="fa fa-user fa-3x"></i>
                    <div>
                        <ul class="list-unstyled">
                            <li><b>John Doe Smith</b></li>
                            <li class="small text-muted"><em>23rd Jun 2016</em> &middot; johndoe@gmail.com</li>
                            <li><label><input type="checkbox"> Admin</label> &middot; <label><input type="checkbox"> Disable</label></li>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>