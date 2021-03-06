<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ($BASE) ?>/views/styles/judge.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Judge</title>
    <style>
    </style>
</head>
<body>
<div class="">
    <nav class="navbar navbar-toggleable-sm bg-light py-0 text-black welcome">
        <a class="navbar-brand"><img height="40vh" width="50vw" src="/355/symposium/views/images/judge.png"> <strong></strong> </a>
        <form class="form-inline">
            <a class="nav-item nav-link" href="" style="border-left: 1px solid rgb(204,204,255)">Sign Out</a>
        </form>
    </nav>
    <div style="background-color: white" class="container col-md-8 border tablecon mt-5 table-view">
        <h5 class="mt-2 font-weight-light">List of participants</h5>
        <div class="" style="overflow-x: auto">
            <table class="table border">
                <thead style="">
                <tr>
                    <th colspan="3" class="border" scope="col" style="background-color: lightyellow">Name</th>
                    <th colspan="5" scope="col" class="border" style="background-color: lightyellow">Scores</th>
                </tr>
                <tr>
                    <th scope="col" style="background-color: lightyellow">#</th>
                    <th scope="col" class="bg-light">First Name</th>
                    <th scope="col" class="bg-light">Last Name</th>
                    <th scope="col" class="bg-light border-left">Q1</th>
                    <th scope="col" class="bg-light">Q2</th>
                    <th scope="col" class="bg-light">Q3</th>
                    <th scope="col" colspan="2" class="bg-light">Q4</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach (($participants?:[]) as $participant): ?>
                    <tr class="col-md-12" id="" data-val="<?= ($participant['id']) ?>">
                        <th scope="row" id="row" style="background-color: lightyellow; width: 6%"><?= ($participant['id']) ?></th>
                        <td class="clickable"><?= ($participant['first_name']) ?></td>
                        <td class="clickable border-right"> <?= ($participant['last_name']) ?></td>
                        <td class="clickable">10</td>
                        <td class="clickable">20</td>
                        <td class="clickable">30</td>
                        <td class="clickable">12</td>
                        <td class="border text-center pl-0 pr-0 bg-light submit"><small><strong>Submit</strong></small></td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <button class="btn btn-primary float-right mt-5">Go Back</button>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(".judge").hide();
    range = $('.slider > .range');
    value = $('.slider > .value');

    value.val(range.attr('value'));

    range.on('input', function(){
        monparent=this.parentNode;

        value=$(monparent).find('.value');
        $(value).val(this.value);
    });

    value.on('input', function(){
        monparent=this.parentNode;
        range=$(monparent).find('.range');
        $(range).val(this.value);
    });


    $(".clickable").on('click', function (e) {
        var selected = $(e.currentTarget).parent().attr("data-val");
        // alert(selected);
        var selected = "http://asingh.greenriverdev.com/355/symposium/score/" + selected;
        // var selected = "http://asingh.greenriverdev.com/355/symposium/" + selected;

        location.href = selected;
    });
</script>
</html>