<?php
/**
 * Created by PhpStorm.
 * User: Angujo Barrack
 * Date: 15-Feb-17
 * Time: 3:54 AM
 */ ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Chat Moderation
                    <small>Filtered Keywords</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form onkeypress="return event.keyCode != 13;">
                    <input data-role="tagsinput" value="f*ck,sh*t,b*tch" type="text">
                    <div class="clearfix">
                        <button type="submit" class="btn btn-sm btn-primary pull-right">Save</button>
                    </div>
                </form>
                <hr/>
            </div>
            <div class="col-xs-12">
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Enter words that need to be filtered out of the chats. Above words will be removed from the conversations between private members or within a group chat on the app.<br/>
                    Chats will not be shown here.
                </div>
            </div>
        </div>
    </div>
</div>
