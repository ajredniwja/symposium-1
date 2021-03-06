<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ($BASE) ?>/views/styles/add-participant.css">
    <title>List of Judges</title>
</head>
<body>
<div id="top-box">

</div>
<div class="container">
    <div class="form-group row">
        <div class="col-md-6 offset-md-3 pb-3 field">
            <div class="row">
                <div class="col-8">
                    <legend class="font-weight-light h5 mt-3">List of Judges</legend>
                </div>
                <div class="col-4 text-right">
                    <a href="<?= ($BASE) ?>/create"><span class="h4">&larr; </span></a>
                </div>
            </div>
            <hr>

            <div class="display-judges">
                <div class="form-group row">
                    <div class="col form-group">
                        <input id="judge-input" class="form-control" type="text" name="level-name">
                        <button id="add-btn" name="add-btn" class="btn-sm btn-success rounded-0 mt-1">&#43;Add Judge</button>
                    </div>
                </div>

                <?php foreach (($judges?:[]) as $judge): ?>
                    <div class="form-group row m-0 border border-secondary p-2 pt-3 mb-2">
                        <div class="col-6">
                            <p class="h5 font-weight-light"><?= (($judge)['judge_name']) ?></p>
                        </div>
                        <div class="col-6 text-right">
                            <button id="<?= (($judge)['id']) ?>" class="delete-judge btn-sm rounded-0 btn-danger">Delete</button>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
<script src="//code.jquery.com/jquery.js"></script>
<script>
$(document).ready(function() {
    $("#add-btn").click(function () {
        if ($('#judge-input').val() != '') {
            $.post(window.location, {'insert-judge': $('#judge-input').val()}, function(data) {
                location.reload();
            });
        }
    });

    $(".delete-judge").click(function() {
        $.post(window.location, {'delete-judge': $(this).attr('id')}, function(data) {
        });

        $(this).parent().parent().remove();
    });
});
    
</script>
</html>