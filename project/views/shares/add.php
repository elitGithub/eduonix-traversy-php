<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            Share Something
        </h3>
    </div>
    <div class="panel-body">
        <form>
            <div class="form-group">
                <label for="post-title">Share Title</label>
                <input type="text" name="title" id="post-title" class="form-control">
            </div>
            <div class="form-group">
                <label for="post-body">Body</label>
                <textarea name="body" id="post-body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="post-title">Link</label>
                <input type="text" name="link" id="post-title" class="form-control">
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="submit">
            <a href="<?php echo ROOT_PATH ?>shares" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>